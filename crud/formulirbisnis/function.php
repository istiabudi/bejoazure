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
    $namabisnis = htmlspecialchars ($data ["nama_bisnis"]);
    $jenisbisnis = htmlspecialchars ($data ["jenis_bisnis"]);
    $idbisnis = htmlspecialchars ($data ["id_bisnis"]);
    $kodepos = htmlspecialchars ($data ["kode_pos"]);
    $kodekota = htmlspecialchars ($data ["kode_kota"]);
    

    $query = "INSERT INTO bisnis
                    VALUES
                    ('$namabisnis','$jenisbisnis','$idbisnis','$kodepos','$kodekota')
        ";
        mysqli_query ($conn , $query);

        return mysqli_affected_rows($conn);
}

function hapus ($idbisnis){
    global $conn ;
    mysqli_query($conn , "DELETE FROM bisnis WHERE id_bisnis=$idbisnis");
    return mysqli_affected_rows($conn);
}


function edit ($data) {
    global $conn;
    $namabisnis = htmlspecialchars ($data ["nama_bisnis"]);
    $jenisbisnis = htmlspecialchars ($data ["jenis_bisnis"]);
    $idbisnis = htmlspecialchars ($data ["id_bisnis"]);
    $kodepos = htmlspecialchars ($data ["kode_pos"]);
    $kodekota = htmlspecialchars ($data ["kode_kota"]);
    $query = "UPDATE bisnis SET 
                nama_bisnis = '$namabisnis',
                jenis_bisnis = '$jenisbisnis',
                id_bisnis = '$idbisnis',
                kode_pos = '$kodepos',
                kode_kota = '$kodekota'
                WHERE id_bisnis = $idbisnis
    ";
        mysqli_query ($conn , $query);

        return mysqli_affected_rows($conn);
}


?>