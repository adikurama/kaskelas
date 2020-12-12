<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url ('../assets/css/style.css')?>">
    <link rel="stylesheet" href="<?= base_url ('../assets/bootstrap/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?= base_url ('../assets/fontawesome/css/all.min.css')?>">
    <link rel="stylesheet" href="<?= base_url ('../assets/css/login.css')?>">
    
    <title>Document</title>
</head>
<body>
<div class="container">
      <h4 class="text-center"><b><image src="<?= base_url ('../assets/img/logo.png')?>" height="40px">Login katalog cikara</b></h4>
      <hr>

    <form method="POST" action="<?php echo base_url('home/aksi_login')?>">
      <div class="form-group">
        <label>Email</label>

        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text"><i class="fas fa-laptop-code"></i></div>
          </div>
        <input type="text" name="email" class="form-control" placeholder="Masukan email anda">
        </div>
      </div>
      <div class="form-group">
        <label>Password</label>
         <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
          </div>
        <input type="Password" name="password" class="form-control" placeholder="Masukan Password anda">
      </div>
    </div>

      <button type="submit" class="btn btn-primary">Login</button>
       <button type="reset" class="btn btn-danger">Reset</button>
    </form>
    <div class="text-center">
    <a href="" data-toggle="modal" data-target="#exampleModal"> Daftar disini!</a>
    </div>

</form>
</html>