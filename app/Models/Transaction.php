<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'id_paket',
        'nama',
        'alamat',
        'email',
        'phone',
        'transaction_total',
        'transaction_status'
    ];

    public function wifi_package() {
        return $this->belongsTo(WifiPackage::class, 'id_paket', 'id');
    }


}
