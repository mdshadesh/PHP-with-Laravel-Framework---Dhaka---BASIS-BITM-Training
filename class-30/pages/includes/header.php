<?php
    session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/all.css" />
    <link rel="stylesheet" href="assets/css/bootstrap.css" />
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a href="" class="navbar-brand">LOGO</a>
        <ul class="navbar-nav mx-auto">

            <?php if (isset($_SESSION['id'])) { ?>

                <li><a href="action.php?page=home" class="nav-link">Home</a></li>
                <li><a href="action.php?page=home" class="nav-link">About</a></li>
                <li><a href="action.php?page=home" class="nav-link">Portfolio</a></li>
                <li><a href="action.php?page=home" class="nav-link">Contact</a></li>
                <li><a href="action.php?page=logout" class="nav-link">Log Out</a></li>

            <?php } else { ?>

                <li><a href="action.php?page=signin" class="nav-link">Sign In</a></li>

            <?php } ?>
        </ul>
    </div>
</nav>