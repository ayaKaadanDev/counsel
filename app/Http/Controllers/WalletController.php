<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class WalletController extends Controller
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
                $wallet = Wallet::where('user_id' , '=' , $me)->get();
            // }
            return view('wallet.index',compact('wallet'));
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
            $user = User::where('status' , '!=' , '0')->get();
            return view('wallet.create',compact('user'));
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
            $validator = Validator::make($request->all(),
            [
                'user_id' => 'required',
                'money' => 'required',
            ]);
            if($validator->fails())
            {
                return "you should enter your info";
            }
            $wallet = new Wallet();
            $wallet->user_id = $request->user_id;
            $wallet->save();
            return redirect()->route('wallets.index');
        }
        else
        {
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wallet  $wallet
     * @return \Illuminate\Http\Response
     */
    public function show(Wallet $wallet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wallet  $wallet
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Auth::id())
        {
            $wallet = Wallet::findorFail($id);
            $user = User::where('status' , '!=' , '0')->get();
            return view('wallet.update',compact('wallet','user'));
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
     * @param  \App\Models\Wallet  $wallet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(Auth::id())
        {
            $validator = Validator::make($request->all(),
            [
                'user_id' => 'required',
                'money' => 'required',
            ]);
            if($validator->fails())
            {
                return "you should enter your info";
            }
            $wallet = Wallet::findorFail($id);
            $wallet->user_id = $request->user_id;
            $wallet->money = $request->money;
            $wallet->save();
            // return redirect()->route('wallets.show');
            return redirect()->route('wallets.index');
        }
        else
        {
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wallet  $wallet
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Auth::id())
        {
            $wallet = Wallet::findorFail($id)->delete();
            return redirect()->route('wallets.index');
        }
        else
        {
            return redirect()->back();
        }
    }

    public function showAll()
    {
        if(Auth::id())
        {
            $wallet = Wallet::all();
            return view('wallet.show',compact('wallet'));
        }
        else
        {
            return redirect()->back();
        }
    }

    public function transferView()
    {
        if(Auth::id())
        {
            // $wallet = Wallet::where('');
            $expert = User::where('status' , '=' , '1')->get();
            // $user = User::all();
            // foreach ($user as $u){
            //     $wallet = Wallet::where('user_id' , '=' , $u->id)->get();
            // }
            return view('wallet.transfer',compact('expert'));
        }
        else
        {
            return redirect()->back();
        }
    }

    public function transfer(Request $request)
    {
        if(Auth::id())
        {
            // $user = User::all();
            $me = Auth::user()->id;
            // foreach ($user as $u){
                $userwallet = Wallet::where('user_id' , '=' , $me)->get();
            // }
            $expertwallet = Wallet::where('user_id' , '=' , $request->user_id)->get();


            foreach($userwallet as $uw)
            {
                $umoney = $uw->money  ;
            }
            foreach($expertwallet as $ew)
            {
                $emoney = $ew->money  ;
            }


            if($umoney >= $request->money)
            {
                foreach($userwallet as $uw)
            {
                $uw->money  = $umoney - $request->money ;
                $uw->save();
            }
            foreach($expertwallet as $ew)
            {
                $ew->money = $emoney + $request->money ;
                $ew->save();
            }
                return redirect()->route('reservations.create');
            }
            else
            {
                return "sorry your balance is not right";
            }
        }
        else
        {
            return redirect()->back();
        }
    }
}
