<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activite extends Model
{
    protected $fillable=[
        'date',
        'etat',
        'type',
        'lieu',
        'responsable',
        'description',
    ];

    public $temestamps=false;
}
