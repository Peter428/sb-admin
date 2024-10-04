@extends('admin.layouts.app')
@section('content')
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4">
            <div class="card shadow h-100 py-2">
                <div class="card-header d-flex flex-row align-items-center justify-content-between">
                    <h4 class="card-title">Master Kost</h4>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#modal-tambah-kost">Tambah Data</button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover" id="table-kost">
                            <thead>
                            <tr>
                                <th style="width: 5%;">No</th>
                                <th style="width: 10%;">Nama kost</th>
                                <th style="width: 10%;">Kategori kost</th>
                                <th>Fasilitas kost</th>
                                <th class="text-right" style="width: 10%;">Harga kost</th>
                                <th style="width: 15%;">Alamat kost</th>
                                <th style="width: 5%;">Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($kost as $key => $item)
                                <tr>
                                    <td>{{$key + 1}}</td>
                                    <td>{{$item->nama_kost}}</td>
                                    <td>{{$item->categories_name}}</td>
                                    <td>{{$item->fasilitas_kost}}</td>
                                    <td class="text-right">{{number_format($item->harga_kost)}}</td>
                                    <td>{{$item->alamat_kost ?? '-'}}</td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary"><i class="fa fa-eye"></i></button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7">Data tidak ditemukan.</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('admin.master-data.kost.modal')

@endsection
@push('page-scripts')
    <script>
        $(document).ready(function () {
            $(`#table-kost`).DataTable();
        });
    </script>
@endpush
