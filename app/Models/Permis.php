<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Permis extends Model
{
    protected $fillable=[
        'institutionAutorise',
        'numIdentificationFiscale',
        'qualitéDéclarant',
        'etatImmobilier',
        'adresse',
        'superficieTerrainNonBati',
        'valeurCommerciale',
        'surfaceCouverte',
        'compositionImmobilierEtSesDépendances',
        'teintureUtilisation',
        'activitéMentionnée',
        'servicesDispo',
        'users_id',
    ];
    public $timestamps= false;
}
