<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DashboardController extends Controller
{

    public function tables()
    {
        return view('dashboard.tables');
    }

    public function vehicles()
    {
        return view('dashboard.vehicles');
    }

}
