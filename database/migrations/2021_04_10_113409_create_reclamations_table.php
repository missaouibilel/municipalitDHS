<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReclamationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reclamations', function (Blueprint $table) {
            $table->id();
            $table->string('imageRec');
           // $table->string('coordonnéesGéo')->default('dfgfgdg');
            $table->longText('description');
            $table->foreignId('users_id')
            ->constrained('users')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->timestampTz('dateReclamation', $precision = 0);
            $table->string('etat')->default('en cours');
            /*$table->timestampTz('dateReponce', $precision = 0);
            $table->text('imagesRep');
            $table->string('reponce')*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reclamations');
    }
}
