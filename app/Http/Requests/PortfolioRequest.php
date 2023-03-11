<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PortfolioRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'service_id' => 'required|exists:services,id',
            'name' => 'required|string|min:3',
            'client' => 'required|string|min:3',
            'description' => 'required',
            'slider1' => 'image|mimes:png,jpg|max:2048',
            'slider2' => 'image|mimes:png,jpg|max:2048',
            'slider3' => 'image|mimes:png,jpg|max:2048'
        ];
    }
}
