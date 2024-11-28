<?php

function validasiBarang ($data){

    foreach ($data as $barang => $value){

        $value = trim($value);
        if ($value === '' || $value === null || $value === false)
        return $barang;
    }
    return 0;
}

function inputBarang($data, $koneksi){
    $nama = $data['nama'];
    $deskripsi= $data['deskripsi'];
    $price = $data['price'];


    $sql = "INSERT INTO produk (nama, deskripsi, price) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($koneksi, $sql);
    if($stmt === false) 
    {
        return "failed";
    }

    mysqli_stmt_bind_param($stmt, 'ssi', $nama, $deskripsi, $price);
    $result = mysqli_stmt_execute($stmt);

    if(!$result)
        return false;
    
    mysqli_stmt_close($stmt);
    return true;  
}

function tampilBarang($koneksi){
    $sql  = "SELECT * FROM produk"; // query untuk menampilkan semua data 
    $stmt = mysqli_query($koneksi, $sql);

    // $result = mysqli_fetch_array($stmt);

    if(mysqli_num_rows($stmt) > 0) return mysqli_fetch_all($stmt, MYSQLI_ASSOC);
    else return false;
}

function deleteBarang($koneksi, $id){
    $sql = "DELETE FROM produk WHERE id = ?";
    $stmt = mysqli_prepare($koneksi, $sql);

    mysqli_stmt_bind_param($stmt, "i", $id);
    $result = mysqli_stmt_execute($stmt);

    if($result) return true;
    else return false;
}
?>