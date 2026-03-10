<?php

namespace App\Http\Controllers\Admin;

use App\Models\Endereco;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{

    public function vehicles()
    {
        return view('dashboard.vehicles');
    }

}
