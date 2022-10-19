<?php require_once 'header.php' ?>
<?php require_once 'sidebar.php' ?>



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
                <h3 class="card-title">İletişim Ayarları</h3>
              </div>
              <div>
                <?php if (@$_GET['yuklenme']== "basarili") { 
                  
                  echo "<h6 style='color:green' >(Yükleme İşleminiz Başarılı)</h6>";
                  
                }
               
                  elseif (@$_GET['yuklenme']== "basarisiz") {
                    echo "<h6 style='color:red' >(Yükleme İşleminiz Başarısız)</h6>";
                }
                ?>

              </div>
              
              
              <!-- /.card-header -->
              <!-- form start -->
              <form action="islem/islem.php" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Telefon</label>
                    <input name="telefon" type="text" class="form-control"  placeholder="Sitenizin Telefon Numarasını Giriniz" value= "<?php  echo $ayarCek['telefon'] ?>" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">E-Mail</label>
                    <input name="email" type="email" class="form-control"  placeholder="Sitenizin E-Mail Adresini Giriniz"  value= "<?php  echo $ayarCek['email'] ?>" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Adres</label>
                    <input name="adres" type="text" class="form-control"  placeholder="Sitenizin Adresini Giriniz" value= "<?php  echo $ayarCek['adres'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Mesai</label>
                    <input name="mesai" type="text" class="form-control"  placeholder="Sitenizin Mesai Saatlerini Giriniz" value= "<?php  echo $ayarCek['mesai'] ?>">
                  </div>   
                  </div>
                                    
                 
                <!-- /.card-body -->

                <div class="card-footer">
                  <button name="iletisimkaydet" type="submit" class="btn btn-primary">Gönder</button>
                  
                </div>
              </form>
            </div>
            <!-- /.card <--></-->
    
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php require_once 'footer.php' ?>