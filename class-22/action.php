<?php

//echo $_GET['page'];

//echo "hi shadesh";


if ($_GET['page'] == 'home')
{
//    echo "Allah Help Us";
    include 'pages/home.php';
}
elseif ($_GET['page'] == 'about')
{
    include 'pages/about.php';
}
elseif ($_GET['page'] == 'contact')
{
    include 'pages/contact.php';
}