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
                            <label for="nama_siswa">Nama:</label>
                            <input type="text" class="form-control" name="nama_siswa" placeholder="Masukkan nama siswa" required>
                        </div>
                        <div class="form-group">
                            <!-- <label for="ttl">Tanggal Lahir:</label> -->
                            <label for="ttl">Pilih Tanggal Lahir:</label>
                            <input type="date" id="ttl" name="ttl">
                            <!-- <input type="text" class="form-control" name="ttl" placeholder="Masukkan tanggal lahir" required> -->
                        </div>
                        <div class="form-group">
                            <label for="jenkel">Jenis Kelamin:</label>
                            <select class="form-control" name="jenkel">
                                <option value="Perempuan">Perempuan</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                            </select>
                            <!-- <input type="text" class="form-control" name="jenkel" placeholder="Masukkan jenis kelamin" required> -->
                        </div>
                        <div class="form-group">
                            <label for="tingkatan">Tingkatan:</label>
                            <select class="form-control" name="tingkatan">
                                <option value="SD">SD</option>
                                <option value="MI">MI</option>
                                <option value="SMP">SMP</option>
                                <option value="MTs">MTs</option>
                                <option value="SMA">SMA</option>
                                <option value="SMK">SMK</option>
                                <option value="MA">MA</option>
                                <option value="D3">D3</option>
                                <option value="D4">D4</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                            </select>
                            <!-- <input type="text" class="form-control" name="tingkatan" placeholder="Masukkan tingkatan" required> -->
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat:</label>
                            <input type="text" class="form-control" name="alamat" placeholder="Masukkan alamat" required>
                        </div>
                        <div class="form-group">
                            <label for="agama">Agama:</label>
                            <select class="form-control" name="agama">
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katholik">Katholik</option>
                                <option value="Budha">Budha</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Konghucu">Konghucu</option>
                            </select>
                            <!-- <input type="text" class="form-control" name="agama" placeholder="Masukkan agama" required> -->
                        </div>
                        <div class="form-group">
                            <label for="umur">Umur:</label>
                            <input type="text" class="form-control" name="umur" placeholder="Masukkan umur" required>
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
