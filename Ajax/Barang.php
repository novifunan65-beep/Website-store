<?php
require '../config/koneksi.php';

$keyword = $_GET["keyword"];

// Query pencarian data berdasarkan keyword
$sql = "SELECT * FROM `table barang`
        WHERE
            namabarang LIKE '%$keyword%' OR
            kategori LIKE '%$keyword%' OR
            jumlah LIKE '%$keyword%' OR
            harga LIKE '%$keyword%'";

$barang = query($sql);
?>
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

<?php if (empty($barang)) : ?>
    <tr>
        <td colspan="8" align="center">
            <br><br><b style="font-size:20px">Data Tidak Ditemukan</b><br><br><br></td>
    </tr>
<?php endif; ?>

<?php $i = 1; foreach($barang as $row): ?>
<tr class="isi">
    <td align="center"><?= $i; ?></td>
    <td align="left"><?= htmlspecialchars($row["namabarang"]); ?></td>
    <td align="left"><?= htmlspecialchars($row["kategori"]); ?></td>
    <td align="center"><?= htmlspecialchars($row["jumlah"]); ?></td>
    <td align="left">Rp. <?= htmlspecialchars($row["harga"]); ?></td>
    <td align="center"><img src="gambar/<?= htmlspecialchars($row["gambar"]); ?>" width="70" height="70"></td>
    <td align="center">
        <a style="text-decoration: none" href="edit_barang.php?id=<?= $row['idbarang']; ?>">Edit</a>
        <br><br>
        <a style="text-decoration: none" href="hapus_barang.php?id=<?= $row['idbarang']; ?>" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
    </td>
</tr>
<?php $i++; endforeach; ?>
</table>