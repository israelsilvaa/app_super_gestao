<?php

use Illuminate\Database\Seeder;
use App\SiteContato;

class SiteContatosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        $contato = new SiteContato();
        $contato->nome = 'caio';
        $contato->telefone = '919888-7777';
        $contato->email = 'caio@teste.com';
        $contato->motivo_contatos_id = 1;
        $contato->mensagem = "teste de mensagem";
        $contato->save();
        */

        factory(SiteContato::class, 100)->create();
    }
}
