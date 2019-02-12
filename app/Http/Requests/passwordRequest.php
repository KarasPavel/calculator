<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class passwordRequest extends FormRequest
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
            'current_password' => 'required',
            'password' => 'required|min:6|max:20',
            'password_confirmation' => 'same:password',
        ];
    }

    public function messages()
    {
        return [
            'current_password.required' => 'Пожалуйста, введите текущий пароль',
            'password.required' => 'Введите новый пароль',
            'password.max' => 'Слишком длинный пароль, максимум 20 символов',
            'password.min' => 'Новый пароль должен быть длинее 6 символов',
            'password_confirmation.same' => 'Подтвержденный парольне не соответствует новому',
        ];
    }
}
