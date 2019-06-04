<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class Academy extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    public function all($keys = null)
    {
        return $this->validateFields(parent::all());
    }

    public function validateFields(array $inputs)
    {
        $inputs['document'] = str_replace(['.', '-'], '', $this->request->all()['document']);
        return $inputs;
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
            'document' => (!empty($this->request->all()['id']) ? 'max:18|unique:academies,document,' . $this->request->all()['id'] : 'max:18|unique:academies,document'),
            'email' => (!empty($this->request->all()['id']) ? 'required|email|unique:academies,email,' . $this->request->all()['id'] : 'required|email|unique:academies,email'),

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