<?php include 'header.php';

require_once 'sidebar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  
    <section class="content">
    
      <div class="container-fluid">
      
        <div class="row">
        <h3 class="card-title" style="color:black;">Kategori Tablosu</h3>


      



 <!-- /.card-header -->
          <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                <a href="kategori-ekle.php"><button style="float:right" type="submit" class="btn btn-success">Yeni Kategori Ekle</button></a> 
                 
                  <thead>
                 
                    <tr>
                    
                      <th>Kategori Numara</th>
                      <th>Kategori Adı</th>
                      <th>Kategori Sıra</th>
                      <th>Kategori Durum</th>
                      <th>Düzenle</th>
                      <th>Sil</th>
                 
                    </tr>
                  </thead>
                  
                  <tbody>
                  
                    <?php 
                                            
                        $kategori = $baglanti->prepare("SELECT * FROM   kategori  order by kategori_id ASC");
                        $kategori->execute();
                       while ( $kategoriCek = $kategori->fetch(PDO::FETCH_ASSOC)) {
                        
                       
                    
                    ?>
                    <tr>
                      <td><?php echo $kategoriCek['kategori_id'] ?></td>
                      <td><?php echo $kategoriCek['kategori_adi'] ?></td>
                      <td><?php echo $kategoriCek['kategori_sira'] ?></td>
                     
                    
                      
                      <td><span class="tag tag-success">

                      <?php 
                      
                      if ($kategoriCek['kategori_durum']=="1") { ?>
                        <p style="color:#218838 ;"><?php echo "Kategori Yayınlanıyor" ?></p> <?php 
                      }
                      elseif ($kategoriCek['kategori_durum']=="2") { ?>

                       <p style="color:red ;"><?php echo "Kategori Yayınlanıyor" ?></p>
                       <?php
                      }
                      
                      ?>




                      </span></td>
                      <td><a href="kategori-duzenle?id=<?php echo $kategoriCek['kategori_id'] ?>" ><button  type="submit" class="btn btn-info">Düzenle</button></a></td>
                      <td><a href="islem/islem.php?kategorisil&id=<?php echo $kategoriCek['kategori_id'] ?>" ><button  type="submit" class="btn btn-danger">Sil</button></a></td>
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