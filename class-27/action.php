<?php
require_once 'vendor/autoload.php';
use App\classes\FullName;

if (isset($_GET['page']))
{
    if ($_GET['page'] == 'home')
    {
        include 'pages/home.php';
    }
    elseif ($_GET['page'] == 'full-name')
    {
        include 'pages/fullName.php';
    }
    elseif ($_GET['page'] == 'get-full-name')
    {
        $fullName = new FullName($_POST);
        $result = $fullName->index();
        include 'pages/fullName.php';
    }
}


