<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WifiPackage;
use App\Models\transaction;
use App\Models\Gallery;
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
        $items = Transaction::all();
        return view('pages.admin.transaction.index',[
            'items'=>$items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transaksi = Transaction::findOrfail($id);
        $bukti     = Gallery::where('id_transaksi','=', $id)->get();
        return view('pages.admin.transaction.show', [
            'transaksi' => $transaksi,
            'bukti' => $bukti,
            // 'item_image' => $item_image
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Transaction::findOrfail($id);
        return view('pages.admin.transaction.edit',[
            'item'=>$item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TransactionRequest $request, $id)
    {
        $data = $request->all();

        $Transaction = Transaction::findOrFail($id);
        $Transaction->update($data);
        return redirect()->route('transaction.index')->with('success', 'Data Berhasil di Edit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item_gambar = Gallery::where('id_transaksi',$id)->delete();
        $item = Transaction::findOrFail($id);//cari berdasarkan id = $id,
        // kalo ga ada error page not found 404
        $item->delete();

       return redirect()->route('transaction.index');
    }
}
