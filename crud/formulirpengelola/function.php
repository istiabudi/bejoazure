<?php

//koneksi ke database
$conn = mysqli_connect ("localhost", "root", "" , "form");

function query ($query){
    global $conn ;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row ;
    } 
    return $rows;
}

function tambah ($data) {
    global $conn;
    $namapengelola = htmlspecialchars ($data ["nama_pengelola"]);
    $nik = htmlspecialchars ($data ["nik"]);
    $idpengelola = htmlspecialchars ($data ["id_pengelola"]);
    $idbisnis = htmlspecialchars ($data ["id_bisnis"]);
    $kodepos = htmlspecialchars ($data ["kode_pos"]);
    $kodekota = htmlspecialchars ($data ["kode_kota"]);
    $jumlahkaryawan = htmlspecialchars ($data ["jumlah_karyawan"]);
    $penghasilan = htmlspecialchars ($data ["penghasilan"]);
    

    $query = "INSERT INTO pengelola
                    VALUES
                    ('$namapengelola','$nik','$idpengelola','$idbisnis','$kodepos','$kodekota','$jumlahkaryawan','$penghasilan')
        ";
        mysqli_query ($conn , $query);

        return mysqli_affected_rows($conn);
}

function hapus ($idpengelola){
    global $conn ;
    mysqli_query($conn , "DELETE FROM pengelola WHERE id_pengelola=$idpengelola");
    return mysqli_affected_rows($conn);
}


function edit ($data) {
    global $conn;
    $namapengelola = htmlspecialchars ($data ["nama_pengelola"]);
    $nik = htmlspecialchars ($data ["nik"]);
    $idpengelola = htmlspecialchars ($data ["id_pengelola"]);
    $idbisnis = htmlspecialchars ($data ["id_bisnis"]);
    $kodepos = htmlspecialchars ($data ["kode_pos"]);
    $kodekota = htmlspecialchars ($data ["kode_kota"]);
    $jumlahkaryawan = htmlspecialchars ($data ["jumlah_karyawan"]);
    $penghasilan = htmlspecialchars ($data ["penghasilan"]);
    $query = "UPDATE pengelola SET 
                nama_pengelola = '$namapengelola',
                nik = '$nik',
                id_pengelola = '$idpengelola',
                id_bisnis = '$idbisnis',
                kode_pos = '$kodepos',
                kode_kota = '$kodekota',
                jumlah_karyawan = '$jumlahkaryawan',
                penghasilan = '$penghasilan'
                WHERE id_pengelola = $idpengelola
    ";
        mysqli_query ($conn , $query);

        return mysqli_affected_rows($conn);
}


?>