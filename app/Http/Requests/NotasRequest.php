<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NotasRequest extends FormRequest
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
            'estudiante' => 'required|alpha_spaces',
            'nota1' => 'required|numeric|min:1.0|max:5.0',
            'nota2' => 'required|numeric|min:1.0|max:5.0',
            'nota3' => 'required|numeric|min:1.0|max:5.0',
        ];
    }
}
