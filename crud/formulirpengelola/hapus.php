<?php
require 'function.php';
$idpengelola = $_GET ["id_pengelola"];

if (hapus($idpengelola) > 0) {
    echo "<script> 
            alert ('Data Berhasil di hapus');
            document.location.href= 'tabelpengelola.php';
            </script>
            ";
        } else {
            echo "<script> 
            alert ('Data gagal di dihapus');
            document.location.href= 'tabelpengelola.php';
            </script>
            ";
        }


?>