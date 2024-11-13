<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Transaksi</title>
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
                        <a href="#" class="d-block">Salsa Bella</a>
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
                    <h2>Tambah Transaksi</h2>
                    <form action="index.php?controller=transaksi&action=store" method="POST">
                        <div class="form-group">
                            <label for="id_transaksi">ID Transaksi:</label>
                            <input type="number" name="id_transaksi" required>
                        </div>
                        <div class="form-group">
                            <label for="kode_barang">Kode Barang:</label>
                            <input type="text" name="kode_barang" required>
                        </div>
                        <div class="form-group">
                            <label for="id_pelanggan">ID Pelanggan:</label>
                            <input type="text" name="id_pelanggan" required>
                        </div>
                        <div class="form-group">
                            <label for="jumlah">Jumlah:</label>
                            <input type="number" name="jumlah" required>
                        </div>
                        <div class="form-group">
                            <label for="harga_barang">Harga Barang:</label>
                            <input type="number" name="harga_barang" required>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_transaksi">Tanggal Transaksi:</label>
                            <input type="datetime-local" name="tanggal_transaksi" required>
                        </div>

                        <p>Total Harga: <span id="total_harga">0</span></p>

                        <button type="submit" class="btn btn-add">Simpan</button>
                        <a href="index.php?controller=transaksi&action=index" class="btn btn-add">Kembali</a>
                    </form>
                </div>
            </section>
        </div>
    </div>

    <!-- AdminLTE & jQuery Scripts -->
    <script src="public/plugins/jquery/jquery.min.js"></script>
    <script src="public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="public/dist/js/adminlte.min.js"></script>

    <!-- Script untuk menghitung total harga -->
    <script>
        document.querySelector("input[name='jumlah']").addEventListener("input", calculateTotal);
        document.querySelector("input[name='harga_barang']").addEventListener("input", calculateTotal);

        function calculateTotal() {
            let jumlah = parseFloat(document.querySelector("input[name='jumlah']").value) || 0;
            let hargaBarang = parseFloat(document.querySelector("input[name='harga_barang']").value) || 0;
            let total = jumlah * hargaBarang;
            document.getElementById("total_harga").innerText = total;
        }
    </script>
</body>


</html>