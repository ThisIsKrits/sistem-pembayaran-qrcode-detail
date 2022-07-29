<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'id_user',
        'nama_bank',
        'no_rek',
        'nama_pemilik'
    ];

    public function user() {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}
