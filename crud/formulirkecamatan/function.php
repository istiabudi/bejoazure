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
    $namakecamatan = htmlspecialchars ($data ["nama_kecamatan"]);
    $kodepos = htmlspecialchars ($data ["kode_pos"]);
    $kodekota = htmlspecialchars ($data ["kode_kota"]); 
    

    $query = "INSERT INTO kecamatan
                    VALUES
                    ('$namakecamatan','$kodepos','$kodekota')
        ";
        mysqli_query ($conn , $query);

        return mysqli_affected_rows($conn);
}

function hapus ($kodepos){
    global $conn ;
    mysqli_query($conn , "DELETE FROM kecamatan WHERE kode_pos=$kodepos");
    return mysqli_affected_rows($conn);
}


function edit ($data) {
    global $conn;
    $namakecamatan = htmlspecialchars ($data ["nama_kecamatan"]);
    $kodepos = htmlspecialchars ($data ["kode_pos"]);
    $kodekota = htmlspecialchars ($data ["kode_kota"]); 
    $query = "UPDATE kecamatan SET 
                nama_kecamatan = '$namakecamatan',
                kode_pos = '$kodepos' ,
                kode_kota = '$kodekota' 
                WHERE kode_pos = $kodepos
    ";
        mysqli_query ($conn , $query);

        return mysqli_affected_rows($conn);
}


?>