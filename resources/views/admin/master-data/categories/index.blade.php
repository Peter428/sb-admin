@extends('admin.layouts.app')
@section('content')
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4">
            <div class="card shadow h-100 py-2">
                <div class="card-header d-flex flex-row align-items-center justify-content-between">
                    <h4 class="card-title">Master Categories</h4>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#modal-tambah-kategori">Tambah Data</button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover" id="table-categories">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Code Kategori</th>
                                <th>Nama Kategori</th>
                                <th>Deskripsi</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($categori as $key => $item)
                                <tr>
                                    <td>{{$key + 1}}</td>
                                    <td>{{$item->categories_code}}</td>
                                    <td>{{$item->categories_name}}</td>
                                    <td>{{$item->categories_description ?? '-'}}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4">Data tidak ditemukan.</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('admin.master-data.categories.modal')

@endsection
@push('page-scripts')
    <script src="{{asset('assets/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('#table-categories').DataTable();
        });
    </script>
@endpush
