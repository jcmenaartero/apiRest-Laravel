<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\NewBoardgameRequest;
use App\Http\Requests\UpdateBoardgameRequest;
use App\Models\Boardgame;


class BoardgameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Boardgame::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(NewBoardgameRequest $request)
    {
        Boardgame::create($request->all());
        return response()->json([
            'res' => true,
            'msg' => 'Boardgame created'
        ],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Boardgame $boardgame)
    {
        return response()->json([
            'res' => true,
            'boardgame' => $boardgame
        ],200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBoardgameRequest $request, Boardgame $boardgame)
    {
        $boardgame->update($request->validated());
        return response()->json([
            'res' => true,
            'msg' => 'Boardgame updated'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Boardgame $boardgame)
    {
        $boardgame->delete();
        return response()->json([
            'res' => true,
            'msg' => 'Boardgame Deleted'
        ], 200);
    }
}
