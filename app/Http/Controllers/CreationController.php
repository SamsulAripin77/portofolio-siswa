<?php

namespace App\Http\Controllers;

use App\Http\Traits\UploadCoverTrait;
use App\Models\Creaation;
use App\Models\Creation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CreationController extends Controller
{
    use UploadCoverTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $creations = User::find(Auth::id())->creations;
        if (Auth::user()->isAdmin()) {
            $creations = Creation::latest()->get();
        }


        return view('admin.index-creation', compact('creations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $creations = new Creation();
        $this->saveData($creations, $request);

        return back()->with('message', 'Data Berhasil Disimpan');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\creation  $creation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $creation = Creation::find($id);
        $this->saveData($creation, $request);
        return back()->with('message', 'Data Berhasil Disimpan');
    }

    public function validation(Creation $creation, $validation){
        $val = $validation == '1' ? false : true;
        $creation['validation'] = $val;
        $creation->save();
        return back()->with('message','Data Berhasil Disimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\creation  $creation
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $creation= Creation::find($id);
        $creation->delete();

        return back()->with('message', 'Data Berhasil Dihapus');
    }

    public function saveData($creation, $request)
    {

        $image = $this->uploadCover($request);
        $creation->title = $request->get('title');
        $creation->description = $request->get('description');
        $creation->image = $image;
        $creation->user_id = Auth::id();
        $creation->save();
    }
}
