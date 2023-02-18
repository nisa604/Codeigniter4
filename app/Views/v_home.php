<?php
/**
 * @Author: Your name
 * @Date:   2023-02-15 10:48:58
 * @Last Modified by:   Your name
 * @Last Modified time: 2023-02-15 11:30:36
 */
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
  </head>
  <body >
    <div class="container">
      <!-- <div class="jumbotron mt-5"> -->
            <h1> Selamat Datang <b><?= $username ?></b>!!</h1>
            <hr class="my-4">
            <p>Haii, selamat datangg</p>
            <p class="lead">
              <a class="btn btn-danger" href="<?= base_url('login') ?>" role="button">Logout</a>
            </p>
      <!-- </div> -->
    </div>
  </body>
</html>