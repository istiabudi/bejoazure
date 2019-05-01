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
    $namakota = htmlspecialchars ($data ["nama_kota"]);
    $kodekota = htmlspecialchars ($data ["kode_kota"]);
    $query = "INSERT INTO kota
                    VALUES
                    ('$namakota','$kodekota')
        ";
        mysqli_query ($conn , $query);

        return mysqli_affected_rows($conn);
}

function hapus ($kodekota){
    global $conn ;
    mysqli_query($conn , "DELETE FROM kota WHERE kode_kota=$kodekota");
    return mysqli_affected_rows($conn);
}


function edit ($data) {
    global $conn;

    $kodekota = $data ["kode_kota"];
    $namakota = htmlspecialchars ($data ["nama_kota"]);
    $kodekota = htmlspecialchars ($data ["kode_kota"]);
    $query = "UPDATE kota SET 
                nama_kota = '$namakota',
                kode_kota = $kodekota 
                WHERE kode_kota = $kodekota
    ";
        mysqli_query ($conn , $query);

        return mysqli_affected_rows($conn);
}


?>