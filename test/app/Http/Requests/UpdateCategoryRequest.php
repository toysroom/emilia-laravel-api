<?php

namespace App\Http\Requests;

class UpdateCategoryRequest extends CategoryRequest
{
    public function messages(): array
    {
        return [
            'name.required' => 'Campo nome obbligatorio per la risorsa esistente',
            'name.min' => 'Campo nome ha meno di :min caratteri',
            'name.unique' => 'Campo nome già in uso',
        ];
    }
}
