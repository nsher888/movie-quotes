<?php

namespace App\Http\Requests\Movie;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMovieRequest extends FormRequest
{
    public function rules()
    {
        return [
            'title.en' => 'required|string',
            'title.ka' => 'required|string',
        ];
    }
}
