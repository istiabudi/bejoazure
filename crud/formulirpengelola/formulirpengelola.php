<?php
    require 'function.php';
    if (isset ($_POST['submit'])){   
        if (tambah ($_POST)> 0){
            echo "<script> 
            alert ('Data Berhasil di tambahkan');
            document.location.href= 'formulirpengelola.php';
            </script>
            ";
        } else {
            echo "<script> 
            alert ('Data Gagal di tambahkan');
            document.location.href= 'formulirpengelola.php';
            </script>
            ";
        }
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">KECAMATAN</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      
      <li class="nav-item">
        <a class="nav-link" href="../home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Tabel
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="../formulirkota/tabelkota.php">Tabel Kota</a>
          <a class="dropdown-item" href="../formulirkecamatan/tabelkecamatan.php">Tabel Kecamatan</a>
          <a class="dropdown-item" href="../formulirwarga/tabelwarga.php">Tabel Warga</a>
          <a class="dropdown-item" href="../formulirbisnis/tabelbisnis.php">Tabel Bisnis</a>
          <a class="dropdown-item " href="tabelpengelola.php">Tabel Pengelola</a>
        </div>

      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Formulir
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="../formulirkota/formulirkota.php">Formulir Kota</a>
          <a class="dropdown-item" href="../formulirkecamatan/formulirkecamatan.php">Formulir Kecamatan</a>
          <a class="dropdown-item" href="../formulirwarga/formulirwarga.php">Formulir Warga</a>
          <a class="dropdown-item" href="../formulirbisnis/formulirbisnis.php">Formulir Bisnis</a>
          <a class="dropdown-item active" href="formulirpengelola.php">Formulir Pengelola</a>
        </div>
      </li>
    </ul>
  </div>
</nav>

<h1 align="center">Formulir Pengelola Bisnis </h1>

<form action="" method="POST"> 
  <div class="form-group">
    
    <label for="nama_pengelola">Nama Pengelola Bisnis</label>
    <input  type="text" class="form-control"  name="nama_pengelola" id="nama_pengelola" placeholder="Nama Pengelola Bisnis" Required>
  </div>

  <div class="form-group">
    <label  for="id_pengelola">ID Pengelola</label>
    <input  type="number" class="form-control"  name="id_pengelola" id="id_pengelola" placeholder="ID Pengelola">
  </div>

   <div class="form-group">
    <label  for="nik">NIK</label>
    <input  type="number" class="form-control"  name="nik" id="nik" placeholder="NIK">
  </div>

    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="id_bisnis">ID Bisnis</label>
      <input type="number" class="form-control" name="id_bisnis" id="id_bisnis" placeholder="ID Bisnis">
    </div>

    <div class="form-group col-md-6">
      <label for="kode_pos">Kode Pos</label>
      <input type="number" class="form-control" name="kode_pos" id="kode_pos" placeholder="Kode Pos">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="kode_kota">Kode Kota</label>
      <input type="number" class="form-control" name="kode_kota" id="kode_kota" placeholder="Kode Kota">
    </div>

    <div class="form-group col-md-6">
      <label for="jumlah_karyawan">Jumlah Karyawan </label>
      <input type="number" class="form-control" name="jumlah_karyawan" id="jumlah_karyawan" placeholder="Jumlah Karyawan">
    </div>
  </div>
  
  <div class="form-group">
    <label  for="penghasilan">Penghasilan Per Bulan</label>
    <input  type="number" class="form-control"  name="penghasilan" id="penghasilan" placeholder="Penghasilan Per Bulan">
  </div>


  <button type="submit" class="btn btn-primary" name="submit">simpan</button>

</form>



    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>