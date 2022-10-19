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
                    <label >Kategori Adı</label>
                    <input name="kategori_adi" type="text" class="form-control"  placeholder="Kullanıcı Adı Giriniz"  >
                  </div>
                  
                  <div class="form-group">
                    <label >Kategori Sıra</label>
                    <input name="kategori_sira" type="text" class="form-control"  placeholder="Kullanıcı Şifrenizi Giriniz">
                  </div>





                </div>
                   <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Kategori Durum</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Minimal</label>
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">Alabama</option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                  </select>
                </div>
                
              </div>
              <!-- /.col -->
              
            </div>
            <!-- /.row -->

         
            <!-- /.row -->
          </div>
         
        </div>
        <!-- /.card -->
                  
                 
               
                </div>
                                    
                 
                <!-- /.card-body -->

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