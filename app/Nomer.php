<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nomer extends Model
{


    protected $fillable = [
        'name',
        'opis',
        'k_mest',
        'price'
    ];
}