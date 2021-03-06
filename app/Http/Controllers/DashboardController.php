<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Models\Creation;
use App\Models\Organization;
use App\Models\Sertification;
use App\Models\Skill;
use App\Models\User;
use App\Models\Work;
use Carbon\Carbon;
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

    public function dashboard()
    {
        $data = [
            [
                'label' => 'Skill',
                'icon' => 'fas fa-briefcase',
                'color' => 'yellow',
                'today' => Skill::whereDate('created_at', Carbon::today())->count(),
                'count' => Auth::user()->isAdmin() ? Skill::count() : User::find(Auth::id())->skills->count(),
            ],
            [
                'label' => 'Organisasi',
                'icon' => 'fas fa-users',
                'color' => 'indigo',
                'today' => Organization::whereDate('created_at', Carbon::today())->count(),
                'count' => Auth::user()->isAdmin() ? Organization::count() : User::find(Auth::id())->organizations->count(),
            ],
            [
                'label' => 'Penghargaan',
                'icon' => 'fas fa-medal',
                'color' => 'green',
                'today' => Achievement::whereDate('created_at', Carbon::today())->count(),
                'count' => Auth::user()->isAdmin() ? Achievement::count() : User::find(Auth::id())->achivements->count(),
            ],
            [
                'label' => 'Karya',
                'color' => 'yellow',
                'icon' => 'fab fa-creative-commons',
                'today' => Creation::whereDate('created_at', Carbon::today())->count(),
                'count' => Auth::user()->isAdmin() ? Creation::count() : User::find(Auth::id())->creations->count(),
            ],
            [
                'label' => 'Sertifikasi',
                'icon' => 'fas fa-certificate',
                'color' => 'red',
                'today' => Sertification::whereDate('created_at', Carbon::today())->count(),
                'count' => Auth::user()->isAdmin() ? Sertification::count() : User::find(Auth::id())->sertifications->count(),
            ],
            [
                'label' => 'Internship',
                'icon' => 'fas fa-handshake',
                'color' => 'green',
                'today' => Work::whereDate('created_at', Carbon::today())->count(),
                'count' => Auth::user()->isAdmin() ? Work::count() : User::find(Auth::id())->works->count(),
            ],
        ];

        return view('admin.dashboard', compact('data'));
    }

    public function portofolio(Request $request)
    {
        try {
            $user = User::find(Auth::id());
            return view('dashboard', compact('user'));
        } catch (Exception $e) {
            Log::channel('app')->error(['error' => $e->getMessage()]);
        }
    }
}
