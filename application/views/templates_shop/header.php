<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Shop Homepage - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url()?>assets/shop/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url()?>assets/shop/css/shop-homepage.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Start Bootstrap</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('register/tambah')?>">Register</a>
          </li>
          <li class="nav-item row ml-2">
            <?php if($this->session->userdata('nama')){?>
            <a class="nav-link" href="<?= base_url('auth/logout')?>">Welcome <?= $this->session->userdata('nama')?>
            <span class="btn btn-warning btn-sm">Logout</span></a>
            <a class="nav-link" href="<?= base_url('auth/ganti_password')?>">
            <span class="btn btn-primary btn-sm">Ganti Password</span></a>
            <?php }else{?>
              <a class="nav-link" href="<?= base_url('auth')?>">
            <span class="btn btn-success btn-sm">Login</span></a>
            <?php }?>
          </li>
        </ul>
      </div>
    </div>
  </nav>