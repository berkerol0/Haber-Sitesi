<?php include"header.php" ?>
    
    <!-- Page Banner Section Start -->
    <div class="page-banner-section section mt-30 mb-30">
        <div class="container">
            <div class="row row-1">
               
                <!-- Page Banner Start -->
                <div class="col-12">
                    <div class="page-banner" style="background-image: url(img/bg/page-banner-fashion.jpg)">
                        <h2>İletişim</h2>
                        <ol class="page-breadcrumb">
                            <li><a href="index.php">Ana Sayfa</a></li>
                            <li class="active">İletişim</li>
                        </ol>
                    </div>
                </div><!-- Page Banner End -->
                
            </div>
        </div>
    </div><!-- Page Banner Section End -->
    
    <!-- Post Section Start -->
    <div class="post-section section">
        <div class="container">
            
            <!-- Feature Post Row Start -->
            <div class="row">
                
                <div class="col-lg-8 col-12 mb-50">
                    
                    <!-- Post Block Wrapper Start -->
                    <div class="post-block-wrapper">
                        
                        <!-- Post Block Head Start -->
                        <div class="head">
                            
                            <!-- Title -->
                            <h4 class="title">İletişim bilgileri.</h4>
                            
                        </div><!-- Post Block Head End -->
                        
                        <!-- Post Block Body Start -->
                        <div class="body">
                            
                            <div class="contact-info row">
                                
                                <div class="single-contact text-center col-md-4">
                                    <i class="fa fa-home"></i>
                                    <p>Ankara Haber (Eski Başbakanlık Binası A Blok Kat 2) Bakanlıklar Kızılay Çankaya/ANKARA</p>
                                </div>
                                
                                <div class="single-contact text-center col-md-4">
                                    <i class="fa fa-envelope-open"></i>
                                    <p>ankarahaber@gmail.com <br>ankarahaber06@gmail.com</p>
                                </div>
                                
                                <div class="single-contact text-center col-md-4">
                                    <i class="fa fa-headphones"></i>
                                    <p>(+312 256 24857) <br>(+312 256 24857)</p>
                                </div>
                            </div>
                            
                        </div><!-- Post Block Body End -->
                        

                        <div class="body">

                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3059.920200314361!2d32.85187131524175!3d39.92080197942578!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d34faaa19d2169%3A0xeac7b6b57c5a111a!2zS8SxesSxbGF5!5e0!3m2!1str!2str!4v1622656840977!5m2!1str!2str" width="750" height="550" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                            <p class="form-messege"></p>
                            
                        </div><!-- Post Block Body End -->
                        
                        <!-- Post Block Head Start -->
                        <div class="head">

                            <!-- Title -->


                        </div><!-- Post Block Head End -->

                        <!-- Post Block Body Start -->
                        <div class="body">

                            <div class="contact-map-wrap">

                            </div>
                            
                        </div><!-- Post Block Body End -->
                        
                    </div><!-- Post Block Wrapper End -->
                    
                </div>
                
                <!-- Sidebar Start -->
                <div class="col-lg-4 col-12 mb-50">
                    <div class="row">
                       
                        <!-- Single Sidebar -->
                        <div class="single-sidebar col-lg-12 col-md-6 col-12">

                            <!-- Sidebar Block Wrapper -->
                            <div class="sidebar-block-wrapper">

                                <!-- Sidebar Block Head Start -->
                                <div class="head feature-head">

                                    <!-- Title -->
                                    <h4 class="title">Bizi Takip Edin</h4>

                                </div><!-- Sidebar Block Head End -->

                                <!-- Sidebar Block Body Start -->
                                <div class="body">
                                    <?php $sosyalmedyasor = $db->prepare("SELECT * FROM sosyalmedya");
                                    $sosyalmedyasor->execute();
                                    while ($sosyalmedya = $sosyalmedyasor->fetch(PDO::FETCH_ASSOC))
                                    { ?>
                                        <div class="sidebar-social-follow">
                                            <div>
                                                <a href="<?php echo $sosyalmedya['sosyalmedya_facebook']; ?>" target="_blank" class="facebook">
                                                    <i class="fa fa-facebook"></i>
                                                    <span>Facebook</span>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="<?php echo $sosyalmedya['sosyalmedya_twitter']; ?>" target="_blank" class="twitter">
                                                    <i class="fa fa-twitter"></i>
                                                    <span>Twitter</span>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="<?php echo $sosyalmedya['sosyalmedya_youtube']; ?>" target="_blank" class="google-plus">
                                                    <i class="fa fa-youtube"></i>
                                                    <span>Youtube</span>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="<?php echo $sosyalmedya['sosyalmedya_instagram']; ?>" target="_blank" class="dribbble">
                                                    <i class="fa fa-instagram"></i>
                                                    <span>Instagram</span>
                                                </a>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div><!-- Sidebar Block Body End -->

                            </div>

                        </div>

                        <!-- Single Sidebar -->


                        <!-- Single Sidebar -->


                    </div>
                </div><!-- Sidebar End -->
                
            </div><!-- Feature Post Row End -->
            
        </div>
    </div><!-- Post Section End -->
    

    
    <?php include"footer.php" ?>