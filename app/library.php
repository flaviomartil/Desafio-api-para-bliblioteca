<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class library extends Model
{
    protected $fillable = [
        'titulo', 'editora', 'foto','autores'
    ];
}
