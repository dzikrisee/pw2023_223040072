<?php require('partials/header.php'); ?>
<?php require('partials/nav.php'); ?>


<div class="container mt-3">
  <h1>Halaman Home</h1>

  <h3>Daftar Mahasiswa</h3>

  <a href="tambah.php" class="btn btn-outline-warning mt-2">Tambah Data Mahasiswa</a>

  <div class="row">
    <div class="col-md-6">
      <form action="" method="get">
        <div class="input-group my-3">
          <input type="search" class="form-control" placeholder="Cari Data Mahasiswa" name="keyword" id="keyword">
          <button type="submit" class="btn btn-outline-warning" name="button-search" id="button-search">Cari</button>
        </div>
      </form>
    </div>
  </div>

  <div id="search-container">


    <?php if ($students) : ?>


      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Gambar</th>
            <th scope="col">NIM</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Jurusan</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($students as $student) : ?>
            <tr>
              <th scope="row"><?= $i++; ?></th>
              <td>
                <img src="img/<?= $student['gambar']; ?>" width="50">
              </td>
              <td><?= $student['nim']; ?></td>
              <td><?= $student['nama']; ?></td>
              <td><?= $student['email']; ?></td>
              <td><?= $student['jurusan']; ?></td>
              <td>
                <a href="" class="badge text-bg-warning">ubah</a> |
                <a href="" class="badge text-bg-danger">hapus</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    <?php else : ?>
      <div class="row">
        <div class="col-md-6">
          <div class="alert alert-danger" role="alert">
            Data yang dicari tidak ada!
          </div>
        </div>
      </div>
    <?php endif; ?>
  </div>
</div>

<!-- <script>
  var keywordInput = document.getElementById('keyword');
  var mahasiswaTable = document.getElementById('mahasiswa-table');
  var studentsData = <?= json_encode($students); ?>;

  keywordInput.addEventListener('keyup', function() {
    var keyword = keywordInput.value.toLowerCase();

    var filteredStudents = studentsData.filter(function(student) {
      return (
        student.nama.toLowerCase().includes(keyword) ||
        student.jurusan.toLowerCase().includes(keyword)
      );
    });

    var html = filteredStudents.map(function(student) {
      return `
        <tr>
          <th scope="row">${student.nim}</th>
          <td><img src="img/${student.gambar}" width="50"></td>
          <td>${student.nama}</td>
          <td>${student.email}</td>
          <td>${student.jurusan}</td>
          <td>
            <a href="#" class="badge text-bg-warning">ubah</a> |
            <a href="#" class="badge text-bg-danger">hapus</a>
          </td>
        </tr>
      `;
    }).join('');

    mahasiswaTable.innerHTML = filteredStudents.length > 0 ? html : '<tr><td colspan="7">Data tidak ditemukan</td></tr>';
  });
</script> -->

<?php require('partials/footer.php'); ?>