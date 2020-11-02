<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurriculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curriculos', function (Blueprint $table){
            $table->id();
            $table->string('nome');
            $table->string('sobrenome');
            $table->string('foto');
            $table->string('estado_civil');
            $table->string('genero');
            $table->date('data_nascimento');
            $table->string('naturalidade');
            $table->foreignId('endereco_id')->constrained();
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
        Schema::dropIfExists('curriculos');
    }
}
