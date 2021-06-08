<?php
include "yonetim/inc/dbconnect.php";
date_default_timezone_set('Europe/Istanbul');
?>
<!doctype html>
<html class="no-js" lang="tr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AnkaraHaber</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

    <!-- CSS
	============================================ -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="css/plugins.css">
    <!-- ycp -->
    <link rel="stylesheet" href="css/ycp.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Modernizer JS -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>

<!-- Main Wrapper -->
<div id="main-wrapper">

    <!-- Header Top Start -->
    <div class="header-top section">
        <div class="container">
            <div class="row">

                <!-- Header Top Links Start -->
                <div class="header-top-links col-md-9 col-6">

                    <!-- Header Links -->
                    <ul class="header-links">
                        <?php $gunler = array(
                            'Pazartesi',
                            'Salı',
                            'Çarşamba',
                            'Perşembe',
                            'Cuma',
                            'Cumartesi',
                            'Pazar'
                        );

                        $aylar = array(
                            'Ocak',
                            'Şubat',
                            'Mart',
                            'Nisan',
                            'Mayıs',
                            'Haziran',
                            'Temmuz',
                            'Ağustos',
                            'Eylül',
                            'Ekim',
                            'Kasım',
                            'Aralık'
                        );

                        $ay = $aylar[date('m') - 1];
                        $gun = $gunler[date('N') - 1];?>
                        <li class="disabled block d-none d-md-block"><a href="#"><i class="fa fa-clock-o"></i><?php echo date('j ') . $ay . date(' Y ') . $gun . date('');?></a> </li>
                         <!-- <li class="d-none d-md-block"><i class="fa fa-mixcloud"></i> <span class="weather-degrees">20 <span class="unit">c</span> </span> <span class="weather-location">- Ankara</span></a></li> -->
                        <li><a href="iletisim.php"><i class="fa fa-headphones"></i>İletişim</a></li>

                    </ul>

                </div><!-- Header Top Links End -->

                <!-- Header Top Social Start -->
                <div class="header-top-social col-md-3 col-6">

                    <!-- Header Social -->
                    <div class="header-social">
                        <?php $sosyalmedyasor = $db->prepare("SELECT * FROM sosyalmedya");
                        $sosyalmedyasor->execute();
                        while ($sosyalmedya = $sosyalmedyasor->fetch(PDO::FETCH_ASSOC))
                        { ?>
                        <a target="_blank" href="<?php echo $sosyalmedya['sosyalmedya_facebook']; ?>"><i class="fa fa-facebook"></i></a>
                        <a target="_blank" href="<?php echo $sosyalmedya['sosyalmedya_twitter']; ?>"><i class="fa fa-twitter"></i></a>
                        <a target="_blank" href="<?php echo $sosyalmedya['sosyalmedya_youtube']; ?>"><i class="fa fa-youtube-play"></i></a>
                        <a target="_blank" href="<?php echo $sosyalmedya['sosyalmedya_instagram']; ?>"><i class="fa fa-instagram"></i></a>
                        <?php } ?>
                    </div>

                </div><!-- Header Top Social End -->

            </div>
        </div>
    </div><!-- Header Top End -->

    <!-- Header Start -->
    <div class="header-section section">
        <div class="container">
            <div class="row align-items-center">

                <!-- Header Logo -->
                <div class="header-logo col-md-4 d-none d-md-block">
                    <a href="index.php" class="logo"><img src="img/logo.png" alt="Logo"></a>
                </div>

                <!-- Header Banner -->
                <div class="header-banner col-md-8 col-12">
                    <div class="banner"><a href="#"><img src="img/banner/header-banner-1.png" alt="Header Banner"></a></div>
                </div>

            </div>
        </div>
    </div><!-- Header End -->

    <!-- Menu Section Start -->
    <div class="menu-section section bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="menu-section-wrap">

                        <!-- Main Menu Start -->

                        <div class="main-menu float-left d-none d-md-block">
                            <nav>
                                <ul>

                                            <li class="active"><a href="index.php">Ana Sayfa</a></li>
                                    <?php $menusor = $db->prepare("SELECT * FROM kategori");
                                    $menusor->execute();
                                    while ($menu = $menusor->fetch(PDO::FETCH_ASSOC))
                                    { ?>
                                    <li><a href="haberdetay.php?kategori=<?php echo $menu['kategori_id'] ?>"><?php echo $menu['kategori_isim']; ?></a></li>
                                    <?php } ?>
                                </ul>
                            </nav>
                        </div><!-- Main Menu Start -->

                        <div class="mobile-logo d-none d-block d-md-none"><a href="index.php"><img src="img/logo.png" alt="Logo"></a></div>

                        <!-- Header Search -->
                        <div class="header-search float-right">

                            <!-- Search Toggle -->
                            <button class="header-search-toggle"><i class="fa fa-search"></i></button>

                            <!-- Header Search Form -->

                               <div class="header-search-form">
                                    <form action="ara.php" method="GET">
                                        <input type="text" name="arama" placeholder="Ara">
                                    </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Menu Section End -->

    <!-- Breaking News Section Start -->
    <div class="breaking-news-section section">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <!-- Breaking News Wrapper Start -->
                    <div class="breaking-news-wrapper">

                        <!-- Breaking News Title -->
                        <h5 class="breaking-news-title float-left">Son Dakika</h5>



                        <!-- Breaking Newsticker Start -->
                        <ul class="breaking-news-ticker float-left">
                            <?php
                            include "sondakika.php";
                            ?>

                        </ul><!-- Breaking Newsticker Start -->


                        <!-- Breaking News Nav -->
                        <div class="breaking-news-nav">
                            <button class="news-ticker-prev"><i class="fa fa-angle-left"></i></button>
                            <button class="news-ticker-next"><i class="fa fa-angle-right"></i></button>
                        </div>

                    </div><!-- Breaking News Wrapper End -->

                </div>
            </div>
        </div>
    </div><!-- Breaking News Section End -->