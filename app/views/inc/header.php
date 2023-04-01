<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITENAME ?></title>

    <?php
        $dir = '../../../../vendor/';

        if (is_dir($dir)) {
            // echo "The directory $dir exists.";
            echo '<link rel="stylesheet" href="../../../../vendor/bootstrap-5.0.2-dist/css/bootstrap.min.css">';
            echo '<link rel="stylesheet" href="../../../../vendor/fontawesome-free-6.3.0-web/css/all.min.css">';
            // echo '<link rel="stylesheet" href="../../../../vendor/sweetalert2-11.7.3/package/dist/sweetalert2.min.js">';
            echo '<link rel="icon" href="../../../vendor/favicon.ico" type="image/x-icon">';
        } else {
            //   echo "The directory $dir does not exist.";
            echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">';
        }
    ?>
</head>

<body>
    <?php 
        $dir = '../../../../vendor/';

        if (is_dir($dir)) {
            // i think its gone wrong.
            echo '<link rel="stylesheet" href="../../../../vendor/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js">';
        } else {
            echo '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>';
            echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
            echo '<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>';
        }
    ?>
    
    <?php require APPROOT . '/views/inc/navbar.php'; ?>
    <div class="container-fluid">