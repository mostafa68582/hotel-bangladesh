<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class FaciltiesCategory extends Model
{
    protected $fillable = ['name'];

    public function facilities(){
        return $this->hasMany(facilities::class, 'categories_id');
    }
}
