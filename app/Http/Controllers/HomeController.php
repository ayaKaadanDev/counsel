<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function redirect()
    {
        if(Auth::id())
        {
            if(Auth::user()->status==0)
            {
                return view('dashboard.adminDashboard');
            }
            elseif(Auth::user()->status==1)
            {
                return view('dashboard.expertDashboard');
            }
            else
            {
                return view('dashboard.userDashboard');
            }
        }
        else
        {
            return redirect()->back();
        }
    }
}
