<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\NewBoardgameRequest;
use App\Http\Requests\UpdateBoardgameRequest;
use App\Http\Resources\BoardgameResource;
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
        return BoardgameResource::collection(Boardgame::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(NewBoardgameRequest $request)
    {
        return (new BoardgameResource(Boardgame::create($request->all())))
                    ->additional(['msg' => 'Boardgame created']);
        /*Boardgame::create($request->all());
        return response()->json([
            'res' => true,
            'msg' => 'Boardgame created'
        ],200);*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Boardgame $boardgame)
    {
        return new BoardgameResource($boardgame);
        /*return response()->json([
            'res' => true,
            'boardgame' => $boardgame
        ],200);*/
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
        return (new BoardgameResource($boardgame))
                ->additional(['msg' => 'Boardgame updated'])
                ->response()
                ->setStatusCode(202);
        /*return response()->json([
            'res' => true,
            'msg' => 'Boardgame updated'
        ], 200);*/
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
        return (new BoardgameResource($boardgame))->additional(['msg' => 'Boardgame deleted']);
        /*return response()->json([
            'res' => true,
            'msg' => 'Boardgame Deleted'
        ], 200);*/
    }
}
