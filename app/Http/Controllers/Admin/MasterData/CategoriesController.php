<?php

namespace App\Http\Controllers\Admin\MasterData;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class CategoriesController extends Controller
{
    public function index()
    {
        $categori = Categories::all();
        return view('admin.master-data.categories.index', compact('categori'));
    }

    public function saveCategories(Request $request)
    {
        DB::beginTransaction();
        try {
            $kategori = new Categories();
            $kategori->categories_code = "CAT".rand(1000, 9999). date('y');
            $kategori->categories_name = $request->categories_name;
            $kategori->categories_description = $request->categories_description;
            $kategori->save();

            DB::commit();
            Session::flash('message', ['Berhasil menambah kategori', 'success']);
        }catch (\Exception $e) {
            DB::rollback();
            Session::flash('message', ['Terjadi kesalahan pada sistem', 'error']);
        }
        return redirect()->route('categories.index');
    }
}
