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

            
              
             
              <form action="islem/islem.php" method="POST"  enctype="multipart/form-data">
              
                <div class="card-body">
                
                  <div class="form-group">
                    <label >Kategori Adı</label>
                    <input name="kategori_adi" type="text" class="form-control"  placeholder="Kategori Adı Giriniz"  >
                  </div>
                  
                  <div class="form-group">
                    <label >Kategori Sırası</label>
                    <input name="kategori_sira" type="text" class="form-control"  placeholder="Kategori Sırasını Giriniz">
                  </div>
                 
                    <!-- /.card-header -->
                    <div class="form-group">
                        <label>Kategori Durumunu Seçiniz</label>
                        <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                            
                            <select name="kategori_durum" class="form-control select2" style="width: 100%;">

                                <option selected="selected">Yayınlayın</option>
                                <option>Yayınlamayın</option>
                            
                            </select>
                            </div>
                        </div>
                        </div>
                        </div>
                    </div>                
                    </div>

                <div class="card-footer">
                  <button name="kategori_kaydet" type="submit" class="btn btn-primary">Gönder</button>
                  
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