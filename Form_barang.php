<?php

session_start();
    if (empty($_SESSION['username']))
    {
        header("location:index.php");
    }

    ?>
    <html>
        <head>
            <title>:: Barang ::</title>
            <link rel="stylesheet" href="assets/css/fbarang.css">
</head>
<body bgcolor="#fff">
    <center>
        <h2 align="center">INPUT DATA BARANG</h2>
        <?php
            echo"<h5>Login Sebagai : </h5>";
            echo $_SESSION['username']
?>
<script
  src="https://unpkg.com/@lottiefiles/dotlottie-wc@0.6.2/dist/dotlottie-wc.js"
  type="module"
></script>

<dotlottie-wc
  src="https://lottie.host/ba8b8eac-2b5b-491f-8639-2098a7ce8068/r67tTEp3ad.lottie"
  style="width: 200px;height: 200px"
  speed="1"
  autoplay
  loop
></dotlottie-wc>
</center>
<center>
    <div class="glass">
        <form method="POST" action="input_barang.php" enctype="multipart/form-data">
            <table>
                <tr>
                    <td valign=top>Nama Barang</td>
                    <td> : <input type="text" name="barang" size="30"></td>
</tr>
 <tr>
                    <td valign=top>Kategori</td>
                    <td> : 
                      <select name="kategori">
                        <option value="0" selected>-Pilih Kategori -</option>
                        <?php
                        include "config/koneksi.php";
                        $tampil=mysqli_query($konek, "SELECT * FROM `tabel kategori` ORDER BY
                        nama_kategori");
                        while($r=mysqli_fetch_array($tampil)){
echo "<option value=$r[nama_kategori]>$r[nama_kategori]</option>";
                        }
                        ?>
 </select></td></tr>

 <tr>
    <td> Jumlah </td><td> : <input type="text" name="jumlah" size="15"></td>
                    </tr>

                    <tr>
                    <td> Harga </td><td> : <input type="text" name="harga" size="15"></td>
                    </tr>
                    <tr>
    <td> Gambar </td> <td> : <input type=file name=fupload size=40></td>
                    </tr>
                    <tr>
<td colspan="2" style="text-align:center;"><input id="simpan" type="submit" name="submit"
value=Simpan></td>
                    </tr>
                    </table>
                    </form>
                    <br>
                    <table>
                        <form method="POST" action="menu.php">
                            <button>Menu Utama</button>
                    </form>

                    <form method="POST" action="tampil_barang.php">
                        <button>Tampil Barang</button>
                    </form>
                    </table>
                    <br>
                    </div>
                    </center>
                    </body>
                    </html>


