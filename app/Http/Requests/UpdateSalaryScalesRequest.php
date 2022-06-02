<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSalaryScalesRequest extends FormRequest
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
            'series' => 'required',
            'group' => 'required',
            'scale1' => 'numeric',
            'scale2' => 'numeric',
            'scale3' => 'numeric',
            'scale4' => 'numeric',
            'scale5' => 'numeric',
            'scale6' => 'numeric',
            'scale7' => 'numeric',
            'scale8' => 'numeric',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     * 
     * 
     * @return array
     */
    public function messages()
    {
        return [
            'series.required' => 'The salary group is required',
            'group.required' => 'The salary code is required',
        ];
    }
}
