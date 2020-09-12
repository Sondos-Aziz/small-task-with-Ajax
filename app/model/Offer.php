<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $table = "offers";
    protected $fillable = ['name', 'photo', 'price', 'details',  'created_at', 'updated_at', 'status'];
    // protected $hidden = ['created_at', 'updated_at'];
}
