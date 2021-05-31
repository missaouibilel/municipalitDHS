<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    protected $fillable=[
        'type',
        'lieu',
        'dateDemande',
        'description',
        'etat',
        'users_id',
    ];
    public $timestamps=false;
}
