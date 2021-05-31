<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')
            ->constrained('users')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('institutionAutorise');
            $table->integer('numIdentificationFiscale');
            $table->string('qualitéDéclarant');
            $table->string('etatImmobilier');
            $table->string('adresse');
            $table->integer('superficieTerrainNonBati');
            $table->integer('valeurCommerciale');
            $table->integer('surfaceCouverte');
            $table->string('compositionImmobilierEtSesDépendances');
            $table->string('teintureUtilisation');
            $table->string('activitéMentionnée');
            $table->string('servicesDispo');
            /*$table->string('coordonnéeGéo');
            $table->dateTimeTz('date_suivie');
            $table->string('nom_responsable');*/
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permis');
    }
}
