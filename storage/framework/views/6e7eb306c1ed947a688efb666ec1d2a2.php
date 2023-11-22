<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<link rel="stylesheet" href=<?php echo e(asset("bs/css/bootstrap.min.css")); ?>>
  <style>
    body{
      background-color: grey
    }
    
    

  </style>
  <body>

    <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
      <div class="container-fluid">
        <a class="navbar-brand">Detail</a>
        <a class="nav-link active" aria-current="page" a href="<?php echo e(url('table')); ?>"><button type="button" class="btn btn-outline-secondary">Bek</button></a>
      </div>
    </nav>
    <br>
<div class="container">
  <table class="table table-dark table-striped">
  
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">nik</th>
        <th scope="col">Pengaduan</th>
        <th scope="col">Tanggal</th>
        <th scope="col">Foto</th>
        <th scope="col">status</th>
      </tr>
    </thead>
    <tbody>
      <?php $__currentLoopData = $pengaduan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pengaduan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo e($pengaduan->id_pengaduan); ?></td>
        <td><?php echo e($pengaduan->nik); ?></td>
        <td><?php echo e($pengaduan->isi_laporan); ?></td>
        <td><?php echo e($pengaduan->tgl_pengaduan); ?></td>
        <td><?php echo e($pengaduan->foto); ?></td>
        <td><?php echo e($pengaduan->status); ?></td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
  </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\belajar-laravel-dhea\resources\views/detailpengaduan.blade.php ENDPATH**/ ?>