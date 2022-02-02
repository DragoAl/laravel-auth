<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'team_name',
        'president',
        'sport',
        'foundation',
        'numbers_of_player',
        'location'
    ];
}
