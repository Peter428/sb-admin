@extends('admin.layouts.app')
@section('content')
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4">
            <div class="card shadow h-100 py-2">
                <div class="card-header d-flex flex-row align-items-center justify-content-between">
                    <h4 class="card-title">Master Kost</h4>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#modal-tambah-kost">Tambah Data
                    </button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover" id="table-data-kost">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama kost</th>
                                <th>Kategori kost</th>
                                <th>Fasilitas kost</th>
                                <th class="text-right">Harga kost</th>
                                <th>Alamat kost</th>
                                <th>Aksi</th>
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
                                        <button class="btn btn-sm btn-outline-primary"><i class="fa fa-eye"></i>
                                        </button>
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
    <script src="{{asset('assets/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('#table-data-kost').DataTable();

        });
    </script>
@endpush
