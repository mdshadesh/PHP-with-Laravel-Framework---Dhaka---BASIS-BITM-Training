<?php include 'includes/header.php' ?>
<?php
if(!isset($_SESSION['auth_id']))
{
    header("Location:action.php?page=login");
}
?>
<h1>This is About Page</h1>
<?php include 'includes/footer.php' ?>
