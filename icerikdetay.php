<?php include"header.php";
$icerik_id = $_GET['icerik'];
?>

    <!-- Post Header Section Start -->
    <div class="post-header-section section mt-30 mb-30">
        <div class="container">
            <div class="row row-1">
               
                <!-- Page Banner Start -->
                <div class="col-12">
                    <div class="post-header" style="background-image: url(img/bg/page-banner-fashion.jpg)">

            <?php
            $iceriksor = $db->prepare("SELECT * FROM `icerik` WHERE icerik_id='$icerik_id'");
            $iceriksor->execute();
            while($icerik = $iceriksor->fetch(PDO::FETCH_ASSOC))

            {?>
                        <!-- Title -->

                        <h3 class="title"><?php echo $icerik['icerik_baslik']; ?></h3>
                        
                        <!-- Meta -->
                        <div class="meta fix">
                            <!--<a href="#" class="meta-item category fashion">Moda</a> -->
                            <a href="#" class="meta-item author"></i><?php echo $icerik['icerik_yazar']; ?></a>
                            <span class="meta-item date"><i class="fa fa-clock-o"></i><?php echo $icerik['icerik_tarih']; ?></span>
                        </div>
                        
                    </div>
                </div><!-- Post Header Section End -->

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
                    <div class="post-block-wrapper mb-50">
                        
                        <!-- Post Block Body Start -->
                        <div class="body">
                            <div class="row">

                                <div class="col-12">
                                   
                                    <!-- Single Post Start -->
                                    <div class="single-post">
                                        <div class="post-wrap">

                                            <!-- Content -->
                                            <div class="content">

                                                <!-- Description -->
                <img src="<?php echo $icerik['icerik_resim'];  ?>" alt="post">
                                                <p class="dropcap"> <?php echo $icerik['icerik_icerik']; ?></p>
                                                <!--  <blockquote class="blockquote blockquote-bg" style="background-image: url(img/bg/blockquote-bg.jpg)">
                                                   <p>Bir okuyucunun, düzenine bakarken bir sayfanın okunabilir içeriğinden dikkatinin dağılacağı uzun zamandır bilinen bir gerçektir.</p>
                                                </blockquote> -->

                                            </div>

                                            <div class="tags-social float-left">

                                                <div class="tags float-left">
                                                    <i class="fa fa-tags"></i>
                                                    <a><?php echo $icerik['icerik_etiket']; ?> </a>

                                                </div>
                                                <?php } ?>

                                            </div>

                                        </div>
                                    </div><!-- Single Post End -->
                                    
                                </div>
                                
                            </div>
                        </div><!-- Post Block Body End -->
                        
                    </div><!-- Post Block Wrapper End -->
                                    

                        

                    
                    <!-- Post Block Wrapper Start -->
                    <div class="post-block-wrapper mb-50">
                        
                        <!-- Post Block Head Start -->
                        <div class="head">
                            
                            <!-- Title -->
                            <h4 class="title">Bunları da sevebilirsiniz!</h4>
                            
                        </div><!-- Post Block Head End -->
                        
                        <!-- Post Block Body Start -->
                        <div class="body">
                            
                            <div class="two-column-post-carousel column-post-carousel post-block-carousel row">
                                
                                <div class="col-md-6 col-12">

                                    <!-- Overlay Post Start -->
                                    <div class="post post-overlay hero-post">
                                        <div class="post-wrap">
                                            <?php
                                            $iceriksor = $db->prepare("SELECT * FROM `icerik` WHERE kategori_id=2 ORDER BY icerik_id DESC LIMIT 1");
                                             $iceriksor->execute();
                                            while($icerik = $iceriksor->fetch(PDO::FETCH_ASSOC))
                                            {?>
                                            <!-- Image -->
                                            <div class="image"><img src="<?php echo $icerik['icerik_resim'];  ?>" width=”319″ height=”279″ alt=” resim boyutu ayarlama."></div>
                                            <?php $menusor = $db->prepare("SELECT * FROM kategori WHERE kategori_id=2");
                                            $menusor->execute();
                                            $menu = $menusor->fetch(PDO::FETCH_ASSOC);
                                            ?>
                                            <!-- Category -->
                                            <a href="#" class="category gadgets"><?php echo $menu['kategori_isim']; ?> Haberleri</a>

                                            <!-- Content -->
                                            <div class="content">

                                                <!-- Title -->
                                                <h4 class="title"><a href="icerikdetay.php?icerik=<?php echo $icerik['icerik_id'] ?>"><?php echo $icerik['icerik_baslik'] ?></a></h4>

                                                <!-- Meta -->
                                                <div class="meta fix">
                                                    <span class="meta-item date"><i class="fa fa-clock-o"></i><?php echo $icerik['icerik_tarih'] ?></span>
                                                </div>

                                            </div>
                                            <?php } ?>
                                        </div>
                                    </div><!-- Overlay Post End -->

                                </div>


                                <div class="col-md-6 col-12">

                                    <!-- Overlay Post Start -->
                                    <div class="post post-overlay hero-post">
                                        <div class="post-wrap">
                                            <?php
                                            $iceriksor = $db->prepare("SELECT * FROM `icerik` WHERE kategori_id=3 ORDER BY icerik_id DESC LIMIT 1");
                                            $iceriksor->execute();
                                            while($icerik = $iceriksor->fetch(PDO::FETCH_ASSOC))
                                            {?>
                                                <!-- Image -->
                                                <div class="image"><img src="<?php echo $icerik['icerik_resim'];  ?>" width=”319″ height=”279″ alt=” resim boyutu ayarlama."></div>
                                                <?php $menusor = $db->prepare("SELECT * FROM kategori WHERE kategori_id=3");
                                                $menusor->execute();
                                                $menu = $menusor->fetch(PDO::FETCH_ASSOC);
                                                ?>
                                                <!-- Category -->
                                                <a href="#" class="category gadgets"><?php echo $menu['kategori_isim']; ?> Haberleri</a>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Title -->
                                                    <h4 class="title"><a href="icerikdetay.php?icerik=<?php echo $icerik['icerik_id'] ?>"><?php echo $icerik['icerik_baslik'] ?></a></h4>

                                                    <!-- Meta -->
                                                    <div class="meta fix">
                                                        <span class="meta-item date"><i class="fa fa-clock-o"></i><?php echo $icerik['icerik_tarih'] ?></span>
                                                    </div>

                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div><!-- Overlay Post End -->

                                </div>
                                <div class="col-md-6 col-12">

                                    <!-- Overlay Post Start -->
                                    <div class="post post-overlay hero-post">
                                        <div class="post-wrap">
                                            <?php
                                            $iceriksor = $db->prepare("SELECT * FROM `icerik` WHERE kategori_id=5 ORDER BY icerik_id DESC LIMIT 1");
                                            $iceriksor->execute();
                                            while($icerik = $iceriksor->fetch(PDO::FETCH_ASSOC))
                                            {?>
                                                <!-- Image -->
                                                <div class="image"><img src="<?php echo $icerik['icerik_resim'];  ?>" width=”319″ height=”279″ alt=” resim boyutu ayarlama."></div>
                                                <?php $menusor = $db->prepare("SELECT * FROM kategori WHERE kategori_id=5");
                                                $menusor->execute();
                                                $menu = $menusor->fetch(PDO::FETCH_ASSOC);
                                                ?>
                                                <!-- Category -->
                                                <a href="icerikdetay.php?icerik=<?php echo $icerik['icerik_id'] ?>" class="category gadgets"><?php echo $menu['kategori_isim']; ?> Haberleri</a>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Title -->
                                                    <h4 class="title"><a href="icerikdetay.php?icerik=<?php echo $icerik['icerik_id'] ?>"><?php echo $icerik['icerik_baslik'] ?></a></h4>

                                                    <!-- Meta -->
                                                    <div class="meta fix">
                                                        <span class="meta-item date"><i class="fa fa-clock-o"></i><?php echo $icerik['icerik_tarih'] ?></span>
                                                    </div>

                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div><!-- Overlay Post End -->

                                </div>

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
                        <div class="single-sidebar col-lg-12 col-md-6 col-12">

                            <!-- Sidebar Banner -->
                            <a href="#" class="sidebar-banner"><img src="img/banner/sidebar-banner-1.jpg" alt="Sidebar Banner"></a>

                        </div>

                        <!-- Single Sidebar -->
                        <div class="single-sidebar col-lg-12 col-md-6 col-12">

                            <!-- Sidebar Banner -->
                            <a href="#" class="sidebar-banner"><img src="img/banner/sidebar-banner-2.jpg" alt="Sidebar Banner"></a>

                        </div>

                        <!-- Single Sidebar
                        <div class="single-sidebar col-lg-12 col-md-6 col-12">

                            <div class="sidebar-subscribe">
                                <h4>Subscribe To <br>Our <span>Update</span> News</h4>
                                <p>Adipiscing elit. Fusce sed mauris arcu. Praesent ut augue imperdiet, semper lorem id.</p>
                                !-- Newsletter Form --
                                <form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="subscribe-form validate" target="_blank" novalidate>
                                    <div id="mc_embed_signup_scroll">
                                        <label for="mce-EMAIL" class="d-none">Subscribe to our mailing list</label>
                                        <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Your email address" required>
                                         real people should not fill this in and expect good things - do not remove this or risk form bot signups-->

                                    </div>
                                </form>
                            </div>

                        </div>
                        
                    </div>
                </div> <!--Sidebar End -->
                
            </div><!-- Feature Post Row End -->
            
        </div>
    </div><!-- Post Section End -->


<?php include"footer.php"; ?>