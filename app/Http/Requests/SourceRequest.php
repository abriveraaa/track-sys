<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SourceRequest extends FormRequest
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
            'description' => [
                'required', 
                'unique:source,description,'.$this->id,
            ],
        ];
    }

    public function messages()
    {
        return [
            'description.required' => 'Source description is required.<br>',
            'description.unique' => 'Source description has already been taken.<br>',
        ];
    }
}
