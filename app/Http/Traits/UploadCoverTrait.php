<?php

namespace App\Http\Traits;

use Carbon\Carbon;

trait UploadCoverTrait 
{
    protected function uploadCover($request) {
        $cover = null;
        if($request->file('image')){
            $file = $request->file('image');
            $dt = Carbon::now();
            $acak = $file->getClientOriginalExtension();
            $fileName = rand(111111, 999999) 
                        . '-' . $dt->format('Y-m-d-H-i-s')
                        . '-.' . $acak;
            $request->file('image')->move('images', $fileName);
            $cover = $fileName;
        }

        return $cover;
    }
}