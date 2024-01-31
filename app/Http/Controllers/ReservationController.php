<?php

namespace App\Http\Controllers;

use App\Models\Date;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
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
            $reservation = Reservation::where('user_id' , '=' , $me)->get();
            return view('reservation.index',compact('reservation'));
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
            $user = User::where('status' , '2')->get();
            $date = Date::where('status' , 'open')->get();
            return view('reservation.create',compact('user','date'));
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
    public function store(Request $request)
    {
        if(Auth::id())
        {
            // $date = Date::where('status' , 'open')->get();
            $reservation = new Reservation();
            $reservation->user_id = $request->user_id;
            $reservation->date_id = $request->date_id;
            $reservation->save();
            // return redirect()->route('home');
            // return redirect()->route('changeStatusD');
            return view('date.changeStatusD',compact('reservation'));
        }
        else
        {
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Auth::id())
        {
            $reservation = Reservation::findorFail($id);
            $user = User::where('status' , '2')->get();
            $date = Date::where('status' , 'open')->get();
            return view('reservation.update',compact('user','date'));
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
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(Auth::id())
        {
            $reservation = Reservation::findorFail($id);
            $reservation->user_id = $request->user_id;
            $reservation->date_id = $request->date_id;
            $reservation->save();
            return "done";
        }
        else
        {
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Auth::id())
        {
            $reservation = Reservation::findorFail($id)->delete();
            return redirect()->back();
        }
        else
        {
            return redirect()->back();
        }
    }

    // public function expertReservation()
    // {
    //     $me = Auth::user()->id;
    //     $reservation = Reservation::where('user_id' , '=' , $me)->where('status' , '=' ,'reserve')->get();
    //     return view('reservation.expertReservation',compact('reservation'));
    // }
}
