<?php

namespace App\Http\Controllers;

use App\Models\Sertification;
use Illuminate\Http\Request;
use App\Http\Traits\UploadCoverTrait;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SertificationController extends Controller
{
    use UploadCoverTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sertifications = User::find(Auth::id())->sertifications;
        if (Auth::user()->isAdmin()) {
            $sertifications = Sertification::latest()->get();
        }


        return view('admin.index-sertification', compact('sertifications'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sertification = new Sertification();
        $this->saveData($sertification, $request);

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
        $sertification = Sertification::find($id);
        $this->saveData($sertification, $request);
        return back()->with('message', 'Data Berhasil Disimpan');
    }

    public function validation(Sertification $sertification, $validation){
        $val = $validation == '1' ? false : true;
        $sertification['validation'] = $val;
        $sertification->save();
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
        $sertification= Sertification::find($id);
        $sertification->delete();

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
