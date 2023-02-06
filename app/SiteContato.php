<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteContato extends Model
{
    /* Habilita o preenchimento de atrtibutos atravez do metodo ::CREATE 
     Comando.
     \App\SiteContato::create([
     'nome'=>'joão', 
     'telefone'=>'2222-4444',
     'motivo_contato'=>'1',
     'email'=>'abc@teste.com',
     'mesnsagem'=>'abc@teste.com']);
    */

    /*
        para fazer buscas com where, Comando: 
        $contt = SiteContato::where('nome', 'israel')->get();
        $contt = SiteContato::where('nome_coluna', 'operadorLogico' , 'valor')->get();
    */ 
    protected $fillable = ['nome', 'telefone', 'email', 'motivo_contato', 'mensagem'];
}
