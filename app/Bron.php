<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bron extends Model
{
    protected $table = 'bron';
    protected $fillable = ['name',
        'phone',
        'mail',
        'bron_comment',
        'nomer',
        'k_start',
        'k_end',
        'predpl',
        'kol'];
}
