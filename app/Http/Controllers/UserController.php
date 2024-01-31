<?php

namespace App\Http\Controllers;

use App\Models\Counsel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function expert()
    {
        if(Auth::id())
        {
            $user = User::where('status' , '1')->get();
            $counsel = Counsel::all();
            return view('search.search',compact('user','counsel'));
        }
        else
        {
            return redirect()->back();
        }
    }
}
