<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WifiPackage extends Model
{
    protected $fillable = [
        'id_user',
        'nama_paket',
        'speed',
        'informasi_paket',
        'image',
        'harga_paket',
    ];

    public function user() {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}
