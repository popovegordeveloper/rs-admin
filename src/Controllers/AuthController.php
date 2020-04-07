<?php


namespace Rs\RsAdmin\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Страница авторизации
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function loginPage()
    {
        if (!Auth::guard('admin')->guest())
            return redirect()->route('admin.dashboard');

        return view('rs-admin::login.index');
    }

    /**
     * Авторизация
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        if (Auth::guard('admin')->attempt($request->only(['email', 'password']))) {
            $request->session()->regenerate();

            return response()->json([
                'status' => true,
                'redirect_url' => route('admin.dashboard')
            ]);
        }

        return response()->json([
            'status' => false,
            'message' => 'Ошибка авторизации'
        ]);
    }

    /**
     * Выход
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->regenerate();

        return response()->json([
            'status' => true,
            'redirect_url' => route('admin.login')
        ]);
    }
}
