<?php
namespace App\Http\Controllers\Traits;

use App\Models\Profile;
use Illuminate\Support\Facades\DB;

Trait InsertUserTrait{
    public function insert ($user, $request) {
        DB::transaction(function() use($user, $request){        
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->save();
        $profile = [
            'hp' => $request->get('hp'), 
            'nama_sekolah' => $request->get('nama_sekolah'),
            'jurusan' => $request->get('jurusan'),
            'nilai_rata' => $request->get('nilai_rata'),
            'tahun_masuk' => $request->get('tahun_masuk'),
            'tahun_keluar' => $request->get('tahun_keluar'),
            'user_id' => $user->id
        ];
        if($user->profile == null){
            $user->profile()->save(new Profile($profile));
        }else {
            $user->profile->update($profile);
        }
    });
    }
}
