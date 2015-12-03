<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bron extends Model
{
    protected $table = 'bron';
    protected $fillable = ['name','title',
        'phone',
        'mail',
        'bron_comment',
        'nomer',
        'start',
        'end',
        'predpl',
        'kol'];
}
