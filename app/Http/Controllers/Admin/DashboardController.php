<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

/**
 * Class DashboardController
 * @package App\Http\Controllers\Admin
 */

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('admin/dashboard');
    }
}
