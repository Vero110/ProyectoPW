<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\validadorLogin;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function register(validadorLogin $request) {

        $user = new User();

        $user->nombre = $request->nombre;
        $user->correo = $request->correo;
        $user->password = Hash::make($request->password);

        $user -> save();

        Auth::login($user);

        return redirect(route('apodoWelcomeG'));
    }

    public function logout(validadorLogin $request) {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('apodoLogin'));
    }

    public function login(validadorLogin $request) {
        
        $credentials = [
            'correo' => $request->correo,
            'password' => $request->password
        ];

        $remember = ($request->has('remember') ? true : false);

        if(Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();
            return redirect(route('apodoWelcomeG'));
        }else {
            return redirect ('/');
        }
    }

}
