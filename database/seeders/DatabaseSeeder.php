<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Country;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     
Seed the application's database.*/
  public function run(): void{// User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Country::factory(5)
            ->create()
            ->each(function ($country) {
                // Create 4 cities for each country (5 * 4 = 20 total cities)
            City::factory(4)->create([
                    'country_id' => $country->id
                ]);
            });
    }
}