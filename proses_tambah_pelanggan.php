<?php

if($_POST){

    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $telp=$_POST['telp'];

    if(empty($nama)){

        echo "<script>alert('nama pelanggan tidak boleh kosong');location.
        href='tambah_pelanggan.php';</script>";


    } elseif(empty($alamat)){

        echo "<script>alert('alamat pelanggan tidak boleh kosong');location.
        href='tambah_pelanggan.php';</script>";

    } elseif(empty($telp)){

        echo "<script>alert('nomor telephon tidak boleh kosong');location.
        href='tambah_pelanggan.php';</script>";

    } else {

        include "koneksi2.php";

        $insert=mysqli_query($conn,"INSERT INTO pelanggan (nama, alamat, telp) 
        VALUES ('".$nama."','".$alamat."', '".$telp."')");

        if($insert){

            echo "<script>alert('Sukses menambahkan produk');location.
            href='tambah_pelanggan.php';</script>";

        } else {

            echo "<script>alert('Gagal menambahkan produk');location.
            href='tambah_pelanggan.php';</script>";

        }

    }

}

?>