<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class adminRequest extends FormRequest
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
            'username'=>'required|min:1|max:6',
            'password'=>'required|min:1|max:6'
        ];
    }

    public function messages()
    {
        return [
          'username.required'=>'Vui lòng nhập tài khoản',
          'username.min'=>'Tài khoản ít nhất 1 kí tự',
          'username.max'=>'Tài khoản không quá 6 kí tự',
          'password.required'=>'Vui lòng nhập mật khẩu',
          'password.min'=>'Mật khẩu ít nhất 1 kí tự',
          'password.max'=>'Mật khẩu không quá 6 kí tự'
      ];
    }
}
