<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;

class BoardgameResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'publisher' => Str::upper($this->publisher),
            'language' => Str::upper($this->language),
            'dificulty' => $this->dificulty,
            'description' => $this->description,
            'min_players' => $this->min_players,
            'max_players' => $this->max_players,
            'play_time' => $this->play_time,
            'price' => $this->price
        ];
    }

    public function with($request)
    {
        return [
            'res' => true
        ];
    }
}
