<script>
    $(document).ready(function() {
        $('#tambahForm').submit(function(e) {
            e.preventDefault();

            var formData = $(this).serialize();

            $.ajax({
                url: "<?php echo base_url('index.php/roles/tambah'); ?>",
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
                url: "<?php echo base_url('index.php/roles/hapus'); ?>",
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
                url: "<?php echo base_url('index.php/roles/get_data_by_id'); ?>",
                type: 'POST',
                data: {
                    id: idToEdit
                },
                dataType: 'json',
                success: function(response) {
                    console.log(response);
                    var idRoles = response.roles_data ? response.roles_data[0].id_roles : response.akses_data[0].id_roles;
                    var namaRoles = response.roles_data ? response.roles_data[0].nama_roles : response.akses_data[0].nama_roles;

                    $('#editId').val(idRoles);
                    $('#editNama_roles').val(namaRoles);


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
                url: "<?php echo base_url('index.php/roles/edit_data'); ?>",
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

<script>
    $(document).ready(function() {
        var idToEdit;

        $('.akses').click(function() {
            idToEdit = $(this).data('id');
            // console.log(idToEdit);

            $.ajax({
                url: "<?php echo base_url('index.php/roles/get_data_by_id'); ?>",
                type: 'POST',
                data: {
                    id: idToEdit
                },
                dataType: 'json',
                success: function(response) {
                    console.log(response);
                    var idRoles = response.roles_data ? response.roles_data[0].id_roles : response.akses_data[0].id_roles;
                    var namaRoles = response.roles_data ? response.roles_data[0].nama_roles : response.akses_data[0].nama_roles;
                    var id_menus = response.roles_data ? response.roles_data[0].id_menu : response.akses_data[0].id_menu;

                    $('#id_akses').val(idRoles);
                    $('#judul').text(namaRoles);
                    $('input[type="checkbox"]').prop('checked', false);
                    response.akses_data.map(function(item) {
                        var idMenu = item.id_menu;
                        $('input[type="checkbox"][value="' + idMenu + '"]').prop('checked', true);
                    });

                },
                error: function() {
                    alert('Terjadi kesalahan saat mengambil data.');
                }
            });
        });
    });
</script>