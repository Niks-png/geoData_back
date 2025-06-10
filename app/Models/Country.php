<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    /** @use HasFactory<\Database\Factories\CountryFactory> */
    use HasFactory;
    protected $filllable = ['name','area_km2','population',
            ];
            public function country()
            {
                return $this->belongsTo(Country::class);
            }
        
}
