<?php
require_once 'vendor/autoload.php';

use App\classes\FileUpload;
use App\classes\User;

if (isset($_GET['page']))
{
    if ($_GET['page'] == 'home')
    {
        include 'pages/home.php';
    }
    elseif ($_GET['page'] == 'filemanagement')
    {
        include 'pages/filemanagement.php';
    }
    elseif ($_GET['page'] == 'get-filemanagement')
    {
        include 'pages/filemanagement.php';
    }
    elseif ($_GET['page'] == 'file-upload')
    {
        $fileUpload = new FileUpload($_POST , $_FILES);
        $result = $fileUpload->uploadFile();

        include 'pages/filemanagement.php';
    }



    elseif ($_GET['page'] == 'sing-In')
    {
        include 'pages/signIn.php';
    }elseif ($_GET['page'] == 'user-singIn')
    {
        $user = new User();
        $massage = $user->cheekUser();
        include "pages/signIn.php";
    }



    elseif ($_GET['page'] == 'sing-Up')
    {
        include 'pages/singUp.php';
    }

}



