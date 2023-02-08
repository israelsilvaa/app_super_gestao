<?php

use Illuminate\Database\Seeder;
use App\Fornecedor;
use Illuminate\Support\Facades\DB;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // instanciando o objeto
        $fonecedor = new Fornecedor();
        $fonecedor->nome = "teste";
        $fonecedor->site = "teste.com";
        $fonecedor->uf = 'PA';
        $fonecedor->email = 'teste@gmail.com';
        $fonecedor->save();

        // atravez do metodo CREATE(atenção para o atributo fillable)
        Fornecedor::create([
            'nome'=>'forn100',
            'site'=>'100.com.br',
            'uf'=>'CE',
            'email'=>'100@gmail.com'
        ]);

        // metodo insert
        DB::table('fornecedores')->insert([
            'nome'=>'forn200',
            'site'=>'200.com.br',
            'uf'=>'SP',
            'email'=>'200@gmail.com'    
        ]);
    }
}
