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
                
                  <div class="form-group">
                    <label for="exampleInputEmail1">Hakkımızda Başlık</label>
                    <input name="baslik" type="text" class="form-control"  placeholder="Hakkımızda Başlığını Giriniz" value= "<?php  echo $hakkimizdaCek['hakkimizda_baslik'] ?>" >
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Misyon</label>
                    <input name="misyon" type="text" class="form-control"  placeholder="Misyon Seçiniz" value= "<?php  echo $hakkimizdaCek['hakkimizda_misyon'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Vizyon</label>
                    <input name="vizyon" type="text" class="form-control"  placeholder="Vizyon  Seçiniz" value= "<?php  echo $hakkimizdaCek['hakkimizda_vizyon'] ?>">
                  </div>
                  
                  <div class="form-group">
                    <label>Resim</label><br/>

                    <img style="width: 25%;" src="resimler/resim/<?php echo $hakkimizdaCek['hakkimizda_resim'] ?>">
                    
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Resim</label>
                    <input value="<?php $hakkimizdaCek['hakkimizda_resim'] ?>" name="resim" type="file" class="form-control">
                    <input type="hidden" name="eskiresim" value="<?php echo $hakkimizdaCek['hakkimizda_resim']?>">
                    
                  </div>
                  <div class="form-group">
                    <label>Hakkımızda Detay</label>
                    <textarea class="ckeditor" id="editor1"><?php  echo $hakkimizdaCek['hakkimizda_detay'] ?></textarea>
                  </div>  
                </div>
                                    
                 
                <!-- /.card-body -->

                <div class="card-footer">
                  <button name="hakkimizda_kaydet" type="submit" class="btn btn-primary">Gönder</button>
                  
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