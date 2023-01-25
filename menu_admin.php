<!-- <a href="index.php">Beranda</a> | 
<a href="index.php?menu=user">Data User</a> | 
<a href="index.php?menu=rekapitulasi">Data Rekapitulasi</a> | 
<a href="logout.php">Logout</a> |  -->

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
    </style>
    <meta charset="utf-8">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Home</title>
  </head>
  <body>
    <ul>
      <header><b>CAYO PERICO STORE</b></header>
      <li><a class="active" href="index.php"><i class="fas fa-home"></i>&nbsp;&nbsp;Home</a></li>
      <li><a href="data-barang.php"><i class="fas fa-database"></i>&nbsp;&nbsp;Data Barang</a></li>
      <li><a href="logout.php"><i class="fas fa-arrow-left"></i>&nbsp;&nbsp;Logout</a></li>
    </ul>
    <div style="margin-left:25%;padding:1px 16px;height:1000px;">
      <h2>Selamat Datang <?php echo $_SESSION['username'];?> </h2>
    </div>
  </body>
</html>