<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Validator;

class StoreAttendanceRequest extends FormRequest
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
            "people_id"=> "required|numeric",
            "date_id"=> "required|numeric"
        ];
    }

//    /**
//     * Handle a failed validation attempt.
//     *
//     * @param \Illuminate\Contracts\Validation\Validator $validator
//     * @return void
//     *
//     * @throws \Illuminate\Validation\ValidationException
//     */
//    protected function failedValidation(Validator $validator)
//    {
//        $errors = (new ValidationException($validator))->errors();
//
//        throw new HttpResponseException(
//            response()->json(
//                ['success' => 'false',
//                    'errors'  => $errors
//                ],
//                JsonResponse::HTTP_UNPROCESSABLE_ENTITY)
//        );
//    }
}
