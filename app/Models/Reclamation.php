<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reclamation extends Model
{
    protected $fillable=[
        'dateReclamation',
        'imageRec',
        'description',
        'users_id',
        //'coordonnéesGéo',
        //'dateReponce',
       // 'etat',
       // 'imagesRep',
        //'reponce'
    ];
    public $timestamps=false;

}
