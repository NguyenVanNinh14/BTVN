<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Controllers\AuthController;

class RequestAuth extends FormRequest
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
            'email' => 'required|email|min:6|max:20',
            'password' =>'required|min:6|max:20'
        ];
    }

    public function messages()
    {
        return [
            'email.required'=>'Email không được để trống',
            'email.email'=>'Không đúng định dạng email',
            'email.min'=>'Tối thiểu 6 ký tự',
            'email.max'=>'Tối đa 20 ký tự',
            'password.required'=>'Mật khẩu không được để trống',
            'password.min'=>'Mật khẩu ít nhất 6 kí tự',
            'password.max'=>'Mật khẩu nhiều nhát 20 kí tự'
        ];
}
}
