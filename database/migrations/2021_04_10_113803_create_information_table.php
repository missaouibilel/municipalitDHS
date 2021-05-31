<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('information', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->dateTimeTz('dateDemande',$precision=0);
            $table->string('lieu');
            $table->longText('description');
            $table->string('etat')->default('encour');
            $table->foreignId('users_id')
                  ->constrained('users')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            /*$table->string('etat')->default('en cours');
            $table->dateTimeTz('dateRep',$precision=0);
            $table->longText('reponce');
            $table->text('fichierRep');
            */
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
        Schema::dropIfExists('information');
    }
}
