<!-- Edit Data Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editForm">
                    <input type="hidden" name="id" id="editId" value="">
                    <div class="form-group">
                        <label for="editUsername">Username:</label>
                        <input type="text" class="form-control" name="username" id="editUsername" placeholder="Masukkan username" required>
                    </div>
                    <div class="form-group">
                        <label for="editPassword">Password:</label>
                        <input type="text" class="form-control" name="password" id="editPassword" placeholder="Masukkan password">
                    </div>
                    <input type="hidden" class="form-control" name="password1" id="editPassword1" placeholder="Masukkan password">
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </form>
            </div>
        </div>
    </div>
</div>