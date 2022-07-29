<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\WifiPackageRequest;
use App\Models\WifiPackage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Str;

class WifiPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = WifiPackage::all();

        return view('pages.admin.wifi-package.index',[
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        

        return view('pages.admin.wifi-package.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WifiPackageRequest $request)
    {
        $item_user      = $request->user();
        $data           = $request->all();
        $data['image']  = $request->file('image')->store(
            'assets/gallery', 'public'
        );
        $data['id_user'] = $item_user->id;

        WifiPackage::create($data);
        return redirect()->route('wifi-package.index')->with('success','Data Berhasil di tambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = WifiPackage::findOrFail($id);
        return view('pages.admin.wifi-package.edit',[
            'item' => $item,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(WifiPackageRequest $request, $id)
    {
        $item_user      = $request->user();
        $data['id_user'] = $item_user->id;
        $data           = $request->all();
        $data['image']  = $request->file('image')->store(
            'assets/gallery', 'public'
        );
        $item      =   WifiPackage::FindOrFail($id);
        $item -> update($data);

        return redirect()->route('wifi-package.index')->with('success', 'Data Berhasil di Edit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = WifiPackage::FindOrFail($id);

       $item->delete();

       return redirect()->route('wifi-package.index')->with('success', 'Data Berhasil di diHapus!');
    }



    public function generate ($id)
    {
        $data = WifiPackage::findOrFail($id);
        $qrcode = QrCode::size(400)->generate(
            "Nama Paket : ".
            $data
            ->nama_paket."\n"."Harga Paket : ".
            "RP.".$data->harga_paket."\n".$data->speed
        );
        return view('pages.admin.wifi-package.qrcode',[
            'qrcode'=>$qrcode
        ]);
    }
}
