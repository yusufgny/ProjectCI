<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/index.php/level">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">ADMINISTRASI SEKOLAH <sup>MA</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <?php
    $CI = &get_instance(); 
    $id_roles = $CI->session->userdata('id_roles');

    $CI->db->select('*');
    $CI->db->from('akses');
    $CI->db->join('menu', 'menu.id_menu = akses.id_menu');
    $CI->db->where('akses.id_roles', $id_roles);
    $query = $CI->db->get();
    $akses= $query->result();
    ?>

    <?php foreach ($akses as $item) : ?>
        <li class="nav-item active">
        <a class="nav-link" href="<?= site_url($item->nama_url) ?>">
            <i class="fas fa-fw <?= $item->nama_icon ?>"></i>
            <span><?= $item->nama_menu ?></span></a>
    </li>
    <?php endforeach; ?>




    <!-- Divider -->
    <!-- <hr class="sidebar-divider"> -->


    <!-- Divider -->
    <!-- <hr class="sidebar-divider"> -->


    <!-- Divider -->
    <!-- <hr class="sidebar-divider d-none d-md-block"> -->

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>