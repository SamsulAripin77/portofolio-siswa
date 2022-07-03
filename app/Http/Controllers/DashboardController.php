<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function dashboard(){
        return view('admin.dashboard');
    }

    public function portofolio(Request $request)
    {
        try {
            $user = User::find(Auth::id());
            return view('dashboard', compact('user'));
        }catch (Exception $e){
            Log::channel('app')->error(['error' => $e->getMessage()]);
        }
    }
}
