<?php

namespace App\Http\Controllers;

use App\Http\Traits\UploadCoverTrait;
use App\Mail\NotifMail;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class SkillController extends Controller
{
    use UploadCoverTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $skills = User::find(Auth::id())->skills;
        if(Auth::user()->isAdmin()){
            $skills = Skill::all();
        }
        
        return view('admin.index-skill',compact('skills'));
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
        $image = $this->uploadCover($request);
        // return $image;
        $data = $request->all();
        $data['image'] = $image;
        $user->skills()->save(new Skill($data));
        Mail::to('admin@admin.com')->send(new NotifMail('skills',$user->name));
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
        $request->validate([
            'skill' => 'required',
            'image' => 'mimes:jpg,bmp,png,pdf'
        ]);
        $skill = Skill::find($id);
        $data = $request->all();
        $image = $this->uploadCover($request);
        $data['image'] = $image;
        $skill->update($data);
        
        return back()->with('messag','Data Berhasil Disimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Skill $skill)
    {
        $skill->delete();

        return back()->with('message','Data Berhasil Dihapus');
    }

    public function validation($id, $validation){
        $val = $validation == '1' ? false : true;
        $skill = Skill::find($id);
        $skill['validation'] = $val;
        $skill->save();
        return back()->with('message','Data Berhasil Disimpan');
    }
}
