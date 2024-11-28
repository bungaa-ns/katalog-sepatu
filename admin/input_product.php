<?php
require_once "../config/config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Barang</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="w-full max-w-2xl bg-white shadow-2xl rounded-xl p-10">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-extrabold text-gray-900">Input Data Barang</h2>
            <p class="mt-2 text-sm text-gray-600">Lengkapi informasi barang yang akan dimasukkan</p>
        </div>

        <form method="post" action="data.php" enctype="multipart/form-data" class="space-y-6">
            <div class="grid grid-cols-1 gap-6">
                <div>
                    <label for="nama barang" class="block text-sm font-medium text-gray-700 mb-2">Nama Barang</label>
                    <input 
                        type="text" 
                        name="nama" 
                        id="judul"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-300"
                        placeholder="Masukkan nama barang"
                        required
                    >
                </div>

                <div>
                    <label for="deskripsi barang" class="block text-sm font-medium text-gray-700 mb-2">Deskripsi Barang</label>
                    <textarea 
                        name="deskripsi" 
                        id="deskripsi"
                        rows="4"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-300"
                        placeholder="Berikan deskripsi singkat barang"
                    ></textarea>
                </div>

                <div>
                    <label for="price" class="block text-sm font-medium text-gray-700 mb-2">Price</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <span class="text-gray-500 sm:text-sm">Rp</span>
                        </div>
                        <input 
                            type="number" 
                            name="harga" 
                            id="harga"
                            min="0"
                            step="1000"
                            class="w-full px-4 py-3 pl-10 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-300"
                            placeholder="Masukkan harga barang"
                            required
                        >
                    </div>
                </div>
            <div>
                <button 
                    type="submit" 
                    name="btnInputDataBuku"
                    class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-300"
                >
                    Input Data Barang
                </button>
            </div>
        </form>
    </div>
</body>
</html>