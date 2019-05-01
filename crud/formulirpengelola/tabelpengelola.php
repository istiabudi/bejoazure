<?php
    require 'function.php';

$pengelola = query ("SELECT * FROM pengelola");

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

      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Tabel
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="../formulirkota/tabelkota.php">Tabel Kota</a>
          <a class="dropdown-item" href="../formulirkecamatan/tabelkecamatan.php">Tabel Kecamatan</a>
          <a class="dropdown-item" href="../formulirwarga/tabelwarga.php">Tabel Warga</a>
          <a class="dropdown-item" href="../formulirbisnis/tabelbisnis.php">Tabel Bisnis</a>
          <a class="dropdown-item active" href="tabelpengelola.php">Tabel Pengelola</a>
        </div>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Formulir
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="../formulirkota/formulirkota.php">Formulir Kota</a>
          <a class="dropdown-item" href="../formulirkecamatan/formulirkecamatan.php">Formulir Kecamatan</a>
          <a class="dropdown-item" href="../formulirwarga/formulirwarga.php">Formulir Warga</a>
          <a class="dropdown-item" href="../formulirbisnis/formulirbisnis.php">Formulir Bisnis</a>
          <a class="dropdown-item" href="formulirpengelola.php">Formulir Pengelola</a>
        </div>

      </li>
    </ul>
  </div>
</nav>

<h1 align="center">Tabel Pengelola Bisnis </h1>

<table class="table">
  <thead align="center" class="thead-dark" >
    <tr >
      <th scope="col">No</th>
      <th scope="col">Nama Pengelola Bisnis</th>
      <th scope="col">NIK</th>
      <th scope="col">ID Pengelola</th>
      <th scope="col">ID Bisnis</th>
      <th scope="col">Kode Pos</th>
      <th scope="col">Kode Kota</th>
      <th scope="col">Jumlah Karyawan</th>
      <th scope="col">Penghasilan Per Bulan</th>
      <th colspan="2" socpe="col">Opsi</th>
    </tr>
  </thead>

<?php $a = 1 ?>
<?php foreach ($pengelola as $row) :  ?>
  <tbody>
    <tr align="center">
      <th scope="row"><?= $a; ?></th>
      <td><?= $row ["nama_pengelola"];?></td>
      <td><?= $row ["nik"];?></td>
      <td><?= $row ["id_pengelola"];?></td>
      <td><?= $row ["id_bisnis"];?></td>
      <td><?= $row ["kode_pos"];?></td>
      <td><?= $row ["kode_kota"]?></td>
      <td><?= $row ["jumlah_karyawan"]?></td>
      <td>Rp <?= number_format($row ["penghasilan"])?></td>
      <td><a href="editpengelola.php?id_pengelola=<?= $row ["id_pengelola"]; ?>"> Edit </a></td>
      <td><a href="hapus.php?id_pengelola=<?= $row ["id_pengelola"];?>" onclick="return confirm ('yakin?')"> Hapus</a></td>
    </tr>
<?php $a++; ?>
<?php endforeach ; ?>
   
  </tbody>
</table>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>