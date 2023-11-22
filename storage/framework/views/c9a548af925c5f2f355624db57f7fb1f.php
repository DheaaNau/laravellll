<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="bs/css/bootstrap.min.css">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HOME</title>
  <link rel="stylesheet" href="css/home.css">
  
</head>
<body>
  <style>
    h1{
      text-align:center;
    }
  
  </style>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">PENGADUAN MASYARAKAT</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo e(url('login')); ?>">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo e(url('table')); ?>">Table</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo e(url('table_masyarakat')); ?>">Table Masyarakat</a>
        </li>
        
    </div>
  </div>
</nav>
<h1><?php echo e($TextJudul); ?></h1>
</body>
</html><?php /**PATH C:\xampp\htdocs\belajar-laravel-dhea\resources\views/home.blade.php ENDPATH**/ ?>