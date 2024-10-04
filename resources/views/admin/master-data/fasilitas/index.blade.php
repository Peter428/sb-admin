@extends('admin.layouts.app')
@section('content')
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4">
            <div class="card shadow h-100 py-2">
                <div class="card-header d-flex flex-row align-items-center justify-content-between">
                    <h4 class="card-title">Master Fasilitas</h4>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#modal-tambah-fasilitas">Tambah
                        Data
                    </button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-data dataTables" id="table-fasilitas">
                            <thead>
                            <tr>
                                <th class="w-3p">No</th>
                                <th class="w-10p">Code Fasilitas</th>
                                <th class="w-10p">Nama Fasilitas</th>
                                <th>Deskripsi Fasilitas</th>
                                <th class="w-5p">Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @forelse($fasilitas as $key => $item)
                                <tr>
                                    <td>{{$no ++}}</td>
                                    <td>{{$item->code_fasilitas}}</td>
                                    <td>{{$item->nama_fasilitas}}</td>
                                    <td>{{$item->keterangan_fasilitas ?? '-'}}</td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary"><i class="fa fa-eye"></i>
                                        </button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5">Data tidak ditemukan.</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('admin.master-data.fasilitas.modal')

@endsection
@push('page-scripts')
    <script src="{{asset('assets/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <script>
        $(document).ready(function () {
            $(`#table-fasilitas`).DataTable();
        });
    </script>
@endpush
