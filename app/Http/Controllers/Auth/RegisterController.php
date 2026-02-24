<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;

class RegisterController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function store(UserRequest $request)
    {

    }

}
