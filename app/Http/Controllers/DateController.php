<?php

namespace App\Http\Controllers;

use App\Http\Requests\DateStoreRequest;
use App\Models\Date;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::id())
        {
            $me = Auth::user()->id;
            // $user = User::all();
            // foreach ($user as $u){
                $date = Date::where('user_id' , '=' , $me)->get();
            // }
            return view('date.index',compact('date'));
        }
        else
        {
            return redirect()->back();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::id())
        {
            $expert = User::where('status' , '1')->get();
            return view('date.create',compact('expert'));
        }
        else
        {
            return redirect()->back();
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DateStoreRequest $request)
    {
        if(Auth::id())
        {
            Date::create($request->validated());
            // $date = new Date();
            // $date->user_id = $request->user_id;
            // $date->date = $request->date;
            // $date->save();
            return redirect()->route('Dates.index');
         }
        else
        {
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Date  $date
     * @return \Illuminate\Http\Response
     */
    public function show(Date $date)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Date  $date
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Auth::id())
        {
            $date = Date::findorFail($id);
            $expert = User::where('status' , '1')->get();
            return view('date.update',compact('date','expert'));
        }
        else
        {
            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Date  $date
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(Auth::id())
        {
            $date = Date::findorFail($id);
            $date->user_id = $request->user_id;
            $date->date = $request->date;
            $date->save();
            return redirect()->route('Dates.index');
        }
        else
        {
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Date  $date
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Auth::id())
        {
            $date = Date::findorFail($id)->delete();
            // return redirect()->route('Dates.index');
            return view('date.changeStatusD',compact('reservation'));
        }
        else
        {
            return redirect()->back();
        }
    }

    public function changeStatusD(Request $request , $id)
    {
        if(Auth::id())
        {
            $date = Date::findorFail($id);
            $date->status = $request->status;
            $date->save();
            return redirect()->route('home');
            // return "done";
        }
        else
        {
            return redirect()->back();
        }
    }

    public function expertReservation()
    {
        if(Auth::id())
        {
            $me = Auth::user()->id;
            $date = Date::where('user_id' , '=' , $me)->where('status' , '=' ,'reserve')->get();
            return view('reservation.expertReservation',compact('date'));
        }
        else
        {
            return redirect()->back();
        }
    }
}
