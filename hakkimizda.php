<?php

    require_once 'header.php';

?>
          
            <!-- about wrapper start -->
            <div class="about-us-wrapper pt-60 pb-40">
                <div class="container">
                    <div class="row">
                        <!-- About Text Start -->
                        <div class="col-lg-6 order-last order-lg-first">
                            <div class="about-text-wrap">
                                <h2><span>En İyisini Sağlayın</span><?php echo $hakkimizdaCek['hakkimizda_baslik'] ?></h2>
                                <p><?php echo $hakkimizdaCek['hakkimizda_detay'] ?></p>
                                <h4 >Şirket Misyonumuz</h4>
                                <p><?php echo $hakkimizdaCek['hakkimizda_misyon'] ?></p>
                                <h4 >Şirket Vizyonumuz</h4>
                                <p><?php echo $hakkimizdaCek['hakkimizda_vizyon'] ?></p>                                

                            </div>
                        </div>
                        <!-- About Text End -->
                        <!-- About Image Start -->
                        <div class="col-lg-5 col-md-10">
                            <div class="about-image-wrap">
                                <img class="img-full" src="Admin/resimler/resim/<?php echo $hakkimizdaCek['hakkimizda_resim'] ?>" alt="About Us" />
                            </div>
                        </div>
                        <!-- About Image End -->
                    </div>
                </div>
            </div>
           
            <!-- about wrapper end -->
           
           
           
                        
<?php 
    require_once 'footer.php';
?>