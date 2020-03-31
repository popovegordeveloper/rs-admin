<?php


namespace Rs\RsAdmin\Requests;


use Illuminate\Foundation\Http\FormRequest;

class LoginFormRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return (request()->getMethod() == 'GET') ? [] : [
            'email' => 'required|email|exists:admins,email',
            'password' => 'required|password'
        ];
    }
}
