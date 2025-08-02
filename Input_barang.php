<link rel="stylesheet" href="assets/css/ibarang.css">
<?php

session_start();
  if (empty($_SESSION['username']))
  {
  header("location:index.php");
  }

  include "config/koneksi.php";
  ?>
  <html>
    <head>
        <title> :: Menu Utama ::</title>
        <link rel="stylesheet" href="assets/css/ibarang.css">
    </head>

    <body>
        <center>
            <script
  src="https://unpkg.com/@lottiefiles/dotlottie-wc@0.6.2/dist/dotlottie-wc.js"
  type="module"
></script>

<dotlottie-wc
  src="https://lottie.host/ba8b8eac-2b5b-491f-8639-2098a7ce8068/r67tTEp3ad.lottie"
  style="width: 300px;height: 300px"
  speed="1"
  autoplay
  loop
></dotlottie-wc>

        </center>
        <?php
        $Lokasi_file = $_FILES['fupload']['tmp_name'];
        $nama_file = $_FILES['fupload']['name'];

        if(!empty($Lokasi_file)){
          move_uploaded_file($lokasi_file, "gambar/$nama_file");
          $a= mysqli_query($konek, "INSERT INTO `table barang`(namabarang,
                                             kategori,
                                             jumlah,
                                             harga,
                                             gambar)
                                  VALUES('$_POST[barang]',
                                         '$_POST[kategori]',
                                         '$_POST[jumlah]',
                                         '$_POST[harga]',
                                         '$nama_file')");
    ?>
    <script>
      alert('data berhasil di simpan');
      window.location="form_barang.php";
    </script>
    <?php                                     
        }

      else{
   ?>

   <h1 align=center>Maaf, Data yang anda masukan tidak lengkap,<br>
   Silahkan Kembali.</h1>
   <br><br>
   <center>
    <table>
      <form method=POST action=form_barang.php>
        <button>Kembali</button>
      </form>
      <form method=POST action=logout.php>
        <button>LogOut</button>
      </form>
    </table>
   </center>

   <?php
      }
      ?>
    </body>
  </html>