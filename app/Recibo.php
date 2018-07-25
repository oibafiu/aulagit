<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recibo extends Model
{
    protected $fillable = ['empresa','data','valor','path'];
    
}
