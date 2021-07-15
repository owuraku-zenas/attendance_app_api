<?php

namespace App\Http\Requests;

use App\Http\Controllers\BaseController;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

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
        $this->redirect = url()->previous();

        return [
            //
            "first_name"=> "required",
            "middle_name"=> "required",
            "last_name"=> "required",
            "gender"=> "required",
            "date_of_birth"=> "required",
            "phone_number"=> "required|unique:people",
            "email"=> "required|unique:people",
            "residence"=> "required",
            "zone"=> "required"
        ];
    }

    protected function failedValidation(Validator $validator) {
        throw new HttpResponseException(response()->json(['success' => false, 'message' => $validator->errors()], 422));
    }
}
