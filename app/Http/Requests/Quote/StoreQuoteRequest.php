<?php

namespace App\Http\Requests\Quote;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreQuoteRequest extends FormRequest
{
    public function rules()
    {
        return [
            'text.en' => 'required|string',
            'text.ka' => 'required|string',
            'movie_id' => 'required|exists:movies,id',
            'thumbnail' => 'required|image',
        ];
    }
}
