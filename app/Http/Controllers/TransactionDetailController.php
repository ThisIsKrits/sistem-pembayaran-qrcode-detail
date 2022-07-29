<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WifiPackage;
use App\Models\transaction;
use Illuminate\Support\Str;

class TransactionDetailController extends Controller
{
    public function index(Request $request, $id){
        $item = Transaction::with(['wifi_package'])
        ->FindOrFail($id);
        return view('pages.detail',[
            'item'=>$item
        ]);
    }
}
