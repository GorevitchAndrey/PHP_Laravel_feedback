<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
                'login' => 'required|max:10',
                'password' => 'required',
        ];
    }

    public function attributes()
    {
        return [
          'login' => 'Логин',
          'password' => 'Пароль',
        ];
    }

//    public function messages()
//    {
//        return [
//            'login.required' => 'Необходимо ввести логин',
//            'login.max' => 'Логин не может быть длиннее 10 символов',
//            'password.required' => 'Необходимо ввести пароль',
//        ];
//    }
}
