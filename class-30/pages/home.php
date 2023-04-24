<?php include "includes/header.php" ?>

<?php
    if (!isset($_SESSION['id']))
    {
        header("Location: action.php?page=signin");
    }
?>

<h1><?php
//    session_start();


//    $_SESSION['city'] = 'Dhaka';

//    echo $_SESSION['city'];

//    unset($_SESSION['city']);
    ?></h1>

    <h1 class="text-center">Home Page</h1>

<?php include "includes/footer.php" ?>
