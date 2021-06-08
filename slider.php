<!-- GÜNDEM HABERLERİ -->
<!-- Overlay Post Start -->

<div class="post post-large post-overlay hero-post">
    <?php
    $stil='style="width:100%; height:490px; object-fit: cover;"';
    $iceriksor = $db->prepare("SELECT * FROM `icerik` WHERE kategori_id=1 ORDER BY icerik_id DESC LIMIT 1");
    $iceriksor->execute();
    while($icerik = $iceriksor->fetch(PDO::FETCH_ASSOC))
    {?>
        <div class="post-wrap">


            <?php $menusor = $db->prepare("SELECT * FROM kategori WHERE kategori_id=1");
            $menusor->execute();
            $menu = $menusor->fetch(PDO::FETCH_ASSOC);
            ?>
            <!-- Category -->
            <a href="#" class="category sports"><?php echo $menu['kategori_isim']; ?> Haberleri</a>

            <!-- Image -->
            <div> <a class="image" href="icerikdetay.php?icerik=<?php echo $icerik['icerik_id'] ?>"><img <?php echo $stil; ?> src="<?php echo $icerik['icerik_resim'];  ?>" alt="post"></a></div>
            <!-- Content -->
            <div class="content">

                <!-- Title -->
                <h2 class="title"><a href="icerikdetay.php?icerik=<?php echo $icerik['icerik_id'] ?>"><?php echo $icerik['icerik_baslik'] ?></a></h2>

                <!-- Meta -->
                <div class="meta fix">
                    <span class="meta-item date"><i class="fa fa-clock-o"></i><?php echo date("d-m-Y", strtotime($icerik['icerik_tarih'])); ?></span> <!--tarih formatını yazdırırken g.a.y yazdır strtotime'la düzenle -->
                </div>
            </div>

        </div>
    <?php } ?>
</div><!-- Overlay Post End -->

<!-- EKONOMİ HABERLERİ -->
<!-- Overlay Post Start -->
<div class="post post-large post-overlay hero-post">
    <?php
    $iceriksor = $db->prepare("SELECT * FROM `icerik` WHERE kategori_id=2 ORDER BY icerik_id DESC LIMIT 1");
    $iceriksor->execute();
    while($icerik = $iceriksor->fetch(PDO::FETCH_ASSOC))
    {?>
        <div class="post-wrap">


            <?php $menusor = $db->prepare("SELECT * FROM kategori WHERE kategori_id=2");
            $menusor->execute();
            $menu = $menusor->fetch(PDO::FETCH_ASSOC);
            ?>
            <!-- Category -->
            <a href="#" class="category sports"><?php echo $menu['kategori_isim']; ?> Haberleri</a>

            <!-- Image -->
            <div> <a class="image" href="icerikdetay.php?icerik=<?php echo $icerik['icerik_id'] ?>"><img <?php echo $stil; ?> src="<?php echo $icerik['icerik_resim'];  ?>" alt="post"></a></div>
            <!-- Content -->
            <div class="content">

                <!-- Title -->
                <h2 class="title"><a href="icerikdetay.php?icerik=<?php echo $icerik['icerik_id'] ?>"><?php echo $icerik['icerik_baslik'] ?></a></h2>

                <!-- Meta -->
                <div class="meta fix">
                    <span class="meta-item date"><i class="fa fa-clock-o"></i><?php echo date("d-m-Y", strtotime($icerik['icerik_tarih'])); ?></span> <!--tarih formatını yazdırırken g.a.y yazdır strtotime'la düzenle -->
                </div>
            </div>

        </div>
    <?php } ?>
</div><!-- Overlay Post End -->

<!-- DÜNYA HABERLERİ -->
<!-- Overlay Post Start -->
<div class="post post-large post-overlay hero-post">
    <?php
    $iceriksor = $db->prepare("SELECT * FROM `icerik` WHERE kategori_id=3 ORDER BY icerik_id DESC LIMIT 1");
    $iceriksor->execute();
    while($icerik = $iceriksor->fetch(PDO::FETCH_ASSOC))
    {?>
        <div class="post-wrap">


            <?php $menusor = $db->prepare("SELECT * FROM kategori WHERE kategori_id=3");
            $menusor->execute();
            $menu = $menusor->fetch(PDO::FETCH_ASSOC);
            ?>
            <!-- Category -->
            <a href="#" class="category sports"><?php echo $menu['kategori_isim']; ?> Haberleri</a>

            <!-- Image -->
            <div> <a class="image" href="icerikdetay.php?icerik=<?php echo $icerik['icerik_id'] ?>"><img <?php echo $stil; ?> src="<?php echo $icerik['icerik_resim'];  ?>" alt="post"></a></div>
            <!-- Content -->
            <div class="content">

                <!-- Title -->
                <h2 class="title"><a href="icerikdetay.php?icerik=<?php echo $icerik['icerik_id'] ?>"><?php echo $icerik['icerik_baslik'] ?></a></h2>

                <!-- Meta -->
                <div class="meta fix">
                    <span class="meta-item date"><i class="fa fa-clock-o"></i><?php echo date("d-m-Y", strtotime($icerik['icerik_tarih'])); ?></span> <!--tarih formatını yazdırırken g.a.y yazdır strtotime'la düzenle -->
                </div>
            </div>

        </div>
    <?php } ?>
</div><!-- Overlay Post End -->

<!-- SPOR HABERLERİ -->
<!-- Overlay Post Start -->
<div class="post post-large post-overlay hero-post">
    <?php
    $iceriksor = $db->prepare("SELECT * FROM `icerik` WHERE kategori_id=4 ORDER BY icerik_id DESC LIMIT 1");
    $iceriksor->execute();
    while($icerik = $iceriksor->fetch(PDO::FETCH_ASSOC))
    {?>
        <div class="post-wrap">


            <?php $menusor = $db->prepare("SELECT * FROM kategori WHERE kategori_id=4");
            $menusor->execute();
            $menu = $menusor->fetch(PDO::FETCH_ASSOC);
            ?>
            <!-- Category -->
            <a href="#" class="category sports"><?php echo $menu['kategori_isim']; ?> Haberleri</a>

            <!-- Image -->
            <div> <a class="image" href="icerikdetay.php?icerik=<?php echo $icerik['icerik_id'] ?>"><img <?php echo $stil; ?> src="<?php echo $icerik['icerik_resim'];  ?>" alt="post"></a></div>
            <!-- Content -->
            <div class="content">

                <!-- Title -->
                <h2 class="title"><a href="icerikdetay.php?icerik=<?php echo $icerik['icerik_id'] ?>"><?php echo $icerik['icerik_baslik'] ?></a></h2>

                <!-- Meta -->
                <div class="meta fix">
                    <span class="meta-item date"><i class="fa fa-clock-o"></i><?php echo date("d-m-Y", strtotime($icerik['icerik_tarih'])); ?></span> <!--tarih formatını yazdırırken g.a.y yazdır strtotime'la düzenle -->
                </div>
            </div>

        </div>
    <?php } ?>
</div><!-- Overlay Post End -->

<!-- TEKNOLOJİ HABERLERİ -->
<!-- Overlay Post Start -->
<div class="post post-large post-overlay hero-post">
    <?php
    $iceriksor = $db->prepare("SELECT * FROM `icerik` WHERE kategori_id=5 ORDER BY icerik_id DESC LIMIT 1");
    $iceriksor->execute();
    while($icerik = $iceriksor->fetch(PDO::FETCH_ASSOC))
    {?>
        <div class="post-wrap">


            <?php $menusor = $db->prepare("SELECT * FROM kategori WHERE kategori_id=5");
            $menusor->execute();
            $menu = $menusor->fetch(PDO::FETCH_ASSOC);
            ?>
            <!-- Category -->
            <a href="#" class="category sports"><?php echo $menu['kategori_isim']; ?> Haberleri</a>

            <!-- Image -->
            <div> <a class="image" href="icerikdetay.php?icerik=<?php echo $icerik['icerik_id'] ?>"><img <?php echo $stil; ?> src="<?php echo $icerik['icerik_resim'];  ?>" alt="post"></a></div>
            <!-- Content -->
            <div class="content">

                <!-- Title -->
                <h2 class="title"><a href="icerikdetay.php?icerik=<?php echo $icerik['icerik_id'] ?>"><?php echo $icerik['icerik_baslik'] ?></a></h2>

                <!-- Meta -->
                <div class="meta fix">
                    <span class="meta-item date"><i class="fa fa-clock-o"></i><?php echo date("d-m-Y", strtotime($icerik['icerik_tarih'])); ?></span> <!--tarih formatını yazdırırken g.a.y yazdır strtotime'la düzenle -->
                </div>
            </div>

        </div>
    <?php } ?>
</div><!-- Overlay Post End -->

<!-- MAGAZİN HABERLERİ -->
<!-- Overlay Post Start -->
<div class="post post-large post-overlay hero-post">
    <?php
    $iceriksor = $db->prepare("SELECT * FROM `icerik` WHERE kategori_id=6 ORDER BY icerik_id DESC LIMIT 1");
    $iceriksor->execute();
    while($icerik = $iceriksor->fetch(PDO::FETCH_ASSOC))
    {?>
        <div class="post-wrap">


            <?php $menusor = $db->prepare("SELECT * FROM kategori WHERE kategori_id=6");
            $menusor->execute();
            $menu = $menusor->fetch(PDO::FETCH_ASSOC);
            ?>
            <!-- Category -->
            <a href="#" class="category sports"><?php echo $menu['kategori_isim']; ?> Haberleri</a>

            <!-- Image -->
            <div> <a class="image" href="icerikdetay.php?icerik=<?php echo $icerik['icerik_id'] ?>"><img <?php echo $stil; ?> src="<?php echo $icerik['icerik_resim'];  ?>" alt="post"></a></div>
            <!-- Content -->
            <div class="content">

                <!-- Title -->
                <h2 class="title"><a href="icerikdetay.php?icerik=<?php echo $icerik['icerik_id'] ?>"><?php echo $icerik['icerik_baslik'] ?></a></h2>

                <!-- Meta -->
                <div class="meta fix">
                    <span class="meta-item date"><i class="fa fa-clock-o"></i><?php echo date("d-m-Y", strtotime($icerik['icerik_tarih'])); ?></span> <!--tarih formatını yazdırırken g.a.y yazdır strtotime'la düzenle -->
                </div>
            </div>

        </div>
    <?php } ?>
</div><!-- Overlay Post End -->



