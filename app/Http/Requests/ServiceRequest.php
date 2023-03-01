<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|unique:services,name',
            'icon' => 'required|image|mimes:png,jpg,svg|max:2048',
            'description' => 'required|max:250'
        ];
    }
}
