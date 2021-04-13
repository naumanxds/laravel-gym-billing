<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Load Dashboard after login
     */
    public function load()
    {
        return view('dashboard');
    }
}
