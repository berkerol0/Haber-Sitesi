<?php include"header.php";
$kategori_id = $_GET['kategori'];
?>
    <!-- Page Banner Section Start -->
    <div class="page-banner-section section mt-30 mb-30">
        <div class="container">
            <div class="row row-1">
        <?php $menusor = $db->prepare("SELECT * FROM kategori WHERE kategori_id='$kategori_id'");
        $menusor->execute();
        $menu = $menusor->fetch(PDO::FETCH_ASSOC);
        ?>
                <!-- Page Banner Start -->
                <div class="col-12">
                    <div class="page-banner" style="background-image: url(img/bg/page-banner-politic.jpg)">
                        <h2>Kategori: <span class="category-politic"><?php echo $menu['kategori_isim']; ?></span></h2>
                        <ol class="page-breadcrumb">
                            <li><a href="index.php">Ana sayfa</a></li>
                            <li class="active"><?php echo $menu['kategori_isim']; ?></li>
                        </ol>
                    </div>
                </div><!-- Page Banner End -->


            </div>
        </div>
    </div><!-- Page Banner Section End -->



    <!-- Post Section Start -->
    <div class="post-section section mt-50">
        <div class="container">
            
            <!-- Feature Post Row Start -->
            <div class="row">
                
                <div class="col-lg-8 col-12 mb-50">
                    
                    <!-- Post Block Wrapper Start -->
                    <div class="post-block-wrapper">
                        
                        <!-- Post Block Body Start -->
                        <div class="body">
                            <div class="row">
                                <?php

                                $sayfada = 3;   // Sayfada Gösterilecek İçerik Miktarını Belirliyoruz.

                                $sorgu = $db->prepare("SELECT * FROM icerik WHERE kategori_id='$kategori_id'");
                                $sorgu->execute();
                                $toplam_form = $sorgu->rowCount();

                                $toplam_sayfa = ceil($toplam_form / $sayfada);

                                // Eğer Sayfa Girilmemişse 1 Sayalım

                                $sayfa = isset($_GET['sayfa']) ? (int)$_GET['sayfa'] : 1;

                                // Eğer 1'den küçük bir sayfa sayısı girildiye 1 yapalım
                                if ($sayfa < 1) $sayfa = 1;

                                // Toplam sayfa sayımızdan fazla yapılırsa en son sayfayı varsayalım
                                if ($sayfa > $toplam_sayfa) $sayfa = $toplam_sayfa;

                                $limit = ($sayfa - 1) * $sayfada;


                                $iceriksor = $db->prepare("SELECT * FROM `icerik` WHERE kategori_id='$kategori_id' ORDER BY icerik_id DESC limit $limit, $sayfada");
                                $iceriksor->execute();
                                while ($icerik = $iceriksor->fetch(PDO::FETCH_ASSOC)) {


                                    /*$iceriksor = $db->prepare("SELECT * FROM `icerik` WHERE kategori_id='$kategori_id'");
                                    $iceriksor->execute();
                                    while($icerik = $iceriksor->fetch(PDO::FETCH_ASSOC))
                                    {*/?>
                                <!-- Post Start -->
                                <div class="post post-large politic-post post-separator-border col-12">
                                    <div class="post-wrap">

                                        <!-- Image -->
                                        <a class="image" href="icerikdetay.php?icerik=<?php echo $icerik['icerik_id'] ?>"><img src="<?php echo $icerik['icerik_resim'];  ?>" alt="post"></a>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Title -->
                                            <h4 class="title"><a href="icerikdetay.php?icerik=<?php echo $icerik['icerik_id'] ?>"><?php echo $icerik['icerik_baslik']; ?></a></h4>

                                            <!-- Meta -->
                                            <div class="meta fix">
                                                <a class="meta-item author"><i class="fa fa-user"></i><?php echo $icerik['icerik_yazar'];  ?></a>
                                                <span class="meta-item date"><i class="fa fa-clock-o"></i><?php echo $icerik['icerik_tarih'];  ?></span>
                                            </div>

                                            <!-- Description -->
                                            <p><?php echo substr($icerik['icerik_icerik'],0,250); ?>...</p>

                                            <!-- Read More -->
                                            <a href="icerikdetay.php?icerik=<?php echo $icerik['icerik_id'] ?>" class="read-more">Okumaya devam et</a>

                                        </div>

                                    </div>
                                </div><!-- Post End -->
                                    <?php } ?>
                                <div class="page-pagination text-center col-12">


                                    <ul>
                                        <?php

                                        $s=0;

                                        while ($s < $toplam_sayfa) { $s++ ?>

                                            <?php if ($s==$sayfa) { ?>

                                                <li class="active"><a href="haberdetay.php?kategori=<?php echo $kategori_id; ?>&sayfa=<?php echo $s; ?>"><?php echo $s; ?></a></li>

                                            <?php } else { ?>

                                                <li><a href="haberdetay.php?kategori=<?php echo $kategori_id; ?>&sayfa=<?php echo $s; ?>"><?php echo $s; ?></a></li>

                                            <?php } } ?>
                                    </ul>
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
                                    <h4 class="title">Bizi Takip Et</h4>

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


                </div><!-- Sidebar End -->
                
            </div><!-- Feature Post Row End -->
            
        </div>
    </div><!-- Post Section End -->
    


<?php include"footer.php"; ?>