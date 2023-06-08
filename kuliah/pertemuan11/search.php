<?php
// Misalkan $students adalah array data mahasiswa yang ingin Anda filter berdasarkan keyword pencarian
$students = [
    // Data mahasiswa
];

$keyword = isset($_GET['keyword']) ? $_GET['keyword'] : ''; // Memeriksa apakah keyword ada atau tidak
$filteredStudents = [];

if (!empty($keyword)) {
    foreach ($students as $student) {
        if (strpos($student['nama'], $keyword) !== false || strpos($student['jurusan'], $keyword) !== false) {
            $filteredStudents[] = $student;
        }
    }
} else {
    $filteredStudents = $students; // Jika keyword kosong, semua data mahasiswa akan ditampilkan
}

foreach ($filteredStudents as $student) {
    echo '
    <tr>
      <th scope="row">' . $student['nim'] . '</th>
      <td><img src="img/' . $student['gambar'] . '" width="50"></td>
      <td>' . $student['nama'] . '</td>
      <td>' . $student['email'] . '</td>
      <td>' . $student['jurusan'] . '</td>
      <td>
        <a href="#" class="badge text-bg-warning">ubah</a> |
        <a href="#" class="badge text-bg-danger">hapus</a>
      </td>
    </tr>
  ';
}
