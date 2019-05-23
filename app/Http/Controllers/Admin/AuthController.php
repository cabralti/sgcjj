<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        if (Auth::check() === true) {
            return redirect()->route('admin.home');
        }

        return view('admin.index');
    }

    public function home()
    {
        $user = User::where('id', Auth::user()->id)->first();
        return view('admin.dashboard', [
            'user' => $user
        ]);
    }

    /**
     * Login com ajax
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        // verificando campos vazios
        if (in_array('', $request->only('email', 'password'))) {
            //            $json['message'] = $this->message->erro("OPS, informe todos os dados para efetuar login.")->render();
            $json['message'] = "OPS, informe todos os dados para efetuar login.";
            $json['type'] = "error";
            return response()->json($json);
        }

        // validando e-mail
        if (!filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
            $json['message'] = "OPS, informe um e-mail válido.";
            $json['type'] = "error";
            return response()->json($json);
        }

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        // verificando credenciais da request
        if (!Auth::attempt($credentials)) {
            $json['message'] = "OPS, e-mail e senha não conferem.";
            $json['type'] = "error";
            return response()->json($json);
        }

        $this->authenticated($request->getClientIp());

        $json['redirect'] = route('admin.home');
        return response()->json($json);
    }

    /**
     * Logout
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }

    /**
     * Atualizando último login e último ip
     *
     * @param string $ip
     */
    private function authenticated(string $ip)
    {
        $user = User::where('id', Auth::user()->id);
        $user->update([
            'last_login_at' => date('Y-m-d H:i:s'),
            'last_login_ip' => $ip
        ]);
    }
}
