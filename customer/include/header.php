<?php
session_start();
include_once('include/dbcon.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Furniture Shop</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/css/style" rel="stylesheet" type="text/css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap.css.map" rel="stylesheet">
  <link href="css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="/css/header.css">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>

  <header>

    <?php
    if (isset($_SESSION['email'])) {
      $cust_id =  $_SESSION['id'];
      $query = "SELECT * FROM cart Where cust_id=$cust_id";
      $run   = mysqli_query($con, $query);

      $count = mysqli_num_rows($run);
    } else {
      $count = 0;
    }
    ?>
    <!--header --->
    <?php

    if (isset($_SESSION['email'])) {

    ?>
      <li class="nav-item ml-5"><a class="nav-link" href="index.php"><i class="far fa-user top-icon"></i> Account</a></li>
    <?php }
    ?>
    

    </ul>
    </div>
    </nav>
    <nav class="navbar navbar-expand-md fixed-top">
      <a href="../index.php" class="navbar-brand">
        <img src="/img/logo-store.jpg" width="60px" height="60px">
        <sapn class="navbar__name ml-2" style="color: #f36f21">Furniture Shop</sapn>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapisblenav" aria-controls="collapsiblenav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapisblenav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a class="nav-link" href="../index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="../product.php">Products</a></li>
          <li class="nav-item"><a class="nav-link" href="../about-us.php">About us</a></li>
          <li class="nav-item"><a class="nav-link" href="../contact-us.php">Contact us</a></li>

          <?php if (!isset($_SESSION['email'])) {
          ?>
            <li class="nav-item"><a class="nav-link" href="sign-in.php"> Login</a></li>
            <li class="nav-item mr-4 "><a class="nav-link " href="register.php"><button type="button" class="btn btn__yellow "> Register</button></a></li>
          <?php
          }

          if (isset($_SESSION['email'])) {


          ?>
            <li class="nav-item ml-5"><a class="nav-link" href="../customer/index.php"><i class="far fa-user top-icon"></i> Account</a></li>
          <?php }
          ?>
          <li class="nav-item mr-2"><a class="nav-link" href="../cart.php"><i class="fal fa-shopping-cart top-icon"></i><span class="badge " style="position:absolute; margin-left:-5px;"><?php echo $count; ?> </span></a></li>

        </ul>
      </div>
    </nav>
  </header>