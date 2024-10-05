@foreach($kost as $item)
    <div class="modal fade modal-penyewaan-kos" id="modal-penyewaan-kos" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Form Penyewaan Kos</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="#" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <input type="hidden" name="id" id="id">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Nama Kost</label>
                                    <input type="text" class="form-control" name="categories_name" value="{{$item->nama_kost}}"
                                           placeholder="Silahkan masukkan nama kategori">
                                </div>
                                <div class="form-group">
                                    <label for="">Description</label>
                                    <input type="text" name="categories_description" class="form-control"
                                           placeholder="Silahkan masukkan deskripsi">
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
@endforeach
