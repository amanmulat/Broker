<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;
     public $fillable = [
        'unit_name' ,
        'bed' , 
        'bath',
        'area' ,
        'unit_cover' ,
        'unit_image' ,
        'sorting' ,
        'furnished',
        'status' ,
        'sell' ,
        'rent' ,
        'desc' ,
        'amenities',
        'contact' ,
        'tour' ,
        'progress',
        'kind',
        'location',
    ];
    protected $casts = [
        'unit_image' => 'array',
        'furnished' => 'array',
        'status' => 'array',
        'sell' => 'array',
        'rent' => 'array',
        'amenities' => 'array',
        'contact' => 'array',
        'kind' => 'array',
        'location' => 'array',
    ];
}
