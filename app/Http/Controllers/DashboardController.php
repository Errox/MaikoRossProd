<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if(Auth::user()->hasRole('superadmin')){
            return view('Dashboard/Superadmin/dashboard');
        }else if (Auth::user()->hasRole('admin')){
            return view('Dashboard/Admin/dashboard');
        }else if (Auth::user()->hasRole('user')){
            return view('Dashboard/User/dashboard');
        }else{
            return "you're not even supposed to be here. ksstt";
        }
    }

    public function profile()
    {
        return view('Dashboard/Profile/profile');
    }

    public function adminPanel()
    {
        return view('Dashboard/AdminPanel/adminPanel');
    }
}
