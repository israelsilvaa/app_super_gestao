<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcessadorDetalhesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('processador_detalhes', function (Blueprint $table) {
            // colunas necessarias
            $table->id();
            $table->unsignedBigInteger('processador_id');
            $table->boolean('fabricante');
            $table->string('modelo', 50);
            $table->integer('nucleos');
            $table->float('frequencia', 2, 2);
            $table->timestamps();

            // constraint
            $table->foreign('processador_id')->references('id')->on('processadores');
            $table->unique('processador_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // removendo FKs
        Schema::table('processador_detalhes', function(Blueprint $table){
            $table->dropForeign('processador_id');
        });

        // apagando tabela
        Schema::dropIfExists('processador_detalhes');
    }
}
