<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CollegeRequest extends FormRequest
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
                'unique:colleges,description,'.$this->id,
            ],
            'code' => [
                'required',
                'max:10',
                'unique:colleges,code,'.$this->id,
            ],
        ];
    }

    public function messages()
    {
        return [
            'description.required' => 'College description is required.<br>',
            'description.unique' => 'College description has already been taken.<br>',
            'code.required' => 'College code is required.<br>',
            'code.max' => 'College code must not exceed to 10 characters.<br>',
            'code.unique' => 'College code has already been taken.',
        ];
    }
}
