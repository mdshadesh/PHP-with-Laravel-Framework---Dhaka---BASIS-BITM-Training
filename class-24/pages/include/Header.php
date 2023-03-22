<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">

</head>
<body>

    <nav class="navbar navbar-expand bg-dark navbar-dark">
        <div class="container">
            <a href="" class="navbar-brand">LOGO</a>
            <ul class="navbar-nav mx-auto">
                <li><a href="action.php?page=Home" class="nav-link">Home</a></li>
                <li><a href="action.php?page=About" class="nav-link">About</a></li>
                <li><a href="action.php?page=Gallery" class="nav-link">Gallery</a></li>
                <li><a href="action.php?page=Project" class="nav-link">Project</a></li>

                <li class="dropdown">
                    <a href="action.php?page=Project" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Category</a>
                    <ul class="dropdown-menu">

                        <?php foreach ($categorys as $category) { ?>

                            <li><a href="" class="dropdown-item"><?php echo $category['Name']; ?></a></li>

                        <?php }  ?>

                        <!--                            <li><a href="" class="dropdown-item">Woman Fashion</a></li>-->
                        <!--                            <li><a href="" class="dropdown-item">Child Fashion</a></li>-->
                        <!--                            <li><a href="" class="dropdown-item">Electric Device</a></li>-->
                        <!--                            <li><a href="" class="dropdown-item">Gaming Device</a></li>-->

                    </ul>
                </li>

                <li><a href="action.php?page=Contract" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </nav>
