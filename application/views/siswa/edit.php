<!-- Edit Data Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editForm">
                    <input type="hidden" name="id" id="editId" value="">
                    <div class="form-group">
                        <label for="editNama">Nama:</label>
                        <input type="text" class="form-control" name="nama_siswa" id="editNama" placeholder="Masukkan nama" required>
                    </div>
                    <div class="form-group">
                        <label for="editTtl">Edit Tanggal Lahir</label>
                        <!-- <label for="editTtl">Pilih Tanggal Lahir:</label> -->
                        <input type="date" id="ttl" name="ttl">
                        <input type="text" class="form-control" name="ttl" id="editTtl" placeholder="Masukkan tanggal lahir" required>
                    </div>
                    <div class="form-group">
                        <label for="editJankel">Jenis Kelamin:</label>
                        <input type="text" class="form-control" name="jenkel" id="editJenkel" placeholder="Masukkan jenis kelamin" required>
                    </div>
                    <div class="form-group">
                        <label for="editTingkatan">Tingkatan:</label>
                        <input type="text" class="form-control" name="tingkatan" id="editTingkatan" placeholder="Masukkan tingkatan" required>
                    </div>
                    <div class="form-group">
                        <label for="editAlamat">Alamat:</label>
                        <input type="text" class="form-control" name="alamat" id="editAlamat" placeholder="Masukkan alamat" required>
                    </div>
                    <div class="form-group">
                        <label for="editAgama">Agama:</label>
                        <input type="text" class="form-control" name="agama" id="editAgama" placeholder="Masukkan agama" required>
                    </div>
                    <div class="form-group">
                        <label for="editUmur">Umur:</label>
                        <input type="text" class="form-control" name="umur" id="editUmur" placeholder="Masukkan umur" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </form>
            </div>
        </div>
    </div>
</div>