<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfoPubliquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_publiques', function (Blueprint $table) {
            $table->id();
            $table->dateTimeTz('date',$precision=0);
            $table->string('etat');
            $table->string('type');
            $table->string('lieu');
            $table->string('responsaple');
            $table->longText('description');
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
        Schema::dropIfExists('info_publiques');
    }
}
