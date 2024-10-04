<div class="modal fade" id="modal-tambah-kost" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Form Tambah Kost</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="{{route('kost.save')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="id" id="id">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Nama Kost</label>
                                <input type="text" class="form-control" name="nama_kost" required placeholder="Silahkan masukkan nama Fasilitas">
                            </div>
                            <div class="form-group">
                                <label for="">Alamat Kost</label>
                                <textarea class="form-control" required name="alamat_kost" id="" placeholder="Alamat Kost.."></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Kategori Kost</label>
                                <select name="id_categories" id="id_categories" class="form-control select2" required>
                                    <option value="" selected disabled>Pilih Kategori Kost</option>
                                    @foreach($categories as $kategori)
                                        <option value="{{$kategori->id}}">{{$kategori->categories_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Fasilitas Kost</label>
                                <select name="fasilitas_kost[]" id="fasilitas_kost" class="form-control select2" multiple required>
                                    <option value="" selected disabled>Pilih Fasilitas Kost</option>
                                    @foreach($fasilitas as $fasil)
                                        <option value="{{$fasil->nama_fasilitas}}">{{$fasil->nama_fasilitas}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Harga Kost</label>
                                <input type="number" class="form-control" name="harga_kost" value="0" required placeholder="Harga kost">
                            </div>
                            <div class="form-group">
                                <label for="">Keterangan</label>
                                <textarea class="form-control" name="keterangan" id="" placeholder="Keterangan optional.."></textarea>
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
