<?php
    $nama          = $_POST['nama'];
    $nomor         = $_POST['nomor'];
    $hari          = $_POST['hari'];
    $tipe          = $_POST['tipe'];
    $harga         = $_POST['harga'];

    echo "<head><title>FORM RENTAL MOBIL</head></title>";
    $fp = fopen("rentalmobil.txt","w+");
    fputs($fp,"$nama|$nomor|$hari|$tipe|$harga\n");
    fclose($fp);

    echo "Terimah Kasih ! <br>";
    echo "<a href=form.html> Mau Rental Mobil </a><br>";
    echo "<a href=lihat.php> Lihat yang sudah isi form </a><br>";
?>