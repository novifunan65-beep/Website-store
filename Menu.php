<?php

session_start();
    if (empty($_SESSION['username']))
    {
        header("location:index.php");
    }


?>
<html>
<head>
    <title>:: Menu Utama ::</title>
    <link rel="stylesheet" href="assets/css/menu.css">
</head>
<body>
    <center> 
       <p style="font-size: 60px; font-weight: bold;">MENU UTAMA</p>
       <h5>Login Sebagai: <?= $_SESSION['username']; ?></h5>

    <script src="https://unpkg.com/@lottiefiles/dotlottie-wc@0.6.2/dist/dotlottie-wc.js" type="module"></script>
<dotlottie-wc src="https://lottie.host/2585fde9-b69e-4899-8d40-ae89daf82f87/u0aR38ie52.lottie" style="width: 200px;height: 200px" speed="1" autoplay loop></dotlottie-wc>

    <form method=POST action=form_barang.php>
        <button>Tambah Barang</button>
    </form>
    
    <form method=POST action=tampil_barang.php>
        <button>Tampil Barang</button>
    </form>
    
    <form method=POST action=logout.php>
        <button>LogOut</button>
    </form>
</center>   
</body>
</html>