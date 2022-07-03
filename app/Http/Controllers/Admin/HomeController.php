<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{

    
    public function index(Request $request)
    {
        try {
            $user = User::find(Auth::id());
            return view('dashboard', compact('user'));
        }catch (Exception $e){
            Log::channel('app')->error(['error' => $e->getMessage()]);
        }
    }
}
