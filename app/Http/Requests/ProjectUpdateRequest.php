<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectUpdateRequest extends FormRequest
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
            "images" => "nullable",
            "title.ar" => "required",
            "title.en" => "required",
            "classification.ar" => "required",
            "classification.en" => "required",
        ];
    }

    public function messages()
    {
        return [
            "title.ar.required" => "العنوان مطلوب",
            "title.en.required" => "العنوان مطلوب",
            "classification.ar.required" => "التصنيف مطلوب",
            "classification.en.required" => "التصنيف مطلوب",
        ];
    }
}
