@extends('admin.layouts.app')
@section('content')
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4">
            <div class="card shadow h-100 py-2">
                <div class="card-header d-flex flex-row align-items-center justify-content-between">
                    <h4 class="card-title">Master Penyewaan</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach($kost as $item)
                            <div class="col-md-3 mb-4">
                                <div class="card" style="width: 100%;">
                                    <img src="{{asset('assets/img/kost_1.png')}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$item->nama_kost}}</h5>
                                        <p class="font-weight-bold">Fasilitas Kost :</p>
                                        <p class="card-text">{{$item->fasilitas_kost}}</p>
                                        <p class="text-danger">Rp {{number_format($item->harga_kost)}}</p>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".modal-penyewaan-kos">Sewa Sekarang</button>
                                        <a href="{{route('penyewaan.detaiSewa', $item->id)}}" class="btn btn-success">Sewa</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>

    @include('admin.master-data.penyewaan.modal')
@endsection
@push('page-scripts')
    <script src="{{asset('assets/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
@endpush
