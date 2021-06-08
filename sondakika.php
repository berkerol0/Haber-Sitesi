<?php
$iceriksor = $db->prepare("SELECT * FROM `icerik` WHERE kategori_id=6 ORDER BY icerik_id DESC LIMIT 1");
$iceriksor->execute();
while($icerik = $iceriksor->fetch(PDO::FETCH_ASSOC))
{?>
    <li><?php echo $icerik['icerik_baslik'] ?></li>
<?php } ?>

<?php
$iceriksor = $db->prepare("SELECT * FROM `icerik` WHERE kategori_id=4 ORDER BY icerik_id DESC LIMIT 1");
$iceriksor->execute();
while($icerik = $iceriksor->fetch(PDO::FETCH_ASSOC))
{?>
    <li><?php echo $icerik['icerik_baslik'] ?></li>
<?php } ?>

<?php
$iceriksor = $db->prepare("SELECT * FROM `icerik` WHERE kategori_id=3 ORDER BY icerik_id DESC LIMIT 1");
$iceriksor->execute();
while($icerik = $iceriksor->fetch(PDO::FETCH_ASSOC))
{?>
    <li><?php echo $icerik['icerik_baslik'] ?></li>
<?php } ?>

<?php
$iceriksor = $db->prepare("SELECT * FROM `icerik` WHERE kategori_id=1 ORDER BY icerik_id DESC LIMIT 1");
$iceriksor->execute();
while($icerik = $iceriksor->fetch(PDO::FETCH_ASSOC))
{?>
    <li><?php echo $icerik['icerik_baslik'] ?></li>
<?php } ?>

<?php
$iceriksor = $db->prepare("SELECT * FROM `icerik` WHERE kategori_id=2 ORDER BY icerik_id DESC LIMIT 1");
$iceriksor->execute();
while($icerik = $iceriksor->fetch(PDO::FETCH_ASSOC))
{?>
    <li><?php echo $icerik['icerik_baslik'] ?></li>
<?php } ?>

<?php
$iceriksor = $db->prepare("SELECT * FROM `icerik` WHERE kategori_id=5 ORDER BY icerik_id DESC LIMIT 1");
$iceriksor->execute();
while($icerik = $iceriksor->fetch(PDO::FETCH_ASSOC))
{?>
    <li><?php echo $icerik['icerik_baslik'] ?></li>
<?php } ?>

