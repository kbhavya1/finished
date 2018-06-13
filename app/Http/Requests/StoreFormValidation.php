<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFormValidation extends FormRequest
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
          'username'=>'required:max:20',
          'password'=>'required"max:35',
        ];
    }

    public function message()
    {
      return [
        'username.required'=>'username not entered',
        'password.required'=>'password not entered',
      ];
    }
}
