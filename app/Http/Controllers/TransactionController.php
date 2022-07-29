<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WifiPackage;
use App\Models\transaction;
use App\Models\Payment;
use App\Http\Requests\TransactionRequest;
use Illuminate\Support\Str;
use SimpleSoftwareIO\QrCode\Facades\QrCode;


class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $item_bank = Payment::all();
        $item = WifiPackage::findOrFail($id);
        $qrcode = QrCode::size(250)->generate(
            "Nama Paket : ".
            $item
            ->nama_paket."\n"."Kecepatan Paket : "
            .$item->speed."\n"."Informasi Paket : ".
            $item->informasi_paket."\n"."Harga Paket :"." ".
            "Rp.".$item->harga_paket
        );
        return view('pages.transaction',[
            'item' => $item,
            'qrcode'=>$qrcode,
            'item_bank'=>$item_bank
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TransactionRequest $request)
    {

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function proses(TransactionRequest $request,$id){
        $item_paket = WifiPackage::findOrFail($id);
        $data = $request->all();
        $data['transaction_total'] = $item_paket->harga_paket;
        $data['id_paket'] = $id;

        $Transaction = Transaction::create($data);
        return redirect()->route('transaction-detail', $Transaction->id);
    }

    public function success(TransactionRequest $request,$id){
        Transaction::FindOrFail($id);
        return view('pages.success');
    }

}
