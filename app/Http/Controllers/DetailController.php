<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WifiPackage;
use App\Models\Transaction;
use App\Models\Payment;
use App\Models\Gallery;
use App\Http\Requests\GalleryRequest;
use Illuminate\Support\Str;
class DetailController extends Controller
{
    public function index($id)
    {
        $item_bank = Payment::all();
        $item = Transaction::with(['wifi_package'])->findOrFail($id);
        return view('pages.detail',[
            'item'=>$item,
            'item_bank'=>$item_bank
        ]);
    }

    public function upload(GalleryRequest $request,$id){
        $item_transaksi = Transaction::findOrFail($id);
        $data =  $request->all();
        $data['id_transaksi'] = $id;
        $data['bukti']  = $request->file('bukti')->store(
            'assets/gallery', 'public'
        );
        $detail = Gallery::create($data);
        return redirect()->route('transaction-success', $detail->id);
    }

    public function success(Request $request,$id){
        Gallery::with(['transaksi'])->FindOrFail($id);
        return view('pages.success');
    }
}
