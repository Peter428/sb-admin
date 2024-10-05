@extends('admin.layouts.app')
@section('content')
    <form action="#">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="card-title">Detail Sewa</h4>
                        <a href="{{route('penyewaan.index')}}" class="btn btn-danger">Kembali</a>
                    </div>
                    <div class="card-body">
                        <p>{{$kost->nama_kost}}</p>
                        <p>{{$kost->alamat_kost}}</p>
                        <p>{{$kost->fasilitas_kost}}</p>
                        <p>Rp {{number_format($kost->harga_kost)}}</p>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Type Pembayaran</label>
                                    <select name="" id="" class="form-control">
                                        <option value="" selected disabled>Pilih tipe pembayaran</option>
                                        <option value="">Cash</option>
                                        <option value="">Transfer</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Type Pembayaran</label>
                                    <input type="file" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-success">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
@push('page-scripts')
    <script src="{{asset('assets/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
@endpush
