<?php
require 'function.php';
$kodekota = $_GET ["kode_kota"];

if (hapus($kodekota) > 0) {
    echo "<script> 
            alert ('Data Berhasil di hapus');
            document.location.href= 'tabelkota.php';
            </script>
            ";
        } else {
            echo "<script> 
            alert ('Data gagal di dihapus');
            document.location.href= 'tabelkota.php';
            </script>
            ";
        }


?>