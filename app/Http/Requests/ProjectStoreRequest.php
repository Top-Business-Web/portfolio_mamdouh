<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectStoreRequest extends FormRequest
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
            "description.ar" => "required",
            "description.en" => "required",
        ];
    }

    public function messages()
    {
        return [
            "title.ar.required" => "العنوان بالعربي مطلوب",
            "title.en.required" => "العنوان بالانكليزي مطلوب",
            "classification.ar.required" => "التصنيف بالعربي مطلوب",
            "classification.en.required" => "التصنيف بالانكليزي مطلوب",
            "description.ar.required" => "الوصف بالعربي مطلوب",
            "description.en.required" => "الوصف بالانكليزي مطلوب",
        ];
    }
}
