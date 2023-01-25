<?php
    include "koneksi.php";

    $id=$_POST['id'];
    $kode_barang=$_POST['kode_barang'];
    $nama_barang=$_POST['nama_barang'];
    $keterangan=$_POST['keterangan'];
    $barang_masuk=$_POST['barang_masuk'];
    $update_barang=$_POST['update_barang'];
    $kondisi_barang=$_POST['kondisi_barang'];
    $ketersediaan=$_POST['ketersediaan'];

    $query="UPDATE datatabel SET kode_barang='$kode_barang', nama_barang='$nama_barang', keterangan='$keterangan', barang_masuk='$barang_masuk', update_barang='$update_barang', kondisi_barang='$kondisi_barang', ketersediaan='$ketersediaan' WHERE kode_barang=$id";

    $hasil=mysqli_query($koneksi,$query);

    if($hasil){
        header('Location:index.php');
    }else {
        echo "update data gagal";
    }

?>