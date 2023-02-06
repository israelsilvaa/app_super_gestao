<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterLojasNovasColunas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lojas', function(Blueprint $table){
            $table->string('uf', 2)->after('nome');
            $table->string('email', 150)->after('uf');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::table('lojas', function(Blueprint $table){
            $table->dropColumn('uf');
            $table->dropColumn('email');
        });
    }
}
