<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;

class StorePeopleRequest extends FormRequest
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
            //
            "first_name"=> "required",
            "middle_name"=> "required",
            "last_name"=> "required",
            "gender"=> "required",
            "date_of_birth"=> "required|unique:people",
            "phone_number"=> "required|unique:people",
            "email"=> "required|unique:people",
            "residence"=> "required",
            "zone"=> "required"
        ];
    }
}
