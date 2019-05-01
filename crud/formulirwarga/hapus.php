<?php
require 'function.php';
$nik = $_GET ["nik"];

if (hapus($nik) > 0) {
    echo "<script> 
            alert ('Data Berhasil di hapus');
            document.location.href= 'tabelwarga.php';
            </script>
            ";
        } else {
            echo "<script> 
            alert ('Data gagal di dihapus');
            document.location.href= 'tabelwarga.php';
            </script>
            ";
        }


?>