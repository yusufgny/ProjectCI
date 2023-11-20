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
                        <label for="editMapel">Mapel:</label>
                        <input type="text" class="form-control" name="mapel" id="editMapel" placeholder="Masukkan mapel" required>
                    </div>
                    <div class="form-group">
                        <label for="editMapel_nilai">Keterangan:</label>
                        <input type="text" class="form-control" name="mapel_nilai" id="editMapel_nilai" placeholder="Masukkan mapel nilai" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </form>
            </div>
        </div>
    </div>
</div>