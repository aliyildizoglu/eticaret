<?php require_once 'header.php' ?>
<?php require_once 'sidebar.php'?>




  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
                    <!-- general form elements -->
            <div class="card card-primary col-md-12">
              <div class="card-header">
                <h3 class="card-title">Genel Ayarlar</h3>
              </div>
              <div>
              <?php

if (@$_GET['yuklenme']=="basarili") {  ?>

  <h6 style="color:success">(Yükleme İşleminiz Başarılı)</h6>



<?php

} 

elseif(@$_GET['yuklenme']=="basarisiz") { ?> 

  <h6  style="color:red">(Yükleme İşleminiz Başarısız) </h6> <?php
  
}
elseif (@$_GET['yuklenme']=="kullanicivar") 
{ ?>

<h6 style="color:red">(Kullanıcı Kayıtlı)</h6>

<?php
}
?>


              </div>
            
              
              <!-- /.card-header -->
              <!-- form start -->
              <form action="islem/islem.php" method="POST"  enctype="multipart/form-data">
              
                <div class="card-body">
                
                  <div class="form-group">
                    <label >Kullanıcı Adı</label>
                    <input name="kadi" type="text" class="form-control"  placeholder="Kullanıcı Adı Giriniz"  >
                  </div>
                  
                  <div class="form-group">
                    <label >Kullanıcı Şifreniz</label>
                    <input name="sifre" type="text" class="form-control"  placeholder="Kullanıcı Şifrenizi Giriniz">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Kullanıcı Ad Soyad</label>
                    <input name="adsoyad" type="text" class="form-control"  placeholder="Adınızı Ve Soyadınızı Giriniz" >
                  </div>
                  
                 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Resim</label>
                    <input  name="resim" type="file" class="form-control">
                   
                    
                  </div>
               
                </div>
                                    
                 
                <!-- /.card-body -->

                <div class="card-footer">
                  <button name="uyeler_kaydet" type="submit" class="btn btn-primary">Gönder</button>
                  
                </div>
              </form>
            </div>


            <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <!-- /.row -->
      
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php require_once 'footer.php' ?>