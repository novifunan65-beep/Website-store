<?php
    if(isset($_GET['pesan'])){
        if($_GET['pesan'] == "gagal"){
            echo '<script type ="text/javascript">';
            echo 'alert("Silahkan Masukan username dan password dengan benar")';
            echo '</script>';
        }
    }
    ?>
    <html>
        <head>
        <link rel="stylesheet" href="assets/css/styles.css">
        

        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css'
         rel='stylesheet'>

         
       <script
  src="https://unpkg.com/@lottiefiles/dotlottie-wc@0.6.2/dist/dotlottie-wc.js"
  type="module"
></script>

<title>Login</title>
</head>
<body>
    <div class="1-form">
        <div class="shape1"></div>
        <div class="shape2"></div>
        <div class="form">
       <dotlottie-wc
  src="https://lottie.host/ac6fa31c-91ee-487b-afcc-cb46f9b9ffd6/UBVOfDbzwp.lottie"
  style="width: 500px;height: 500px"
  speed="1"
  autoplay
  loop
></dotlottie-wc>
<form id="login" method="post" name="login" action="login_proses.php" class="
form__content">
<h1 class="form__title">Welcome</h1>

<div class="form__div form__div-one">
    <div class="form__icon">
        <i class='bx bx-user-circle'></i>
        </div>

        <div class="form__div-input">
            <label for="" class="form__label">Username</label>
            <input name="username" type="text" class="form__input" id="username">
        </div>
        </div>

        <div class="form__div">
            <div class="form__icon">
                <i class='bx bx-lock'></i>
        </div>

        <div class="form__div-input">
            <label for="" class="form__label">Password</label>
            <input name="password" type="password" class="form__input" id="password">
        </div>
        </div>

        <br><br>
        <input name= "login" type="submit" class="form__button" id="login" value="
        Login">
        </form>
        </div>

        <script src="assets/js/main.js"></script>
        </body>
        </html>