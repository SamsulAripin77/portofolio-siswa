<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;

    protected $fillable = [
        'position',
        'company',
        'tgl_start',
        'tgl_end',
        'user_id',
    ];

    public function user () { 
       return $this->belongsTo(User::class);
    }
}
