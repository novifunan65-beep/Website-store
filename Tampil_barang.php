<?php
//-------------------------------//
session_start();
    if (empty($_SESSION['username']))
    {
        header("location:index.php");
    }
//-------------------------------//
require 'config/koneksi.php';
$barang = query("SELECT * FROM `table barang`");

// kolom pencarian terisi
if ( isset($_POST['cari']) ) {
    $barang = cari($_POST["keyword"]);
}
?>

<html>
<head>
<title>Inventory Gudang</title>
<link rel="stylesheet" href="assets/css/tbarang.css">
<!-- datatable style -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
</head>

<body>
    <h2 align=center>DAFTAR BARANG</h2>
    <center>
        <table>
            <form method=POST action=form_barang.php>
                <button>Tambah Barang</button>
            </form>
            <form method=POST action=menu.php>
                <button>Menu Utama</button>
            </form>
            <form method=POST action=logout.php>
                <button>LogOut</button>
            </form>
        </table>
    <br>
<form action="" method="post">
    <input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian.." autocomplete="off" id="keyword">
</form>

<div id="container">
    <table class="styled-table" border=0>
        <tr class="judul">
            <th>No</th>
            <th>Nama Barang</th>
            <th>Kategori</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Gambar</th>
            <th>Action</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach($barang as $row) { ?>
        <tr class="isi">
            <td align=center><?= $i; ?></td>
            <td align=left><?= $row["namabarang"] ?></td>
            <td align=left><?= $row["kategori"] ?></td>
            <td align=center><?= $row["jumlah"] ?></td>
            <td align=left>Rp. <?= $row["harga"] ?></td>
            <td align=center><img src=gambar/<?= $row["gambar"]; ?> width="70" height="70"></td>
            <td align=center>
                <a style="text-decoration: none" href="edit_barang.php?id=<?= $row['idbarang']; ?>">Edit</a>
                <br><br>
                <a style="text-decoration: none" href="hapus_barang.php?id=<?= $row['idbarang']; ?>
                " onclick="return confirm('yakin ingin menghapus data ini ?')">Hapus</a>
            </td>
        </tr>
        <?php $i++; } ?>
    </table>
</div>

</center>
<script src="assets/js/cari.js"></script>
</body>
</html>

