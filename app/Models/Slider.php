<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable=[
        'titre',
        'image',
        'description'
    ];
    public $timestamps=false;

}
