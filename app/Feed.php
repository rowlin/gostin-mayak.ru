<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feed extends Model
{

    protected $table='feeds';
    protected $fillable=[
        'name',
        'user_id',
        'comment',
        'u_start',
        'u_end'
];
}
