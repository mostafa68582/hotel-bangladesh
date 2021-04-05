<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FacilityCategory extends Model
{
    protected $fillable = ['name'];

    public function facilities(){
        return $this->hasMany(facilities::class, 'categories_id');
    }
}
