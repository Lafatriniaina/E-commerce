<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function index()
    {

    }

    public function store(Request $request): void
    {
        $user = Users::create($request->all());
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('home');
        } else {
            return back()->withErrors(['msg', 'Identifiants invalides. Veuillez réessayer.']);
        }
    }

}
