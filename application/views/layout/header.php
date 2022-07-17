<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Halaman Kasir</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?=base_url('assets/')?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?=base_url('assets/')?>lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?=base_url('assets/')?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?=base_url('assets/')?>css/style.css" rel="stylesheet">
    <link href="<?=base_url('assets/')?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Kasir Apotek</h3>
                </a>

                <div class="navbar-nav w-100">
                    <?php
            if ($user['role'] == 'Bos') {
            ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('Dashboard/') ?>">
                            <i class="fas fa-fw fa-tachometer-alt"></i>
                            <span>Dashboard</span></a>
                    </li>
                    <?php
            }
            ?>
                    <?php
            if ($user['role'] == 'User') { ?>
                    <a href="<?= base_url('Obat/') ?>" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Table
                        Obat</a>
                    <a href="<?= base_url('Datatables/') ?>" class="nav-item nav-link"><i
                            class="fa fa-keyboard me-2"></i>Data Obat</a>
                    <a href="<?= base_url('Profil/Obat') ?>" class="nav-item nav-link"><i
                            class="fa fa-keyboard me-2"></i>Transaksi</a>
                    <a href="<?= base_url('Profil/detail') ?>" class="nav-item nav-link"><i
                            class="fa fa-th me-2"></i>Data Transaksi</a>
                    <a href="<?= base_url('Auth/logout') ?>" class="nav-item nav-link"><i
                            class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Logout</a>
                    <?php } else {  
            ?>
                    <a href="<?= base_url('Datatables/') ?>" class="nav-item nav-link"><i
                            class="fa fa-keyboard me-2"></i>Data Obat</a>
                    <a href="<?= base_url('Profil/detail') ?>" class="nav-item nav-link"><i
                            class="fa fa-th me-2"></i>Data Transaksi</a>
                    <a href="<?= base_url('Auth/logout') ?>" class="nav-item nav-link"><i
                            class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Logout</a>
                    <?php
            } ?>
                </div>
            </nav>
        </div>
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control bg-dark border-0" type="search" placeholder="Search">
                </form>
                <div class="nav-item dropdown">
                </div>
            </nav>
            <html lang="en">

            <!-- Custom fonts for this template -->
            <link href="<?=base_url('assets/')?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet"
                type="text/css">
            <link
                href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
                rel="stylesheet">

            <!-- Custom styles for this template -->
            <link href="css/sb-admin-2.min.css" rel="stylesheet">

            <!-- Custom styles for this page -->
            <link href="<?=base_url('assets/')?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
            <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
            <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css">
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>