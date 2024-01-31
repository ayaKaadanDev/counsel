<?php

namespace App\Http\Controllers;

use App\Models\Counsel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use PHPUnit\Framework\Constraint\Count;

class CounselController extends Controller
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
            $counsel = Counsel::all();
            return view('counsel.index',compact('counsel'));
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
            return view('counsel.create');
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
                'scope' => 'required',
            ]);
            if($validator->fails())
            {
                return "you should enter your info";
            }
            $counsel = new Counsel();
            $counsel->scope = $request->scope;
            $counsel->save();
            return redirect()->route('counsels.index');
        }
        else
        {
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Counsel  $counsel
     * @return \Illuminate\Http\Response
     */
    public function show(Counsel $counsel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Counsel  $counsel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Auth::id())
        {
            $counsel = Counsel::findorFail($id);
            return view('counsel.update',compact('counsel'));
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
     * @param  \App\Models\Counsel  $counsel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(Auth::id())
        {
            $validator = Validator::make($request->all(),
            [
                'scope' => 'required',
            ]);
            if($validator->fails())
            {
                return "you should enter your info";
            }
            $counsel = Counsel::findorFail($id);
            $counsel->scope = $request->scope;
            $counsel->save();
            return redirect()->route('counsels.index');
        }
        else
        {
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Counsel  $counsel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Auth::id())
        {
            $counsel = Counsel::findorFail($id)->delete();
            return redirect()->route('counsels.index');
        }
        else
        {
            return redirect()->back();
        }
    }
}
