<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = [
        'id_transaksi',
        'bukti',
        
    ];

    public function transaksi() {
        return $this->belongsTo(Transaction::class, 'id_transaksi', 'id');
    }
}
