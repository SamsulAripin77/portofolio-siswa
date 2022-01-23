<?php
namespace App\Exports;

use App\Invoice;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\FromView;

class PortofolioExport implements FromView
{
    public function view(): View
    {
        return view('portofolio', [
            'user' => $user = User::find(Auth::id())
        ]);
    }
}
