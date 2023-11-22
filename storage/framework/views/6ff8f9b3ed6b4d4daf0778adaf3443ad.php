<!DOCTYPE HTML>
<html>
    <head>
        <title>Daftar</title>
        <link rel="stylesheet" href="css/style2.css">
    </head>
    <body>
        <div class="daftar">
          <h2>Registrasi</h2>

            <form method="POST" action="<?php echo e(url('registrasi')); ?>"> 
              <?php echo method_field('POST'); ?>
              <?php echo csrf_field(); ?>
                <input name="tujuan" type="hidden" value="Daftar" >
                <div class="Daftar">
               

                <label>Nik</label>
                <br>
                <input name="nik" type="text" required >
                <br>
                <label>Nama</label>
                <br>
                <input name="nama" type="text" required >
                <br>
                <label>Username</label>
                <br>
                <input name="username" type="text" required >
                <br>
                <label>Password</label>
                <br>
                <input name="password" type="password" required >
                <br>
                <label>Telp</label>
                <br>
                <input name="no_telp" type="telp" required >
                <br>

                <button type="submit">Daftar</button>
                <a href="<?php echo e(url('login')); ?>"><button type="submit">Kembali </a><?php /**PATH C:\xampp\htdocs\belajar-laravel-dhea\resources\views/registrasi.blade.php ENDPATH**/ ?>