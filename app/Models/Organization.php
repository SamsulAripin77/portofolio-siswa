<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'position',
        'thn_mulai',
        'thn_akhir',
        'image',
        'user_id'
    ];


    public function user () {
       return $this->belongsTo(User::class);
    }
}
