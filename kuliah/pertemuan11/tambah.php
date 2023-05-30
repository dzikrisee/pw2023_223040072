<?php
require('functions.php');

$title = 'Form Tambah Data';

$students = query("SELECT * FROM mahasiswa");

// insert data ke tabel mahasiswa jika tombol diklik
if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
            alert('Data Berhasil di tambahkan');
            document.location.href = 'index.php';
        
        </script>";
    }
}

require('views/tambah.view.php');
