<?php

namespace App\Http\Requests\Quote;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateQuoteRequest extends FormRequest
{
    public function rules()
    {
        return [
            'text.en' => 'required',
            'text.ka' => 'required',
            'movie_id' => 'required|exists:movies,id',
            'thumbnail' => 'image',
        ];
    }
}
