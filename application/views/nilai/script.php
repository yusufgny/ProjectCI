<script>
$(document).ready(function() {
    $('#tambahForm').submit(function(e) {
        e.preventDefault();
        
        var formData = $(this).serialize();

        $.ajax({
            url: "<?php echo base_url('index.php/nilai/tambah'); ?>",
            type: 'post',
            data: formData,
            success: function(response) {
                swal({
                        title: "Sukses!",
                        text: "Data berhasil Disimpan.",
                        icon: "success",
                    }).then((willReload) => {
                        if (willReload) {
                            location.reload();
                        }
                    });
                    $('#konfirmasiModal').modal('hide');
            },
            error: function() {
                swal("Error!", "Terjadi kesalahan saat menghubungi server.", "error");
            }
        });
    });
});
</script>

<script>
    $(document).ready(function() {
        var idToDelete;

        $('.hapus').click(function() {
            idToDelete = $(this).data('id');
        });

        $('#hapusButton').click(function() {

            $.ajax({
                url: "<?php echo base_url('index.php/nilai/hapus'); ?>",
                type: 'POST',
                data: {
                    id: idToDelete
                },
                success: function(response) {
                    swal({
                        title: "Sukses!",
                        text: "Data berhasil dihapus.",
                        icon: "success",
                    }).then((willReload) => {
                        if (willReload) {
                            location.reload();
                        }
                    });
                    $('#konfirmasiModal').modal('hide');
                },
                error: function() {
                    swal("Error!", "Terjadi kesalahan saat menghapus data.", "error");
                }
            });
        });
    });
</script>

<script>
    $(document).ready(function() {
        var idToEdit;

        $('.edit').click(function() {
            idToEdit = $(this).data('id');

            $.ajax({
                url: "<?php echo base_url('index.php/nilai/get_data_by_id'); ?>",
                type: 'POST',
                data: {
                    id: idToEdit
                },
                dataType: 'json',
                success: function(response) {
                    $('#editId').val(response.id_nilai);
                    $('#editMapel').val(response.mapel);
                    $('#editMapel_nilai').val(response.mapel_nilai);
                },
                error: function() {
                    alert('Terjadi kesalahan saat mengambil data.');
                }
            });
        });

        $('#editForm').submit(function(e) {
            e.preventDefault();
            var formData = $(this).serialize();

            $.ajax({
                url: "<?php echo base_url('index.php/nilai/edit_data'); ?>",
                type: 'POST',
                data: formData,
                dataType: 'json',
                success: function(response) {
                    $('#editModal').modal('hide');
                    if (response.status == 'success') {
                        swal({
                            title: "Sukses!",
                            text: "Data berhasil diedit.",
                            icon: "success",
                        }).then((willReload) => {
                            if (willReload) {
                                location.reload(); 
                            }
                        });
                        $('#konfirmasiModal').modal('hide');
                    } else {
                        swal("Error!", "Terjadi kesalahan saat mengubah data.", "error");
                    }
                },
                error: function() {
                    swal("Error!", "Terjadi kesalahan saat menghubungi server.", "error");
                }
            });
        });
    });
</script>