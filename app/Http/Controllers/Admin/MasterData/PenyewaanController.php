<?php

namespace App\Http\Controllers\Admin\MasterData;

use App\Http\Controllers\Controller;
use App\Models\Kost;
use Illuminate\Http\Request;

class PenyewaanController extends Controller
{
    public function index()
    {
        $kost = Kost::all();
        return view('admin.master-data.penyewaan.index',compact('kost'));
    }

    public function detailSewa($id)
    {
        $kost = Kost::find($id);
        return view('admin.master-data.penyewaan.detail-sewa',compact('kost'));
    }

    public function saveTransaction(Request $request)
    {

    }
}
