<?php
require 'function.php';
$idbisnis = $_GET ["id_bisnis"];

if (hapus($idbisnis) > 0) {
    echo "<script> 
            alert ('Data Berhasil di hapus');
            document.location.href= 'tabelbisnis.php';
            </script>
            ";
        } else {
            echo "<script> 
            alert ('Data gagal dihapus');
            document.location.href= 'tabelbisnis.php';
            </script>
            ";
        }


?>