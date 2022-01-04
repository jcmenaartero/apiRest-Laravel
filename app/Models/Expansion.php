<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expansion extends Model
{
    use HasFactory;

    protected $fillable = [
        'boardgame_id',
        'name',
        'language',
        'description',
        'price'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function boargames()
    {
        return $this->belongsTo(Boardgame::class, 'id');
    }
}
