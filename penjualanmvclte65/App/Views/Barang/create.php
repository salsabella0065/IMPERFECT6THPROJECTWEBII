<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="public/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="public/dist/css/adminlte.min.css">
    
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
        <!-- Sidebar -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="public/index3.html" class="brand-link">
                <img src="public/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Admin</span>
            </a>
            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="public/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Rohmanisah</a>
                    </div>
                </div>
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-header">Daftar</li>
                        <li class="nav-item">
                            <a href="index.php?controller=home&action=index" class="nav-link">
                                <i class="nav-icon far fa-circle text-info"></i>
                                <p>Home</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?controller=barang&action=index" class="nav-link">
                                <i class="nav-icon far fa-circle text-danger"></i>
                                <p>Barang</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?controller=pelanggan&action=index" class="nav-link">
                                <i class="nav-icon far fa-circle text-warning"></i>
                                <p>Pelanggan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?controller=transaksi&action=index" class="nav-link">
                                <i class="nav-icon far fa-circle text-info"></i>
                                <p>Transaksi</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <!-- Konten Halaman -->
        <div class="content-wrapper">
            <section class="content">
                <div class="container-fluid">
                    <h1>Tambah Barang</h1>
                    <!-- Form untuk menambah barang -->
                    <form action="index.php?controller=barang&action=store" method="POST">
                        <div class="form-group">
                            <label for="kode_barang">Kode Barang:</label>
                            <input type="text" id="kode_barang" name="kode_barang" required>
                        </div>
                        <div class="form-group">
                            <label for="nama_barang">Nama Barang:</label>
                            <input type="text" id="nama_barang" name="nama_barang" required>
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga:</label>
                            <input type="number" id="harga" name="harga" required>
                        </div>
                        <div class="form-group">
                            <label for="stok">Stok:</label>
                            <input type="number" id="stok" name="stok" required>
                        </div>

                        <input href="index.php?controller=barang&action=index" type="submit" class="btn btn-add" value="Simpan">
                        <a href="index.php?controller=barang&action=index" class="btn btn-add">Kembali</a>

                    </form>
                </div>
            </section>
        </div>
    </div>

    <!-- AdminLTE & jQuery Scripts -->
    <script src="public/plugins/jquery/jquery.min.js"></script>
    <script src="public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="public/dist/js/adminlte.min.js"></script>
</body>

</html>