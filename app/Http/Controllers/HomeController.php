<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WifiPackage;
use App\Models\transaction;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class HomeController extends Controller
{
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $items = WifiPackage::all();
        $data = Transaction::all();
        return view('home',[
            'items'=>$items,
            'data'=>$data
        ]);
    }

    

    public function generate ($id)
    {
        $data = WifiPackage::findOrFail($id);
        $qrcode = QrCode::size(400)->generate(
            "Nama Paket : ".
            $data
            ->nama_paket."\n"."Kecepatan Paket : "
            .$data->speed."\n"."Informasi Paket : ".
            $data->informasi_paket."\n"."Harga Paket :"." ".
            "Rp.".$data->harga_paket
        );
        return view('pages.bayar',[
            'qrcode'=>$qrcode
        ]);
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$data = Transaction::where('nama','like',"%".$cari."%");
 
    		// mengirim data pegawai ke view index
		return view('cari',['data' => $data]);
 
	}
   
}
