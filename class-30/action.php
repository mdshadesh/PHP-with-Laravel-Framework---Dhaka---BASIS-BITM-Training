<?php

require_once 'vendor/autoload.php';

use App\classes\Auth;

if (isset($_GET['page']))
{
    if ($_GET['page'] == 'home')
    {
        include 'pages/home.php';
    }
    elseif ($_GET['page'] == 'signin')
    {
        include 'pages/signin.php';
    }
    elseif ($_GET['page'] == 'user-signin')
    {
        $auth = new Auth($_POST);
        $message = $auth->signIn();
        include 'pages/signin.php';
    }
    elseif ($_GET['page'] == 'logout')
    {
        $auth = new Auth();
        $message = $auth->singOut();
    }

}