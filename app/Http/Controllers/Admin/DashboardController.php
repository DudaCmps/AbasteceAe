<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DashboardController extends Controller
{

    public function tables()
    {
        $users = User::all();

//        dd($users);

        return view('dashboard.tables', compact('users'));
    }

    public function vehicles()
    {
        return view('dashboard.vehicles');
    }

}
