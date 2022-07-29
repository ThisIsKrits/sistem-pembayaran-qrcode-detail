<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WifiPackage;

class DashboardController extends Controller
{
    public function index(){
        $item = WifiPackage::count();

        return view('pages.admin.dashboard',[
            'item' => $item
        ]);
    }
}
