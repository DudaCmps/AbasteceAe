<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function store(UserRequest $request)
    {

        $user = User::query()->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'registration' => $request->registration,
            'cpf' => $request->cpf,
            'date_of_birth' => $request->date_of_birth,
        ]);

        Auth::login($user);

        return redirect()->route('site.index');

    }
}
