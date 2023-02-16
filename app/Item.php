<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{

    protected $table = 'produtos';
    protected $fillable = ['nome', 'descricao', 'peso', 'unidade_id'];

    public function itemDetalhe(){

        return $this->hasOne('App\ItemDetalhe', 'produto_id', 'id');

        // Produto tem um detalhe
        // 1 registro relacionado em produto_detalhes (fk) -> produto_id
        // produtos (pk) -> id
    }

    public function fornecedor(){
        return $this->belongsTo('App\Fornecedor');
    }
}
