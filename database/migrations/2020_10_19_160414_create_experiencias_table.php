<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperienciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiencias', function (Blueprint $table){
            $table->id();
            $table->text('descricao');
            $table->string('cargo');
            $table->string('empresa');
            $table->string('nivel'); // Estagiário, Junior, Especialista ..
            $table->string('area')->nullable(); // RH, TI...
            $table->date('inicio');
            $table->date('saida')->nullable();
            $table->boolean('ehAtual');
            $table->foreignId('curriculo_id')->constrained();
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
        Schema::dropIfExists('experiencias');
    }
}
