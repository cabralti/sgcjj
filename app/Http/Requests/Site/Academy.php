<?php

namespace App\Http\Requests\Site;

use Illuminate\Foundation\Http\FormRequest;

class Academy extends FormRequest
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
            // Academy
            'social_name' => 'required|max:191',
            'name' => 'required|min:3|max:191',
            'document' => 'max:14|unique:academies',
            'email' => 'required|email|unique:academies',

            // Address
            'zipcode' => 'max:9',
            'street' => 'required',
            'neighborhood' => 'required',
            'city' => 'required',
            'state' => 'required',

            // Teacher
            'teacher_name' => 'required|min:3|max:191',
            'teacher_band' => 'required|in:PRETA,PRETA 1º GRAU,PRETA 2º GRAU,PRETA 3º GRAU,PRETA 4º GRAU,PRETA 5º GRAU,PRETA 6º GRAU,CORAL 1º GRAU,CORAL 2º GRAU,CORAL 3º GRAU,CORAL 4º GRAU,CORAL 5º GRAU,CORAL 6º GRAU',
            'teacher_document' => 'required|min:11|max:14',
            'teacher_document_secondary' => 'required|min:7|max:12',
            'teacher_cell' => 'required',
            'teacher_email' => 'required|email'
        ];
    }
}
