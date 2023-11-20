
 <!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title" id="judul">Tambah Data Mapel Nilai</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <div id="tampil_modal">
                    <form id="tambahForm" method="post">
                        <div class="form-group">
                            <label for="mapel">Mapel:</label>
                            <input type="text" class="form-control" name="mapel" placeholder="Masukkan mapel" required>
                        </div>
                        <div class="form-group">
                            <label for="mapel_nilai">Kriteria Ketuntasan Minimal:</label>
                            <input type="text" class="form-control" name="mapel_nilai" placeholder="Masukkan mapelnilai" required>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <button type="button" class="btn btn-light" data-dismiss="modal">Batal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
