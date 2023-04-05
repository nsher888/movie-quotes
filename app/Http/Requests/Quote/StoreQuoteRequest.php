<?php

namespace App\Http\Requests\Quote;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreQuoteRequest extends FormRequest
{
    public function rules()
    {
        return [
            'text' => 'required',
            'movie_id' => 'required|exists:movies,id',
            'thumbnail' => 'required|image',
        ];
    }
}
