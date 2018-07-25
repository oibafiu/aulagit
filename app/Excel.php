<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Excel extends Model
{
    protected $fillable = ['mes', 'valor_entrada', 'valor_saida','cliente','total'];
}
