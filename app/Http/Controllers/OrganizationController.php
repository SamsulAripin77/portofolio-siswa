<?php

namespace App\Http\Controllers;

use App\Http\Traits\UploadCoverTrait;
use App\Mail\NotifMail;
use App\Models\Organization;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class OrganizationController extends Controller
{
    use UploadCoverTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $organizations = User::find(Auth::id())->organizations;
        if(Auth::user()->isAdmin()){
            $organizations = Organization::all();
        }
        
        return view('admin.index-organization',compact('organizations'));
    }


    /**
     * 
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'mimes:jpg,bmp,png,pdf'
        ]);
        $organization = new Organization();
        $this->saveData($organization, $request);
        $user = User::find(Auth::id());
        Mail::to($user->email)->send(new NotifMail('Sertification',$user->name));
        return back()->with('message','Data Berhasil Disimpan');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Organization $organization)
    {
        $this->saveData($organization, $request);

        return back()->with('message','Data Berhasil Disimpan');
    }

    public function validation(Organization $organization, $validation){
        $val = $validation == '1' ? false : true;
        $organization['validation'] = $val;
        $organization->save();
        return back()->with('message','Data Berhasil Disimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function destroy(Organization $organization)
    {
        $organization->delete();

        return back()->with('message','Data Berhasil Dihapus');
    }

    public function saveData ($organization, $request) {
        $image = $this->uploadCover($request);
        $organization->name = $request->get('name');
        $organization->position = $request->get('position');
        $organization->thn_mulai = $request->get('thn_mulai');
        $organization->thn_akhir = $request->get('thn_akhir');
        $organization->image = $image;
        $organization->user_id = Auth::id();
        $organization->save();
    }
}
