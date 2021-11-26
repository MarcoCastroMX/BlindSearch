<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RedCreateRequest extends FormRequest
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
            "SSID" => "required|string",
            "Contraseña" => "required|string|min:4|alpha_num",
        ];
    }

    public function attributes()
    {
        return[
            "Contraseña" => 'Password',
        ];

    }
}
