<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnderecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enderecos', function (Blueprint $table){
            $table->id();
            $table->string('cep');
            $table->integer('numero');
            $table->string('logradouro');
            $table->string('cidade');
            $table->string('complemento')->nullable();
            $table->string('uf');
            $table->string('bairro')->nullable();
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
        Schema::dropIfExists('enderecos');
    }
}
