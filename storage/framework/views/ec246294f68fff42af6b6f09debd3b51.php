<!DOCTYPE HTML>
<html>
    <head>
        <title> Login</title>
        <link rel="stylesheet" href="css/style1.css">
        
    </head>
   
    <body>
    <?php if(session("error")): ?>
        <div class="error"><?php echo e(session("error")); ?></div>
        <?php endif; ?>
        <div class="login">
          <h2>Login</h2>
            <form action="login" method="POST">
                 <?php echo method_field('POST'); ?>
                 <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <label for="username"class="form-label">Username</label><br>
                    <input type="username"class="form-control"id="username" name="username"><br>
                </div>
                <div class="mb-3">
                    <label for="password"class="form-label">Password</label><br>
                    <input type="password"class="form-control"id="password" name="password"><br>
                </div>
                    <button type="submit" name="" class="login-btn" style="margin-bottom: 15px;">Login</button>
                    <a href="<?php echo e(url('register')); ?>"><button type="button" class="btn btn-outline-secondary">Registrasi</button></a></button></a>
                    <a href="<?php echo e(url('register_petugas')); ?>"><button type="button" class="btn btn-outline-secondary">Registrasi Petugas</button></a></button></a>
            </form>
        </div>     
    </body>
</html><?php /**PATH C:\xampp\htdocs\belajar-laravel-dhea\resources\views/login.blade.php ENDPATH**/ ?>