
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
                            <label for="username">Username:</label>
                            <input type="text" class="form-control" name="username" placeholder="Masukkan username" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="text" class="form-control" name="password" placeholder="Masukkan password" required>
                        </div>
                        
                        <label for="nama_roles">Roles:</label>
                        <select class="form-control" name="id_roles" required>
                            <?php foreach ($roles as $role): ?>
                                <option value="<?php echo $role['id_roles']; ?>"><?php echo $role['nama_roles']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        </div>

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
