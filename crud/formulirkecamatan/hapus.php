<?php
require 'function.php';
$kodepos = $_GET ["kode_pos"];

if (hapus($kodepos) > 0) {
    echo "<script> 
            alert ('Data Berhasil di hapus');
            document.location.href= 'tabelkecamatan.php';
            </script>
            ";
        } else {
            echo "<script> 
            alert ('Data gagal di dihapus');
            document.location.href= 'tabelkecamatan.php';
            </script>
            ";
        }
?>