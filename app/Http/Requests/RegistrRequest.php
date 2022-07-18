<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class RegistrRequest extends FormRequest
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
            'email' => 'required|email',
            'name' => 'required|min:2|max:25',
            'surname' => 'required|min:4|max:25',
            'password' => 'required|min:6|max:25',
            'gender' => 'required'
        ];
    }
    public function messages() {
        return [
            'email.required' => 'Поле email является обязательным',
            'email.email' => 'Поле email не является действительной',
            'name.required' => 'Поле имя является обязательным',
            'name.min' => 'Поле имя должно содержать более 2 символов',
            'name.max' => 'Поле имя должно содержать менее 25 символов',
            'surname.required' => 'Поле фамилия является обязательным',
            'surname.min' => 'Поле фамилия должно содержать более 4 символов',
            'surname.max' => 'Поле фамилия должно содержать менее 25 символов',
            'password.required' => 'Поле пароль является обязательным',
            'password.min' => 'Поле пароль должно содержать более 6 символов',
            'password.max' => 'Поле пароль должно содержать менее 25 символов',
            'gender.required' => 'Поле пол является обязательным'
        ];
    }
}
