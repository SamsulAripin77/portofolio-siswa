<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WorkController extends Controller
{
    public function index()
    {
        
        $works = User::find(Auth::id())->works;
        if(Auth::user()->isAdmin()){
            $works = Work::all();
        }
        
        return view('admin.index-work',compact('works'));
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
        $user->works()->save(new Work($request->all()));
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
        $work = Work::find($id);
        $work->update($request->all());
        
        return back()->with('messag','Data Berhasil Disimpan');
    }

    public function validation(Work $work, $validation){
        $val = $validation == '1' ? false : true;
        $work['validation'] = $val;
        $work->save();
        return back()->with('message','Data Berhasil Disimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $work = Work::find($id);
        $work->delete();
        return back()->with('message','Data Berhasil Dihapus');
    }
}
