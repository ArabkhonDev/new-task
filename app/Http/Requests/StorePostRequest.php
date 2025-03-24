<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title'=> 'required',
            'body'=>'required',
            'user_id'=> 'required|integer',
            'photo'=>'required|mimes:jpg, png, jpeg|max:2048'
        ];
    }
}
