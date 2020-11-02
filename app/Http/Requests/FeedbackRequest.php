<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeedbackRequest extends FormRequest
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
            'phone' => ['required', 'regex:/((\+\d{1,3}|8|7)[(-]?\d{3}[)-]?\d{3}-?\d{2}-?\d{2})/'],
            'email' => 'required|email',
            'messages' => 'require|min:15|max:500'
        ];
    }

    public function attributes()
    {
        return [
            'phone' => 'Телефон',
            'email' => 'Email',
            'messages' => 'Сообщения'
        ];
    }
}
