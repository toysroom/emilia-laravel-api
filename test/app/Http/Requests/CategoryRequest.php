<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:3|unique:categories'
        ];
    }


    public function messages(): array
    {
        return [
            'name.required' => 'Campo nome obbligatorio',
            'name.min' => 'Campo nome ha meno di :min caratteri',
            'name.unique' => 'Campo nome già in uso',
        ];
    }

}