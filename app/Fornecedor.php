<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fornecedor extends Model
{
    use SoftDeletes;
    // esse nome sobre põem o nome automático que o ORM Eloquent usa p/ persitir no banco.
    protected $table = "fornecedores";

    /* Habilita o preenchimento de atrtibutos atravez do metodo ::CREATE 
     Comando.
     \App\Fornecedor::create([
     'nome'=>'fornecedor ABC', 
     'site'=>'abcfornecedor.com',
     'uf'=>'SP',
     'email'=>'abc@teste.com']);
    */
    protected $fillable = ['nome', 'site', 'uf', 'email'];
}
