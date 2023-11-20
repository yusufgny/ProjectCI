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
                        <label for="editNama_menu">Nama Menu:</label>
                        <input type="text" class="form-control" name="nama_menu" id="editNama_menu" placeholder="Masukkan nama menu" required>
                    </div>
                  
                    <div class="form-group">
                        <label for="editNama_url">Nama URL:</label>
                        <input type="text" class="form-control" name="nama_url" id="editNama_url" placeholder="Masukkan nama url" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="editNama_icon">Nama Icon:</label>
                        <input type="text" class="form-control" name="nama_icon" id="editNama_icon" placeholder="Masukkan nama icon" required>
                    </div>
                   

                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </form>
            </div>
        </div>
    </div>
</div>