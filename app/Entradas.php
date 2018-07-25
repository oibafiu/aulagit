<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entradas extends Model
{
    protected $fillable = ['mes', 'valor_entrada', 'valor_saida','cliente','total'];
}
