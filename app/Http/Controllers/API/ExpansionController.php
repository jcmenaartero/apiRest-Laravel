<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Boardgame;
use App\Models\Expansion;
use Illuminate\Http\Request;

class ExpansionController extends Controller
{
    public function index()
    {
        return Expansion::paginate(3);
    }

    public function show(Expansion $expansion)
    {
        
        $boardgame = Boardgame::find($expansion->boardgame_id);
        return response()->json([
            'res' => true,
            'expansions' => $expansion,
            'boardgame' => $boardgame
        ],200);
    }
}
