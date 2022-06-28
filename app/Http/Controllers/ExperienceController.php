<?php

namespace App\Http\Controllers;

use App\Http\Traits\UploadCoverTrait;
use App\Models\Experience;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExperienceController extends Controller
{
    use UploadCoverTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $experiences = User::find(Auth::id())->experiences;
        if(Auth::user()->isAdmin()){
            $experiences = Experience::all();
        }
        
        return view('admin.index-experience',compact('experiences'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $experience = new Experience();
        $this->saveData($experience, $request);

        return back()->with('message','Data Berhasil Disimpan');
    }

  

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Experience $experience)
    {
        $this->saveData($experience, $request);

        return back()->with('message','Data Berhasil Disimpan');
    }

    public function validation(Experience $experience, $validation){
        $val = $validation == '1' ? false : true;
        $experience['validation'] = $val;
        $experience->save();
        return back()->with('message','Data Berhasil Disimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function destroy(Experience $experience)
    {
        $experience->delete();

        return back()->with('message','Data Berhasil Dihapus');
    }
    
    protected function saveData($experience, $request){
        $image = $this->uploadCover($request);

        $experience->event = $request->get('event');
        $experience->position = $request->get('position');
        $experience->description = $request->get('description');
        $experience->tgl = $request->get('tgl');
        $experience->user_id = Auth::id();
        $experience->image = $image;

        $experience->save();

    }
}
