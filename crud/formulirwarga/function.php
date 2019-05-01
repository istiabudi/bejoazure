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
    $namawarga = htmlspecialchars ($data ["nama_warga"]);
    $nik = htmlspecialchars ($data ["nik"]);
    $ttl = htmlspecialchars ($data ["ttl"]);
    $alamat = htmlspecialchars ($data ["alamat"]);
    $kodepos = htmlspecialchars ($data ["kode_pos"]);
    $kodekota = htmlspecialchars ($data ["kode_kota"]);
    

    $query = "INSERT INTO warga
                    VALUES
                    ('$namawarga','$nik','$ttl','$alamat','$kodepos','$kodekota')
        ";
        mysqli_query ($conn , $query);

        return mysqli_affected_rows($conn);
}

function hapus ($nik){
    global $conn ;
    mysqli_query($conn , "DELETE FROM warga WHERE nik=$nik");
    return mysqli_affected_rows($conn);
}


function edit ($data) {
    global $conn;
    $namawarga = htmlspecialchars ($data ["nama_warga"]);
    $nik = htmlspecialchars ($data ["nik"]);
    $ttl = htmlspecialchars ($data ["ttl"]);
    $alamat = htmlspecialchars ($data ["alamat"]);
    $kodepos = htmlspecialchars ($data ["kode_pos"]);
    $kodekota = htmlspecialchars ($data ["kode_kota"]); 
    $query = "UPDATE warga SET 
                nama_warga = '$namawarga',
                nik = '$nik',
                ttl = '$ttl',
                alamat = '$alamat',
                kode_pos = '$kodepos',
                kode_kota = '$kodekota'
                WHERE nik = $nik
    ";
        mysqli_query ($conn , $query);

        return mysqli_affected_rows($conn);
}


?>