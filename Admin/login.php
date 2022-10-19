

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Lüks Ayakkabı Mağazası</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Lüks Ayakkabı Mağazası</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">

        
    <?php

    if (@$_GET['durum']=="hata") {  ?>

      <p style="color:success" class="login-box-msg">Kullanıcı Adı Ve Şifre Hatalı</p>



    <?php
    } 
    if (@$_GET['durum']=="gulegule") {  ?>

      <p style="color:black;" class="login-box-msg">Görüşmek Üzere</p>



    <?php
    } 
    
    
    else { ?> 

      <p class="login-box-msg" style="color:#218838"> Lütfen Giriş Bilgilerinizi Giriniz</p> <?php
      
    }
        


    ?>

      </p>

      <form action="islem/islem.php" method="POST">
        <div class="input-group mb-3">
          <input type="text" class="form-control"  placeholder="Lütfen Email Adresini Giriniz" name="kadi">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control"  placeholder="Lütfen Şifrenizi Giriniz" name="sifre">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-success">
              <input type="checkbox" id="remember">
              <label for="remember">
                Beni Hatırla
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button  type="submit" name="girisyap" class="btn btn-success btn-block">Giriş</button>
          </div>
          <!-- /.col -->
        </div>
      </form>


    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->


</body>
</html>
