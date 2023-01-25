<?php
include "koneksi.php";
?>
<html>
  <head>
    <style>
    body {
    margin: 0;
    font-family: 'Arial', Helvetica, sans-serif;
    }

    ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 25%;
    background-color: #063d07;
    position: fixed;
    height: 100%;
    overflow: auto;
    } 

    li a {
    display: block;
    color: #dfffe1;
    padding: 8px 16px;
    text-decoration: none;
    height: 5%;
    font-size: 20px;
    }

    li a.active {
    background-color: #47ff66;
    color: white;
    }

    li a:hover:not(.active) {
    background-color: #2b6531;
    color: white;
    }

    header {
    font-size: 22px;
    color: white;
    line-height: 50px;
    text-align: center;
    background: #19e080;
    user-select: none;
    }
    
    div {
    border-radius: 5px;
    background-color: white;
    padding: 100px;
    margin: 0px 50px 20px;
    }

    table {
    border-collapse: collapse;
    width: 100%;
    }      
    
    th, td {
    text-align: left;
    padding: 8px;
    }
        
    th {
    background-color: #25852d;
    color: white;
    }

    button {
    background-color: #25852d;
    padding: 15px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    }

    i {
    color: #dfffe1;
    }

    </style>
    <meta charset="utf-8">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Data Barang</title>
  </head>
  <body>
    <ul>
      <header><b>CAYO PERICO STORE</b></header>
      <li><a href="index.php"><i class="fas fa-home"></i>&nbsp;&nbsp;Home</a></li>
      <li><a class="active" href="data-barang.php"><i class="fas fa-database"></i>&nbsp;&nbsp;Data Barang</a></li>
      <li><a href="logout.php"><i class="fas fa-arrow-left"></i>&nbsp;&nbsp;Logout</a></li>
    </ul>
    <div style="margin-left:25%;padding:1px 16px;height:1000px;">
    <table border="1">
    <tr>
        <h3><p align="center">CAYO PERICO STORE</p></h3>
        <th>No</th>
        <th>Kode Barang</th>
        <th>Nama Merek</th>
        <th colspan="2"></th>
    </tr>
    </div>
  </body>
</html>

<?php
include "koneksi.php";
$no=1;
$ambildata = mysqli_query($koneksi, "select * from datatabel");
while($tampil = mysqli_fetch_array($ambildata)){
    echo "
    <tr>
        <td>$no</td>
        <td>$tampil[kode_barang]</td>
        <td>$tampil[nama_barang]</td>
        <td><button style='background-color:#1d213d; width:90%'><i class='fas fa-book'><a href='tampil-barang-guest.php?kode=$tampil[kode_barang]'>Details</a></i></button></td>
    </tr>";
    $no++;
}
?>
</table><br>

<?php
if(isset($_GET['kode'])){
    mysqli_query($koneksi, "delete from datatabel where kode_barang='$_GET[kode]'");

    echo '<script>alert("Data Berhasil Dihapus")</script>';
    echo "<meta http-equiv=refresh content=0;URL='data-barang.php'>";
}
?>
