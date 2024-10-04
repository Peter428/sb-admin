<?php

namespace App\Http\Controllers\Admin\MasterData;

use App\Http\Controllers\Controller;
use App\Models\Fasilitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class FasilitasController extends Controller
{
    public function index()
    {
        $fasilitas = Fasilitas::all();
        return view('admin.master-data.fasilitas.index', compact('fasilitas'));
    }

    public function saveFasilitas(Request $request)
    {
        DB::beginTransaction();
        try {
            $fasilitas = new Fasilitas();
            $fasilitas->code_fasilitas = "FK".rand(1000, 9999). date('y');
            $fasilitas->nama_fasilitas = $request->nama_fasilitas;
            $fasilitas->keterangan_fasilitas = $request->keterangan_fasilitas;
            $fasilitas->save();

            DB::commit();
            Session::flash('message', ['Berhasil menambah fasilitas', 'success']);
        }catch (\Exception $e) {
            DB::rollback();
            Session::flash('message', ['Terjadi kesalahan pada sistem', 'error']);
        }
        return redirect()->route('fasilitas.index');
    }
}
