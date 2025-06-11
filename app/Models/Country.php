<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'area_km2', 'population'];

    // Accessor for 'area'
    public function getAreaAttribute()
    {
        return $this->area_km2;
    }

    // Mutator for 'area'
    public function setAreaAttribute($value)
    {
        $this->attributes['area_km2'] = $value;
    }
}
