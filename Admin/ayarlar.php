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
                <?php if (@$_GET['yuklenme']=="basarili") { 
                  
                  echo "(Yükleme İşleminiz Başarılı)";
                  
                }
               
                  elseif (@$_GET['yuklenme']=="basarisiz") {
                    echo "<h6 style='color:red'>(Yükleme İşleminiz Başarısız)</h6>";
                }
                ?>

              </div>
            
              
              <!-- /.card-header -->
              <!-- form start -->
              <form action="islem/islem.php" method="POST"  enctype="multipart/form-data">
               
                <div class="card-body">
                <input type="hidden" name="eskilogo" value="<?php echo $ayarCek['logo']?>">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Site Başlığı</label>
                    <input name="baslik" type="text" class="form-control"  placeholder="Site Başlığını Giriniz" value= "<?php  echo $ayarCek['baslik'] ?>" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Açıklama</label>
                    <input name="aciklama" type="text" class="form-control"  placeholder="Sitenizin Açıklamasını Giriniz"  value= "<?php  echo $ayarCek['aciklama'] ?>" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Anahtar Kelime</label>
                    <input name="anahtarkelime" type="text" class="form-control"  placeholder="Siteniz İçin Anahtar Kelime Seçiniz" value= "<?php  echo $ayarCek['anahtarkelime'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Sayfa Logosu</label><br/>
                    <img style="width: 25%;" src="resimler/logo/<?php echo $ayarCek['logo'] ?>">
                    
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Logo</label>
                    <input value="<?php $ayarCek['logo'] ?>" name="logo" type="file" class="form-control">
                  </div>  
                </div>
                                    
                 
                <!-- /.card-body -->

                <div class="card-footer">
                  <button name="ayarkaydet" type="submit" class="btn btn-primary">Gönder</button>
                  
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