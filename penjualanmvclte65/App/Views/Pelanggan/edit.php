<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Pelanggan</title>
    
</head>

<body>

    <div class="content-wrapper">
        <h1>Edit Pelanggan</h1>
        <form action="index.php?controller=pelanggan&action=update" method="POST">
            <label for="id_pelanggan">ID Pelanggan:</label>
            <input type="text" name="id_pelanggan" value="<?= htmlspecialchars($pelanggan['id_pelanggan']) ?>" required>

            <label for="nama_pelanggan">Nama Pelanggan:</label>
            <input type="text" name="nama_pelanggan" value="<?= htmlspecialchars($pelanggan['nama_pelanggan']) ?>" required>

            <label for="alamat">Alamat:</label>
            <input type="text" name="alamat" value="<?= htmlspecialchars($pelanggan['alamat']) ?>" required>

            <button type="submit">Update</button>
        </form>
    </div>

</body>

</html>