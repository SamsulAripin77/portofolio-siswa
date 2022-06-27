<?php

namespace App\Http\Controllers;

use App\Exports\PortofolioExport;
use App\Http\Controllers\Traits\InsertUserTrait;
use App\Models\Profile;
use App\Models\User;
// use Barryvdh\DomPDF\PDF; 

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Excel as ExcelExcel;
use Maatwebsite\Excel\Facades\Excel;
use Spatie\Browsershot\Browsershot;
use PDF;

class UserController extends Controller
{
    use InsertUserTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::with(['profile'])->where('role','user')->get();
        return view('admin.users.index',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User(['password' => bcrypt($request->input('password'))]);
        $this->insert($user, $request);
        return back()->with('message','Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        // dd($id);
        $request->validate([
            'email' => "unique:users,email,{$id}",
        ]);
        $user = User::find($id);
        $this->insert($user, $request);
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
        $user = User::find($id);
        $user->delete();
        return back()->with('message','Data Berhasil dihapus');
    }

    public function portofolio (Request $request) {
        $user = User::find(Auth::id());
        // $content =  view('dashboard', compact('user'))->render();
        // $iflename = 'porotofolio.pdf';
        // $path = storage_path() . '/app/public/' . $iflename;

        return response()->stream(function () use ($user) {
            echo $user->pdf();
        }, 200, ['Content-Type' => 'application/pdf']);
        
    }
}
