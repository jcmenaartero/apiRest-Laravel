<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boardgame extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'publisher',
        'language',
        'dificulty',
        'description',
        'min_players',
        'max_players',
        'play_time',
        'price'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
