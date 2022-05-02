<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreJobsRequest extends FormRequest
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
            'name' => 'required|unique:jobs',
            'description' => 'required',
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
            'name.required' => 'A job title is required',
            'description.required' => 'A description is required',
            'file' => 'file|mimes:jpg,jpeg,png,doc,docx,csv,xlsx,xls,txt,pdf'
        ];
    }
}
