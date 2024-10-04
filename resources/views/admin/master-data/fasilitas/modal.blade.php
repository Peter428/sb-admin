<div class="modal fade" id="modal-tambah-fasilitas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Form Tambah Fasilitas</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="{{route('fasilitas.save')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="id" id="id">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Nama Fasilitas</label>
                                <input type="text" class="form-control" name="nama_fasilitas" placeholder="Silahkan masukkan nama Fasilitas">
                            </div>
                            <div class="form-group">
                                <label for="">Description Fasilitas</label>
                                <input type="text" name="keterangan_fasilitas" class="form-control" placeholder="Silahkan masukkan deskripsi Fasilitas">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
