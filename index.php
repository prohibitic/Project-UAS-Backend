<?php
session_start();
$login = $_SESSION['login'];
if($login == 1)
{
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
 <title>Home</title>
 <style>
 body { font-family: verdana; font-size: 12px; }
 a { text-decoration: none; color: blue; }
 a:hover { color: green; }
 </style>
</head>
<body>

<!-- ------------------------------------------------------------------------------------------------------------------------ -->

<?php 
$level = $_SESSION['level'];
if($level == 1) { include "menu_admin.php"; }
if($level == 2) { include "menu_staff.php"; }
if($level == 3) { include "menu_guest.php"; }
?>
 
<hr>

<?php 
$nama     = $_SESSION['nama'];
$username = $_SESSION['username'];

echo "Selamat Datang $nama ($username) ";
?>
<hr>
</body>
</html>
<?php
}
else {
 include "login.php";
} 
?>
