<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);

            // Ārējā atslēga uz countries tabulu
            $table->foreignId('country_id')
                  ->constrained('countries') // vai vienkārši ->constrained() ja tabulas nosaukums ir 'countries'
                  ->onDelete('cascade')     // dzēš arī cities, ja dzēš country
                  ->onUpdate('cascade');    // atjauno arī cities, ja atjauno country ID

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cities');
    }
};
