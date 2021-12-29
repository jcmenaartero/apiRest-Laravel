<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBoardgameRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "name" => "required|unique:boardgames,name,".$this->route('boardgame')->id,
            "publisher" => "required",
            "language" => "required",
            "dificulty" => "required",
            "description" => "required",
            "min_players" => "required",
            "max_players" => "required",
            "play_time" => "required",
            "price" => "required"
        ];
    }
}
