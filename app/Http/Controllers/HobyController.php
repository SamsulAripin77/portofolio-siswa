<?php

namespace App\Http\Controllers;

use App\Models\Hoby;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HobyController extends Controller
{
    public function index()
    {
        
        $hobies = User::find(Auth::id())->hobies;
        if(Auth::user()->isAdmin()){
            $hobies = Hoby::all();
        }
        
        return view('admin.index-hoby',compact('hobies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::find(Auth::id());
        $user->hobies()->save(new Hoby($request->all()));
        return back()->with('message','Data Berhasil Disimpan');
    }

   
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $hoby = Hoby::find($id);
        $hoby->update($request->all());
        
        return back()->with('messag','Data Berhasil Disimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hoby = Hoby::find($id);
        $hoby->delete();
        return back()->with('message','Data Berhasil Dihapus');
    }
}
