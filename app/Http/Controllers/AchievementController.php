<?php

namespace App\Http\Controllers;

use App\Http\Traits\UploadCoverTrait;
use App\Models\Achievement;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AchievementController extends Controller
{
    use UploadCoverTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $achivements = User::find(Auth::id())->achivements;
        if (Auth::user()->isAdmin()) {
            $achivements = Achievement::latest()->get();
        }


        return view('admin.index-achivement', compact('achivements'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|mimes:jpg,bmp,png,pdf'
        ]);
        $achivements = new Achievement();
        $this->saveData($achivements, $request);

        return back()->with('message', 'Data Berhasil Disimpan');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Achievement  $achievement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|mimes:jpg,bmp,png,pdf'
        ]);
        $achievement= Achievement::find($id);
        $this->saveData($achievement, $request);
        return back()->with('message', 'Data Berhasil Disimpan');
    }

    public function validation(Achievement $achievement, $validation){
        $val = $validation == '1' ? false : true;
        $achievement['validation'] = $val;
        $achievement->save();
        return back()->with('message','Data Berhasil Disimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Achievement  $achievement
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $achievement= Achievement::find($id);
        $achievement->delete();

        return back()->with('message', 'Data Berhasil Dihapus');
    }

    public function saveData($achievement, $request)
    {

        $image = $this->uploadCover($request);
        $achievement->title = $request->get('title');
        $achievement->description = $request->get('description');
        $achievement->image = $image;
        $achievement->user_id = Auth::id();
        $achievement->save();
    }
}
