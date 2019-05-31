<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SinginRequest extends FormRequest
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
            'Email'=>'required|email|unique:user,email',
            'Password'=>'required|min:6|max:20',
            'UserName'=>'required',
            're_password'=>'required|same:Password'
        ];
    }

    public function messages()
    {
        return [
            'Email.required'=>'Please enter email',
            'Email.unique'=>'Email đã có người sử dụng',
            'Email.email'=>'Không đúng định dạng email',    
            'Password.required'=>'Please enter PassWord',
            're_password.same'=>'PassWord không giống nhau',
            'Password.min'=>'PassWord ít nhất 6 kí tự'
      ];
    }
}
