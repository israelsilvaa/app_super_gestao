<?php

use App\Loja;
use Illuminate\Database\Seeder;

class LojasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $loja =new Loja();
        $loja->nome = 'loja 1';
        $loja->uf = 'PA';
        $loja->email = 'loja1@gmail.com';
        $loja->save();
    }
}
