<div class="modal fade" id="editModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="judul"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editForm1" action="<?php echo base_url('index.php/roles/akses'); ?>" method="post">
                    <input type="hidden" name="id_akses" id="id_akses" value="">
                    <label for="checkbox">Pilih Checkbox:</label>
                    <br>
                    <?php foreach ($menu as $item) { ?>
                        <input type="checkbox" name="akses[]" value="<?php echo $item->id_menu; ?>"> <?php echo $item->nama_menu; ?>
                        <br>
                    <?php } ?>

                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </form>

            </div>
        </div>
    </div>
</div>