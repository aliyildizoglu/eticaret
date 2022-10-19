<?php include 'header.php';

require_once 'sidebar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  
    <section class="content">
    
      <div class="container-fluid">
      
        <div class="row">
        <h3 class="card-title" style="color:black;">Üyeler Tablosu</h3>



 <!-- /.card-header -->
          <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                <a href="uyeler-ekle.php"><button style="float:right" type="submit" class="btn btn-success">Yeni Kullanıcı Ekle</button></a> 
                 
                  <thead>
                 
                    <tr>
                    
                      <th>Kullanıcı Numara</th>
                      <th>Kullanıcı Adı</th>
                      <th>Katıldığı Tarih</th>
                      <th>Yetki</th>
                      <th>Ad Soyad</th>
                      <th>Adres</th>
                      <th>İl</th>
                      <th>İlçe</th>
                      <th>Telefon</th>
                      <th>Düzenle</th>
                      <th>Sil</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                  
                    <?php 
                                            
                        $kullanici = $baglanti->prepare("SELECT * FROM   kullanici  order by kullanici_id ASC");
                        $kullanici->execute();
                       while ( $kullaniciCek = $kullanici->fetch(PDO::FETCH_ASSOC)) {
                        
                       
                    
                    ?>
                    <tr>
                      <td><?php echo $kullaniciCek['kullanici_id'] ?></td>
                      <td><?php echo $kullaniciCek['kullanici_adi'] ?></td>
                      <td><?php echo $kullaniciCek['kullanici_zaman'] ?></td>
                      <td><?php echo $kullaniciCek['kullanici_adres'] ?></td>
                      <td><?php echo $kullaniciCek['kullanici_adsoyad'] ?></td>
                      <td><?php echo $kullaniciCek['kullanici_il'] ?></td>
                      <td><?php echo $kullaniciCek['kullanici_ilce'] ?></td>
                      <td><?php echo $kullaniciCek['kullanici_telefon'] ?></td>
                      
                      <td><span class="tag tag-success">

                      <?php 
                      
                      if ($kullaniciCek['kullanici_yetki']=="2") {
                        echo "Admin Kullanıcısı";
                      }
                      elseif ($kullaniciCek['kullanici_yetki']=="1") {
                        echo "Normal Kullanıcı";
                      }
                      
                      ?>




                      </span></td>
                      <td><a href="uyeler-duzenle?id=<?php echo $kullaniciCek['kullanici_id'] ?>"><button  type="submit" class="btn btn-info">Düzenle</button></a></td>
                      <td><a href="islem/islem.php?kullanicisil&id=<?php echo $kullaniciCek['kullanici_id'] ?>" ><button  type="submit" class="btn btn-danger">Sil</button></a></td>
                    </tr>
                    <?php }
                    ?>
                    
                   
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->









          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php require_once 'footer.php'; ?>