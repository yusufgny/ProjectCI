
 <!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title" id="judul">Tambah Data Input</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <div id="tampil_modal">
                    <form id="tambahForm" method="post">
                        <div class="form-group">
                            <label for="nama_menu">Nama Menu:</label>
                            <input type="text" class="form-control" name="nama_menu" placeholder="Masukkan nama menu" required>
                        </div>
                        <div class="form-group">
                            <label for="nama_url">Nama url:</label>
                            <input type="text" class="form-control" name="nama_url" placeholder="Masukkan nama url" required>
                        </div>
                        <div class="form-group">
                            <label for="nama_icon">Nama Icon:</label>
                            <input type="text" class="form-control" name="nama_icon" placeholder="Masukkan nama icon" required>
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
