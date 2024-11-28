<?php 
require '../config/config.php';

if (isset($_POST['btnInputDataBuku'])) {
    // Mengambil data dari form
    $nama = htmlspecialchars($_POST['nama']); 
    $deskripsi = $_POST['deskripsi'];
    $price = $_POST['harga'];

    // Membuat array associative 
    $data = [ 
        'nama' => $nama,
        'deskripsi' => $deskripsi,
        'price' => $price,
    ];

    // Validasi data
    $validasi = validasiBarang($data);

    if ($validasi == 0) {
        // Input data ke database
        $result = inputBarang($data, $koneksi);
        if ($result) {
            header("location:view.php?status=success"); // Jika berhasil, redirect ke view.php
            exit();
        } else {
            header("location:view.php?status=error"); // Jika gagal, redirect ke view.php dengan status error
            exit();
        }
    } else {
        header("location:view.php?status=validation_error"); // Jika validasi gagal
        exit();
    }
} else if (isset($_GET['del'])) {
    $id = $_GET['del'] ?? null;

    if ($id === null || !ctype_digit($id)) {
        header("location:view.php?errno=3"); 
        exit();
    } else {
        // Menghapus data berdasarkan ID
        $result = deleteBarang($koneksi, $id);
        if ($result) {
            header("location:view.php?success=1");
            exit();
        } else {
            header("location:view.php?errno=5"); 
            exit();
        }
    }
}
?>
