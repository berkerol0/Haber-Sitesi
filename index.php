<?php include "header.php";


?>
    <!-- Hero Section Start -->
    <div class="hero-section section mt-30 mb-30">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="row row-1">

                        <div class="col-lg-9 col-12">

                            <!-- Hero Post Slider Start -->
                            <div class="post-carousel-1">

                                <?php include "slider.php" ?>


                            </div><!-- Hero Post Slider End -->

                        </div>

                        <div class="col-lg-3 col-12">
                            <div class="row row-1">

                                <!-- Overlay Post Start -->
                                <div class="post post-overlay gradient-overlay-1 hero-post col-lg-12 col-md-6 col-12">
                                    <?php
                                    $stil = 'style="width:100%; height:162px; object-fit: cover;"';
                                    $iceriksor = $db->prepare("SELECT * FROM `icerik` WHERE kategori_id=2 ORDER BY icerik_id DESC LIMIT 1");
                                    $iceriksor->execute();
                                    while ($icerik = $iceriksor->fetch(PDO::FETCH_ASSOC))
                                    {
                                    ?>
                                    <div class="post-wrap">

                                        <!-- Image -->
                                        <div><a class="image"
                                                href="icerikdetay.php?icerik=<?php echo $icerik['icerik_id'] ?>"><img <?php echo $stil; ?>
                                                        src="<?php echo $icerik['icerik_resim']; ?>" alt="post"></a>
                                        </div>

                                        <!-- Category -->
                                        <?php $menusor = $db->prepare("SELECT * FROM kategori WHERE kategori_id=2");
                                        $menusor->execute();
                                        $menu = $menusor->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <a href="icerikdetay.php?icerik=<?php echo $icerik['icerik_id'] ?>"
                                           class="category technology"><?php echo $menu['kategori_isim']; ?>
                                            Haberleri</a>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Title -->
                                            <h4 class="title"><a
                                                        href="icerikdetay.php?icerik=<?php echo $icerik['icerik_id'] ?>"><?php echo $icerik['icerik_baslik'] ?></a>
                                            </h4>

                                            <!-- Meta -->
                                            <div class="meta fix">
                                                <span class="meta-item date"><i
                                                            class="fa fa-clock-o"></i><?php echo $icerik['icerik_tarih'] ?></span>
                                            </div>

                                        </div>
                                        <?php } ?>
                                    </div>
                                </div><!-- Overlay Post End -->

                                <!-- Overlay Post Start -->
                                <div class="post post-overlay gradient-overlay-1 hero-post col-lg-12 col-md-6 col-12">
                                    <?php
                                    $iceriksor = $db->prepare("SELECT * FROM `icerik` WHERE kategori_id=4 ORDER BY icerik_id DESC LIMIT 1");
                                    $iceriksor->execute();
                                    while ($icerik = $iceriksor->fetch(PDO::FETCH_ASSOC))
                                    {
                                    ?>
                                    <div class="post-wrap">

                                        <!-- Image -->
                                        <div><a class="image"
                                                href="icerikdetay.php?icerik=<?php echo $icerik['icerik_id'] ?>"><img <?php echo $stil; ?>
                                                        src="<?php echo $icerik['icerik_resim']; ?>" alt="post"></a>
                                        </div>

                                        <!-- Category -->
                                        <?php $menusor = $db->prepare("SELECT * FROM kategori WHERE kategori_id=4");
                                        $menusor->execute();
                                        $menu = $menusor->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <a href="icerikdetay.php?icerik=<?php echo $icerik['icerik_id'] ?>"
                                           class="category technology"><?php echo $menu['kategori_isim']; ?>
                                            Haberleri</a>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Title -->
                                            <h4 class="title"><a
                                                        href="icerikdetay.php?icerik=<?php echo $icerik['icerik_id'] ?>"><?php echo $icerik['icerik_baslik'] ?></a>
                                            </h4>

                                            <!-- Meta -->
                                            <div class="meta fix">
                                                <span class="meta-item date"><i
                                                            class="fa fa-clock-o"></i><?php echo $icerik['icerik_tarih'] ?></span>
                                            </div>

                                        </div>
                                        <?php } ?>
                                    </div>
                                </div><!-- Overlay Post End -->

                                <!-- Overlay Post Start -->
                                <div class="post post-overlay gradient-overlay-1 hero-post col-lg-12 col-md-6 col-12">
                                    <?php
                                    $iceriksor = $db->prepare("SELECT * FROM `icerik` WHERE kategori_id=6 ORDER BY icerik_id DESC LIMIT 1");
                                    $iceriksor->execute();
                                    while ($icerik = $iceriksor->fetch(PDO::FETCH_ASSOC))
                                    {
                                    ?>
                                    <div class="post-wrap">

                                        <!-- Image -->
                                        <div><a class="image"
                                                href="icerikdetay.php?icerik=<?php echo $icerik['icerik_id'] ?>"><img <?php echo $stil; ?>
                                                        src="<?php echo $icerik['icerik_resim']; ?>" alt="post"></a>
                                        </div>

                                        <!-- Category -->
                                        <?php $menusor = $db->prepare("SELECT * FROM kategori WHERE kategori_id=6");
                                        $menusor->execute();
                                        $menu = $menusor->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <a href="icerikdetay.php?icerik=<?php echo $icerik['icerik_id'] ?>"
                                           class="category technology"><?php echo $menu['kategori_isim']; ?>
                                            Haberleri</a>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Title -->
                                            <h4 class="title"><a
                                                        href="icerikdetay.php?icerik=<?php echo $icerik['icerik_id'] ?>"><?php echo $icerik['icerik_baslik'] ?></a>
                                            </h4>

                                            <!-- Meta -->
                                            <div class="meta fix">
                                                <span class="meta-item date"><i
                                                            class="fa fa-clock-o"></i><?php echo $icerik['icerik_tarih'] ?></span>
                                            </div>

                                        </div>
                                        <?php } ?>
                                    </div>
                                </div><!-- Overlay Post End -->

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div><!-- Hero Section End -->

    <!-- Video Section Start -->
    <div class="video-section section bg-dark pt-50 pb-50">
        <div class="container">
            <h2> Video Haberler </h2>
            <div class="row">
                <div class="col">

                    <!-- Popular Post Slider Start -->
                    <div class="popular-post-slider">

                        <!-- Overlay Post Start -->
                        <div class="post post-overlay gradient-overlay-7">
                            <div class="post-wrap">

                                <!-- Image -->
                                <a href="https://www.youtube.com/watch?v=IVnsMz4fNjA" class="image video-popup">
                                    <img src="http://img.youtube.com/vi/IVnsMz4fNjA/maxresdefault.jpg" alt="post">
                                    <!-- Video Popup -->
                                    <span class="video-btn"><i class="fa fa-play"></i></span>
                                </a>

                            </div>
                        </div><!-- Overlay Post End -->

                        <!-- Overlay Post Start -->
                        <div class="post post-overlay gradient-overlay-7">
                            <div class="post-wrap">

                                <!-- Image -->
                                <a href="https://www.youtube.com/watch?v=EdSeNtLj-GY" class="image video-popup">
                                    <img src="http://img.youtube.com/vi/EdSeNtLj-GY/maxresdefault.jpg" alt="post">
                                    <!-- Video Popup -->
                                    <span class="video-btn"><i class="fa fa-play"></i></span>
                                </a>

                            </div>
                        </div><!-- Overlay Post End -->

                        <!-- Overlay Post Start -->
                        <div class="post post-overlay gradient-overlay-7">
                            <div class="post-wrap">

                                <!-- Image -->
                                <a href="https://www.youtube.com/watch?v=Y7b5ZUOVa7s" class="image video-popup">
                                    <img src="http://img.youtube.com/vi/Y7b5ZUOVa7s/maxresdefault.jpg" alt="post">
                                    <!-- Video Popup -->
                                    <span class="video-btn"><i class="fa fa-play"></i></span>
                                </a>

                            </div>
                        </div><!-- Overlay Post End -->

                        <!-- Overlay Post Start -->
                        <div class="post post-overlay gradient-overlay-7">
                            <div class="post-wrap">

                                <!-- Image -->
                                <a href="https://www.youtube.com/watch?v=CITPcKpFGU" class="image video-popup">
                                    <img src="http://img.youtube.com/vi/4Yb3ov99_5A/maxresdefault.jpg" alt="post">
                                    <!-- Video Popup -->
                                    <span class="video-btn"><i class="fa fa-play"></i></span>
                                </a>

                            </div>
                        </div><!-- Overlay Post End -->

                        <!-- Overlay Post Start -->
                        <div class="post post-overlay gradient-overlay-7">
                            <div class="post-wrap">

                                <!-- Image -->
                                <a href="https://www.youtube.com/watch?v=0OJp65UZBMI" class="image video-popup">
                                    <img src="http://img.youtube.com/vi/0OJp65UZBMI/maxresdefault.jpg" alt="post">
                                    <!-- Video Popup -->
                                    <span class="video-btn"><i class="fa fa-play"></i></span>
                                </a>

                            </div>
                        </div><!-- Overlay Post End -->
                    </div><!-- Popular Post Slider End -->

                </div>
            </div>
        </div>
    </div><!-- Video Section End -->

    <!-- Post Section Start -->
    <div class="post-section section mt-50">
        <div class="container">

            <!-- World Post Row Start -->
            <div class="row ">

                <div class="col-lg-8 col-12 mb-50">

                    <!-- Post Block Wrapper Start -->
                    <div class="post-block-wrapper">

                        <!-- Post Block Head Start -->
                        <div class="head education-head">
                            <?php $menusor = $db->prepare("SELECT * FROM kategori WHERE kategori_id=1");
                            $menusor->execute();
                            $menu = $menusor->fetch(PDO::FETCH_ASSOC);
                            ?>
                            <!-- Title -->
                            <h4 class="title"><?php echo $menu['kategori_isim']; ?> Haberleri</h4>
                            <!-- Dropdown -->


                            </li>
                            </ul><!-- Tab List End -->



                        </div><!-- Post Block Head End -->

                        <!-- Post Block Body Start -->
                        <div class="body pb-0">

                            <!-- Tab Content Start-->
                            <div class="tab-content">

                                <!-- Tab Pane Start-->
                                <div class="tab-pane fade show active" id="world-cat-1">

                                    <div class="row">

                                        <!-- Post Start -->
                                        <?php
                                        $stil = 'style="width:100%; height:175px; object-fit: cover;"';
                                        $iceriksor = $db->prepare("SELECT * FROM `icerik` WHERE kategori_id=1 ORDER BY icerik_id DESC LIMIT 4");
                                        $iceriksor->execute();
                                        while ($icerik = $iceriksor->fetch(PDO::FETCH_ASSOC)) {
                                            ?>
                                            <div class="post education-post col-md-6 col-12 mb-20">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <a target="_blank"
                                                       href="icerikdetay.php?icerik=<?php echo $icerik['icerik_id'] ?>"
                                                       class="image"><img <?php echo $stil; ?>
                                                                src="<?php echo $icerik['icerik_resim']; ?>" alt="post"></a>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h4 class="title"><a target="_blank"
                                                                             href="icerikdetay.php?icerik=<?php echo $icerik['icerik_id'] ?>">  <?php echo $icerik['icerik_baslik']; ?></a>
                                                        </h4>

                                                        <!-- Read More -->
                                                        <a target="_blank"
                                                           href="icerikdetay.php?icerik=<?php echo $icerik['icerik_id'] ?>"
                                                           class="read-more">Okumaya devam et</a>

                                                    </div>

                                                </div>

                                            </div><!-- Post End -->
                                        <?php } ?>
                                    </div>

                                </div><!-- Tab Pane End-->


                            </div><!-- Tab Content End-->

                        </div><!-- Post Block Body End -->

                    </div><!-- Post Block Wrapper End -->

                </div>

                <!-- Sidebar Start -->
                <div class="col-lg-4 col-12 mb-50">
                    <div class="row">

                        <!-- Single Sidebar -->
                        <div class="single-sidebar col-12">

                            <!-- Sidebar Block Wrapper -->
                            <div class="sidebar-block-wrapper">

                                <!-- Sidebar Block Head Start -->
                                <div class="head education-head">

                                    <!-- Title -->
                                    <h4 class="title">Güncel Haberler</h4>

                                </div><!-- Sidebar Block Head End -->

                                <!-- Sidebar Block Body Start -->
                                <div class="body">

                                    <!-- Sidebar Post Start -->
                                    <div class="row">
                                        <?php

                                        $iceriksor = $db->prepare("SELECT * FROM `icerik` WHERE kategori_id=3 ORDER BY icerik_id DESC LIMIT 1");
                                        $iceriksor->execute();
                                        while ($icerik = $iceriksor->fetch(PDO::FETCH_ASSOC)) {
                                            ?>
                                            <!-- Small Post Start -->
                                            <div class="post post-small post-list life-style-post post-separator-border col-lg-12 col-md-6 col-12">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <a class="image"
                                                       href="icerikdetay.php?icerik=<?php echo $icerik['icerik_id'] ?>"><img
                                                                src="<?php echo $icerik['icerik_resim']; ?>" alt="post"></a>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h5 class="title"><a
                                                                    href="post-details.html"><?php echo $icerik['icerik_baslik'] ?></a>
                                                        </h5>

                                                        <!-- Meta -->
                                                        <div class="meta fix">
                                                            <span class="meta-item date"><i
                                                                        class="fa fa-clock-o"></i><?php echo $icerik['icerik_yazar'] ?></span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div><!-- Small Post End -->
                                        <?php } ?>

                                        <?php
                                        $iceriksor = $db->prepare("SELECT * FROM `icerik` WHERE kategori_id=6 ORDER BY icerik_id DESC LIMIT 1");
                                        $iceriksor->execute();
                                        while ($icerik = $iceriksor->fetch(PDO::FETCH_ASSOC)) {
                                            ?>
                                            <!-- Small Post Start -->
                                            <div class="post post-small post-list life-style-post post-separator-border col-lg-12 col-md-6 col-12">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <a class="image"
                                                       href="icerikdetay.php?icerik=<?php echo $icerik['icerik_id'] ?>"><img
                                                                src="<?php echo $icerik['icerik_resim']; ?>" alt="post"></a>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h5 class="title"><a
                                                                    href="post-details.html"><?php echo $icerik['icerik_baslik'] ?></a>
                                                        </h5>

                                                        <!-- Meta -->
                                                        <div class="meta fix">
                                                            <span class="meta-item date"><i
                                                                        class="fa fa-clock-o"></i><?php echo $icerik['icerik_yazar'] ?></span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div><!-- Small Post End -->
                                        <?php } ?>

                                        <?php
                                        $iceriksor = $db->prepare("SELECT * FROM `icerik` WHERE kategori_id=5 ORDER BY icerik_id DESC LIMIT 1");
                                        $iceriksor->execute();
                                        while ($icerik = $iceriksor->fetch(PDO::FETCH_ASSOC)) {
                                            ?>
                                            <!-- Small Post Start -->
                                            <div class="post post-small post-list life-style-post post-separator-border col-lg-12 col-md-6 col-12">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <a class="image"
                                                       href="icerikdetay.php?icerik=<?php echo $icerik['icerik_id'] ?>"><img
                                                                src="<?php echo $icerik['icerik_resim']; ?>" alt="post"></a>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h5 class="title"><a
                                                                    href="post-details.html"><?php echo $icerik['icerik_baslik'] ?></a>
                                                        </h5>

                                                        <!-- Meta -->
                                                        <div class="meta fix">
                                                            <span class="meta-item date"><i
                                                                        class="fa fa-clock-o"></i><?php echo $icerik['icerik_yazar'] ?></span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div><!-- Small Post End -->
                                        <?php } ?>

                                        <?php
                                        $iceriksor = $db->prepare("SELECT * FROM `icerik` WHERE kategori_id=2 ORDER BY icerik_id DESC LIMIT 1");
                                        $iceriksor->execute();
                                        while ($icerik = $iceriksor->fetch(PDO::FETCH_ASSOC)) {
                                            ?>
                                            <!-- Small Post Start -->
                                            <div class="post post-small post-list life-style-post post-separator-border col-lg-12 col-md-6 col-12">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <a class="image"
                                                       href="icerikdetay.php?icerik=<?php echo $icerik['icerik_id'] ?>"><img
                                                                src="<?php echo $icerik['icerik_resim']; ?>" alt="post"></a>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h5 class="title"><a
                                                                    href="post-details.html"><?php echo $icerik['icerik_baslik'] ?></a>
                                                        </h5>

                                                        <!-- Meta -->
                                                        <div class="meta fix">
                                                            <span class="meta-item date"><i
                                                                        class="fa fa-clock-o"></i><?php echo $icerik['icerik_yazar'] ?></span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div><!-- Small Post End -->
                                        <?php } ?>

                                        <?php
                                        $iceriksor = $db->prepare("SELECT * FROM `icerik` WHERE kategori_id=4 ORDER BY icerik_id DESC LIMIT 1");
                                        $iceriksor->execute();
                                        while ($icerik = $iceriksor->fetch(PDO::FETCH_ASSOC)) {
                                            ?>
                                            <!-- Small Post Start -->
                                            <div class="post post-small post-list life-style-post post-separator-border col-lg-12 col-md-6 col-12">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <a class="image"
                                                       href="icerikdetay.php?icerik=<?php echo $icerik['icerik_id'] ?>"><img
                                                                src="<?php echo $icerik['icerik_resim']; ?>" alt="post"></a>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h5 class="title"><a
                                                                    href="post-details.html"><?php echo $icerik['icerik_baslik'] ?></a>
                                                        </h5>

                                                        <!-- Meta -->
                                                        <div class="meta fix">
                                                            <span class="meta-item date"><i
                                                                        class="fa fa-clock-o"></i><?php echo $icerik['icerik_yazar'] ?></span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div><!-- Small Post End -->
                                        <?php } ?>


                                    </div><!-- Sidebar Post End -->

                                </div><!-- Sidebar Block Body End -->

                            </div>

                        </div>

                    </div>
                </div><!-- Sidebar End -->

            </div><!-- World Post Row End -->

            <!-- Cricket, Tennis & Motogp Post Row Start -->
            <div class="row">

                <div class="col-lg-4 col-md-6 col-12 mb-50">

                    <!-- Post Block Wrapper Start -->
                    <div class="post-block-wrapper">

                        <!-- Post Block Head Start -->
                        <div class="head education-head">
                            <?php $menusor = $db->prepare("SELECT * FROM kategori WHERE kategori_id=2");
                            $menusor->execute();
                            $menu = $menusor->fetch(PDO::FETCH_ASSOC);
                            ?>
                            <!-- Title -->
                            <h4 class="title"><?php echo $menu['kategori_isim']; ?> Haberleri</h4>

                        </div><!-- Post Block Head End -->

                        <!-- Post Block Body Start -->
                        <div class="body">

                            <!-- Sidebar Post Slider Start -->
                            <div class="sidebar-post-carousel post-block-carousel education-post-carousel">

                                <!-- Post Start -->
                                <?php
                                $stil = 'style="width:100%; height:200px; object-fit: cover;"';
                                $iceriksor = $db->prepare("SELECT * FROM `icerik` WHERE kategori_id=2 ORDER BY icerik_id DESC LIMIT 4");
                                $iceriksor->execute();
                                while ($icerik = $iceriksor->fetch(PDO::FETCH_ASSOC)) {
                                    ?>
                                    <div class="post education-post">
                                        <div class="post-wrap">

                                            <!-- Image -->
                                            <!-- Image -->
                                            <a class="image"
                                               href="icerikdetay.php?icerik=<?php echo $icerik['icerik_id'] ?>"><img <?php echo $stil; ?>
                                                        src="<?php echo $icerik['icerik_resim']; ?>" alt="post"></a>
                                            <!-- Content -->
                                            <div class="content">

                                                <!-- Title -->
                                                <h4 class="title"><a
                                                            href="icerikdetay.php?icerik=<?php echo $icerik['icerik_id'] ?>"><?php echo $icerik['icerik_baslik']; ?></a>
                                                </h4>

                                                <!-- Meta -->
                                                <div class="meta fix">
                                                    <a href="icerikdetay.php?icerik=<?php echo $icerik['icerik_id'] ?>"
                                                       class="meta-item author"><i
                                                                class="fa fa-user"></i><?php echo $icerik['icerik_yazar']; ?>
                                                    </a>
                                                    <span class="meta-item date"><i
                                                                class="fa fa-clock-o"></i><?php echo $icerik['icerik_tarih']; ?></span>
                                                </div>

                                                <p><?php echo substr($icerik['icerik_icerik'], 0, 130); ?>...</p>

                                                <a href="icerikdetay.php?icerik=<?php echo $icerik['icerik_id'] ?>"
                                                   class="read-more">Okumaya devam et</a>

                                            </div>

                                        </div>
                                    </div><!-- Post End -->
                                <?php } ?>


                            </div><!-- Sidebar Post Slider End -->

                        </div><!-- Post Block Body End -->

                    </div><!-- Post Block Wrapper End -->

                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-50">

                    <!-- Post Block Wrapper Start -->
                    <div class="post-block-wrapper">

                        <!-- Post Block Head Start -->
                        <div class="head education-head">
                            <?php $menusor = $db->prepare("SELECT * FROM kategori WHERE kategori_id=3");
                            $menusor->execute();
                            $menu = $menusor->fetch(PDO::FETCH_ASSOC);
                            ?>
                            <!-- Title -->
                            <h4 class="title"><?php echo $menu['kategori_isim']; ?> Haberleri</h4>

                        </div><!-- Post Block Head End -->

                        <!-- Post Block Body Start -->
                        <div class="body">

                            <!-- Sidebar Post Slider Start -->
                            <div class="sidebar-post-carousel post-block-carousel education-post-carousel">

                                <!-- Post Start -->
                                <?php
                                $stil = 'style="width:100%; height:200px; object-fit: cover;"';
                                $iceriksor = $db->prepare("SELECT * FROM `icerik` WHERE kategori_id=3 ORDER BY icerik_id DESC LIMIT 4");
                                $iceriksor->execute();
                                while ($icerik = $iceriksor->fetch(PDO::FETCH_ASSOC)) {
                                    ?>
                                    <div class="post education-post">
                                        <div class="post-wrap">

                                            <!-- Image -->
                                            <a class="image"
                                               href="icerikdetay.php?icerik=<?php echo $icerik['icerik_id'] ?>"><img <?php echo $stil; ?>
                                                        src="<?php echo $icerik['icerik_resim']; ?>" alt="post"></a>

                                            <!-- Content -->
                                            <div class="content">

                                                <!-- Title -->
                                                <h4 class="title"><a
                                                            href="icerikdetay.php?icerik=<?php echo $icerik['icerik_id'] ?>"><?php echo $icerik['icerik_baslik']; ?></a>
                                                </h4>

                                                <!-- Meta -->
                                                <div class="meta fix">
                                                    <a href="icerikdetay.php?icerik=<?php echo $icerik['icerik_id'] ?>"
                                                       class="meta-item author"><i
                                                                class="fa fa-user"></i><?php echo $icerik['icerik_yazar']; ?>
                                                    </a>
                                                    <span class="meta-item date"><i class="fa fa-clock-o"></i>10 Mart 2020</span>
                                                </div>

                                                <p><?php echo substr($icerik['icerik_icerik'], 0, 130); ?>...</p>

                                                <a href="icerikdetay.php?icerik=<?php echo $icerik['icerik_id'] ?>"
                                                   class="read-more">Okumaya devam et</a>

                                            </div>

                                        </div>
                                    </div><!-- Post End -->
                                <?php } ?>


                            </div><!-- Sidebar Post Slider End -->

                        </div><!-- Post Block Body End -->

                    </div><!-- Post Block Wrapper End -->

                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-50">

                    <!-- Post Block Wrapper Start -->
                    <div class="post-block-wrapper">

                        <!-- Post Block Head Start -->
                        <div class="head education-head">
                            <?php $menusor = $db->prepare("SELECT * FROM kategori WHERE kategori_id=4");
                            $menusor->execute();
                            $menu = $menusor->fetch(PDO::FETCH_ASSOC);
                            ?>
                            <!-- Title -->
                            <h4 class="title"><?php echo $menu['kategori_isim']; ?> Haberleri</h4>

                        </div><!-- Post Block Head End -->

                        <!-- Post Block Body Start -->
                        <div class="body">

                            <!-- Sidebar Post Slider Start -->
                            <div class="sidebar-post-carousel post-block-carousel education-post-carousel">

                                <!-- Post Start -->
                                <?php
                                $stil = 'style="width:100%; height:200px; object-fit: cover;"';

                                $iceriksor = $db->prepare("SELECT * FROM `icerik` WHERE kategori_id=4 ORDER BY icerik_id DESC LIMIT 4");
                                $iceriksor->execute();
                                while ($icerik = $iceriksor->fetch(PDO::FETCH_ASSOC)) {
                                    ?>
                                    <div class="post education-post">
                                        <div class="post-wrap">

                                            <!-- Image -->
                                            <a class="image"
                                               href="icerikdetay.php?icerik=<?php echo $icerik['icerik_id'] ?>"><img <?php echo $stil; ?>
                                                        src="<?php echo $icerik['icerik_resim']; ?>" alt="post"></a>

                                            <!-- Content -->
                                            <div class="content">

                                                <!-- Title -->
                                                <h4 class="title"><a
                                                            href="icerikdetay.php?icerik=<?php echo $icerik['icerik_id'] ?>"><?php echo $icerik['icerik_baslik']; ?></a>
                                                </h4>

                                                <!-- Meta -->
                                                <div class="meta fix">
                                                    <a href="icerikdetay.php?icerik=<?php echo $icerik['icerik_id'] ?>"
                                                       class="meta-item author"><i
                                                                class="fa fa-user"></i><?php echo $icerik['icerik_yazar']; ?>
                                                    </a>
                                                    <span class="meta-item date"><i class="fa fa-clock-o"></i>10 Mart 2020</span>
                                                </div>

                                                <p><?php echo substr($icerik['icerik_icerik'], 0, 130); ?>...</p>

                                                <a href="icerikdetay.php?icerik=<?php echo $icerik['icerik_id'] ?>"
                                                   class="read-more">Okumaya devam et</a>

                                            </div>

                                        </div>
                                    </div><!-- Post End -->
                                <?php } ?>


                            </div><!-- Sidebar Post Slider End -->

                        </div><!-- Post Block Body End -->

                    </div><!-- Post Block Wrapper End -->

                </div>


            </div><!-- Cricket, Tennis & Motogp Post Row End -->


            <!-- Banner Row Start -->
            <div class="row mb-50">

                <div class="col-12">

                    <a href="#" class="post-middle-banner"><img src="img/banner/post-middle-2.jpg" alt="Banner"></a>

                </div>

            </div><!-- Banner Row End -->

            <div class="row">
                <div class="col-lg-8 col-12 mb-50">

                    <!-- Post Block Wrapper Start -->
                    <div class="post-block-wrapper">

                        <!-- Post Block Head Start -->
                        <div class="head education-head">
                            <?php $menusor = $db->prepare("SELECT * FROM kategori WHERE kategori_id=6");
                            $menusor->execute();
                            $menu = $menusor->fetch(PDO::FETCH_ASSOC);
                            ?>
                            <!-- Title -->
                            <h4 class="title"><?php echo $menu['kategori_isim']; ?> Haberleri</h4>
                            <!-- Dropdown -->

                        </div><!-- Post Block Head End -->

                        <!-- Post Block Body Start -->
                        <div class="body pb-0">

                            <!-- Tab Content Start-->
                            <div class="tab-content">

                                <!-- Tab Pane Start-->
                                <div class="tab-pane fade show active" id="world-cat-1">

                                    <div class="row">

                                        <!-- Post Start -->
                                        <?php
                                        $stil = 'style="width:100%; height:300px; object-fit: cover;"';
                                        $iceriksor = $db->prepare("SELECT * FROM `icerik` WHERE kategori_id=6 ORDER BY icerik_id DESC LIMIT 4"); // kategoriye göre içerik çekme,eklenen son 4 içeriğe göre sıralama
                                        $iceriksor->execute();
                                        while ($icerik = $iceriksor->fetch(PDO::FETCH_ASSOC)) {
                                            ?>
                                            <div class="post education-post col-md-6 col-12 mb-20">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <a target="_blank"
                                                       href="icerikdetay.php?icerik=<?php echo $icerik['icerik_id'] ?>"
                                                       class="image"><img <?php echo $stil ?>
                                                                src="<?php echo $icerik['icerik_resim']; ?>" alt="post"></a>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h4 class="title"><a target="_blank"
                                                                             href="icerikdetay.php?icerik=<?php echo $icerik['icerik_id'] ?>">  <?php echo $icerik['icerik_baslik']; ?></a>
                                                        </h4>

                                                        <!-- Read More -->
                                                        <a target="_blank"
                                                           href="icerikdetay.php?icerik=<?php echo $icerik['icerik_id'] ?>"
                                                           class="read-more">Okumaya devam et</a>

                                                    </div>

                                                </div>

                                            </div><!-- Post End -->
                                        <?php } ?>
                                    </div>

                                </div><!-- Tab Pane End-->



                            </div><!-- Tab Content End-->

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
                                    while ($sosyalmedya = $sosyalmedyasor->fetch(PDO::FETCH_ASSOC)) { ?>
                                        <div class="sidebar-social-follow">
                                            <div>
                                                <a href="<?php echo $sosyalmedya['sosyalmedya_facebook']; ?>"
                                                   target="_blank" class="facebook">
                                                    <i class="fa fa-facebook"></i>
                                                    <span>Facebook</span>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="<?php echo $sosyalmedya['sosyalmedya_twitter']; ?>"
                                                   target="_blank" class="twitter">
                                                    <i class="fa fa-twitter"></i>
                                                    <span>Twitter</span>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="<?php echo $sosyalmedya['sosyalmedya_youtube']; ?>"
                                                   target="_blank" class="google-plus">
                                                    <i class="fa fa-youtube"></i>
                                                    <span>Youtube</span>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="<?php echo $sosyalmedya['sosyalmedya_instagram']; ?>"
                                                   target="_blank" class="dribbble">
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
                        <div class="single-sidebar col-lg-12 col-md-6 col-12">


                        </div>

                    </div>
                </div><!-- Sidebar End -->
            </div>
        </div>
    </div><!-- Post Section End -->
<?php include "footer.php"; ?>