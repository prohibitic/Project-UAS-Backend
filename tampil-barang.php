<?php
include "koneksi.php";
$sql=mysqli_query($koneksi,"select * from datatabel where kode_barang='$_GET[kode]'");
$data=mysqli_fetch_array($sql);
?>

<html>
  <head>
    <style>
      input[type=text], select {
      width: 100%;
      padding: 12px 100px 10px 12px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      }

      input[type=number], select {
      width: 100%;
      padding: 12px 100px 10px 12px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      }
      
      input[type=submit] {
      width: 100%;
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      }

      input[type=submit]:hover {
      background-color: #45a049;
      }

      div {
      border-radius: 5px;
      background-color: rgb(194, 216, 199);
      padding: 100px;
      margin: 5px 400px 20px;
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
      background-color: #04AA6D;
      color: white;
      }

      a{
      width: 100%;
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      }
    </style>
    <title>INPUT DATA BARANG</title>
  </head>
  <body>
    <div>
      <br><h3 align="center">MASUKAN DATA BARANG</h3>
        <form method="POST">
          <table align="center">
            <tr>
              <td><input type="text" placeholder="KODE" name="kode_barang" required="required" value="<?php echo $data['kode_barang']; ?>"> </td>
            </tr>
            <tr>
              <td><input type="text" placeholder="NAMA BARANG" name="nama_barang" required="required" value="<?php echo $data['nama_barang']; ?>"></td>
            </tr>
            <tr>
              <td><input type="date" placeholder="TANGGAL BARANG MASUK" name="barang_masuk" required="required" value="<?php echo $data['barang_masuk']; ?>">&nbsp;*TANGGAL BARANG MASUK</td>
            </tr>
            <tr>
              <td><input type="date" placeholder="UPDATE BARANG" name="update_barang" required="required" value="<?php echo $data['update_barang']; ?>">&nbsp;*TANGGAL BARANG DI-UPDATE</td>
            </tr>
            <tr>
            <td><input type="text" placeholder="KONDISI BARANG" name="kondisi_barang" required="required" value="<?php echo $data['kondisi_barang']; ?>"></td>
            </tr>
            <tr>
              <td><textarea name="keterangan" cols="61" rows="5" placeholder="KETERANGAN" required="required"><?php echo $data['keterangan']; ?></textarea><br></td>
            </tr>
            <tr>
            <td><input type="text" placeholder="KETERSEDIAAN" name="ketersediaan" required="required" value="<?php echo $data['ketersediaan']; ?>"></td>
            </tr>
            <tr>
              <td>
              <a href="data-barang.php" style="text-decoration:none;">Kembali</a><td>
            </tr>
          </table>
        </form>
    </div>
  </body>
</html>

