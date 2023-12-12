<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class serviceStoreRequest extends FormRequest
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
            "icon" => "sometimes|image",
            "title.ar" => "required",
            "title.en" => "required",
            "description.ar" => "required",
            "description.en" => "required" 
        ];
    }

    public function messages()
    {
        return [
            "icon.sometimes" => "الايقونة مطلوبة",
            "icon.image" => "يجب ان تكون صورة",
            "title.ar.required" => "العنوان مطلوب",
            "title.en.required" => "العنوان مطلوب",
            "description.ar.required" => "الوصف مطلوب",
            "description.en.required" => "الوصف مطلوب",
        ];
    }
}
