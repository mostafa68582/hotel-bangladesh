<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    protected $fillable = ['room_type_id','image','caption','status'];
}
