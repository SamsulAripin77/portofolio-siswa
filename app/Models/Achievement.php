<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    use HasFactory;

    protected $table = 'achievements';

    protected $fillable = [
        'title',
        'description',
        'image',
        'user_id',
    ];

    public function user () {
       return $this->belongsTo(User::class);
    }
}
