<?php

namespace App\Http\Controllers\Admin\MasterData;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Fasilitas;
use App\Models\Kost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class KostController extends Controller
{
    public function index()
    {
        $kost = DB::table('kosts')
            ->select('kosts.*','categories.categories_name')
            ->join('categories', 'kosts.id_categories', '=', 'categories.id')
            ->get();
        $fasilitas = Fasilitas::all();
        $categories = Categories::all();
        return view('admin.master-data.kost.index', compact('kost', 'fasilitas', 'categories'));
    }

    public function saveKost(Request $request)
    {
        $request->validate([
            'nama_kost' => 'required',
            'alamat_kost' => 'required',
            'id_categories' => 'required',
            'fasilitas_kost' => 'required',
            'harga_kost' => 'required',
        ], [
            'nama_kost.required' => 'Kolom Nama Kost harus diisi',
            'alamat_kost.required' => 'Kolom Alamat Kost harus diisi',
            'id_categories.required' => 'Kolom Kategori Kost harus diisi',
            'fasilitas_kost.required' => 'Kolom Fasilitas Kost harus diisi',
            'harga_kost.required' => 'Kolom Harga Kost harus diisi',
        ]);

        DB::beginTransaction();
        try {
            $kost = new Kost();
            $kost->nama_kost = $request->nama_kost;
            $kost->alamat_kost = $request->alamat_kost;
            $kost->id_categories = $request->id_categories;
            $kost->fasilitas_kost = implode(', ', $request->fasilitas_kost);
            $kost->harga_kost = $request->harga_kost;
            $kost->status = "1";
            $kost->keterangan = $request->keterangan;
            $kost->save();

            DB::commit();
            Session::flash('message', ['Berhasil menambah kost', 'success']);
        } catch (\Exception $e) {
            DB::rollback();
            Session::flash('message', ['Terjadi kesalahan pada sistem', 'error']);
        }
        return redirect()->route('kost.index');
    }
}
