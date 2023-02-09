<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loja extends Model
{
    protected $table = 'lojas';
    protected $fillabe = ['nome', 'uf', 'email'];
}
