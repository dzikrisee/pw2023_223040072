<?php require('partials/nav.php') ?>
<?php require('partials/header.php') ?>    
<?php require('partials/footer.php') ?>



<!--  -->
    <div class="container">
        <h1 class="mt-2">Halaman Home</h1>

        <h3>Daftar Mahasiswa</h3>
        
        <?php foreach($students as $student) : ?>
            <ul>
                <li>nama : <?= $student["nama"]; ?></li>
                <li>npm : <?= $student["npm"]; ?></li>
                <li>email : <?= $student["email"]; ?></li>
            </ul>
        <?php endforeach; ?>
    </div>
<!--  -->