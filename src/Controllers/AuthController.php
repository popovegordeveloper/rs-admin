<?php


namespace Rs\RsAdmin\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Rs\RsAdmin\Requests\LoginFormRequest;

class AuthController extends Controller
{
    public function login(LoginFormRequest $request)
    {
        if ($request->getMethod() == 'GET')
            return view('rs-admin::login.index');

        if (Auth::guard('admin')->attempt($request->only(['email', 'password']))) {

        }

    }
}
