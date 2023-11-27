<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateInformationRequest extends FormRequest
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
            "image_owner" => "sometimes|image",
            "name_owner.ar" => "required|string",
            "name_owner.en" => "required|string",
            "description_owner.ar" => "required",
            "description_owner.en" => "required",
            "customers" => "required|integer",
            "years_experience" => "required|integer",
            "best_customers" => "required|integer",
            "project_successfully" => "required|integer",
            "image_description" => "sometimes|image",
            "description_about.ar" => "required",
            "description_about.en" => "required",
        ];
    }

    public function messages()
    {
        return [
            "image_owner.sometimes" => "الصورة مطلوبة",
            "image_owner.image" => "يجب ان تكون صورة",
            "name_owner_ar.required" => "الاسم بالعربي مطلوب",
            "name_owner_ar.string" => "مسموح فقط بإدخال محارف",
            "name_owner_en.required" => "الاسم بالإنجليزي مطلوب",
            "name_owner_en.string" => "مسموح فقط بإدخال محارف",
            "description_owner_ar.required" => "الوصف بالعربي مطلوب",
            "description_owner_en.required" => "الوصف بالانكليزي مطلوب",
            "customers.required" => "حقل الزبائن مطلوب",
            "customers.integer" => "مسموح فقط بإدخال أرقام",
            "years_experience.required" => "حقل سنين الخبرة مطلوب",
            "years_experience.integer" => "مسموح فقط بإدخال أرقام",
            "best_customers.required" => "حقل أفضل الزبائن مطلوب",
            "best_customers.integer" => "مسموح فقط بإدخال أرقام",
            "project_successfully.required" => "حقل المشاريع الناجحة مطلوب",
            "project_successfully.integer" => "مسموح فقط بإدخال أرقام",
            "image_description.sometimes" => "الصورة مطلوبة",
            "image_description.image" => "يجب ان تكون صورة",
            "description_about_ar.required" => "وصف بالعربي ماذا عنا مطلوب",
            "description_about_en.required" => "وصف بالإنجليزي ماذا عنا مطلوب",
        ];
    }
}