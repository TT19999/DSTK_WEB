<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarPark extends Model
{
    use HasFactory;

    protected $table="CarParks";

    protected $fillable=[
        'user_id',
        'title',
        'description',
        'subDescription',
        'location',
        'lat_map',
        'lng_map',
        'city',
        'created_at',
        'updated_at',
    ];
}
