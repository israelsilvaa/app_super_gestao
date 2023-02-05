<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    // esse nome sobrepõem o nome automático que o ORM Eloquent usa p/ persitir no banco.
    protected $table = "fornecedores";
}
