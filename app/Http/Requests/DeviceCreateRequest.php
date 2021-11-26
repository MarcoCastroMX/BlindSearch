<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DeviceCreateRequest extends FormRequest
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
            "Nombre" => "required|string",
            "Ubicacion" => "required|string",
            "Bateria" => "required|integer|between:1,100",
        ];
    }

    public function attributes()
    {
        return[
            "Nombre" => "Name",
            "Ubicacion" => "Location",
            "Bateria" => "Battery",
        ];
    }
}
