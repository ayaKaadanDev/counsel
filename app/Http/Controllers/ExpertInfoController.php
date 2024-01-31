<?php

namespace App\Http\Controllers;

use App\Models\Counsel;
use App\Models\ExpertInfo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class ExpertInfoController extends Controller
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
                $expertInfo = ExpertInfo::where('user_id' , '=' , $me)->get();
            // }
            // $expertInfo = ExpertInfo::all();
            return view('expertInfo.index',compact('expertInfo'));
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
            $counsel = Counsel::all();
            return view('expertInfo.create',compact('expert','counsel'));
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
                'expertness' => 'required',
                'phone_num' => 'required',
                'address' => 'required',
                'counsel_id' => 'required',
            ]);
            if($validator->fails())
            {
                return "you should enter your info";
            }
            $expertInfo = new ExpertInfo();
            $expertInfo->user_id = $request->user_id;
            $expertInfo->expertness = $request->expertness;
            $expertInfo->phone_num = $request->phone_num;
            $expertInfo->address = $request->address;
            $expertInfo->counsel_id = $request->counsel_id;
            $expertInfo->save();
            return redirect()->route('expert_infos.index');
        }
        else
        {
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ExpertInfo  $expertInfo
     * @return \Illuminate\Http\Response
     */
    public function show(ExpertInfo $expertInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ExpertInfo  $expertInfo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Auth::id())
        {
            $expertInfo = ExpertInfo::findorFail($id);
            $expert = User::where('status' , '1')->get();
            $counsel = Counsel::all();
            return view('expertInfo.update',compact('expertInfo','expert','counsel'));
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
     * @param  \App\Models\ExpertInfo  $expertInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(Auth::id())
        {
            $validator = Validator::make($request->all(),
            [
                'user_id' => 'required',
                'expertness' => 'required',
                'phone_num' => 'required',
                'address' => 'required',
                'counsel_id' => 'required',
            ]);
            if($validator->fails())
            {
                return "you should enter your info";
            }
            $expertInfo = ExpertInfo::findorFail($id);
            $expertInfo->user_id = $request->user_id;
            $expertInfo->expertness = $request->expertness;
            $expertInfo->phone_num = $request->phone_num;
            $expertInfo->address = $request->address;
            $expertInfo->counsel_id = $request->counsel_id;
            $expertInfo->save();
            return redirect()->route('expert_infos.index');
        }
        else
        {
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ExpertInfo  $expertInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Auth::id())
        {
            $expertInfo = ExpertInfo::findorFail($id)->delete();
            return redirect()->route('expert_infos.index');
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
            $expertInfo = ExpertInfo::all();
            return view('expertInfo.justShow',compact('expertInfo'));
        }
        else
        {
            return redirect()->back();
        }
    }

    public function findExp(Request $request)
    {
        if(Auth::id())
        {
            $req = $request->search_exp;
            $expertInfo = ExpertInfo::where('user_id' , '=' , $req)->get();
            return view('expertInfo.justShow',compact('expertInfo'));
        }
        else
        {
            return redirect()->back();
        }
    }

    public function findcon(Request $request)
    {
        if(Auth::id())
        {
            $req = $request->search_exp;
            $expertInfo = ExpertInfo::where('counsel_id' , '=' , $req)->get();
            return view('expertInfo.justShow',compact('expertInfo'));
        }
        else
        {
            return redirect()->back();
        }
    }

    public function showExpInfo($id)
    {
        if(Auth::id())
        {
            $expertInfo = ExpertInfo::findorFail($id);
            return view('expertInfo.showExpInfo',compact('expertInfo'));
        }
        else
        {
            return redirect()->back();
        }
    }

}
