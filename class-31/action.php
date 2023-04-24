<?php

require_once 'vendor/autoload.php';
use App\classes\Series;
use App\classes\OddEven;
use App\classes\Auth;

if(isset($_GET['page']))
{
    if($_GET['page']=='home')
    {
        include 'pages/home.php';
    }
    elseif($_GET['page']=='about')
    {
        include 'pages/about.php';
    }
    elseif($_GET['page']=='series')
    {
        include 'pages/series.php';
    }
    elseif($_GET['page']=='series-result')
    {
       $series = new Series($_POST);
       $result = $series->series();
        include 'pages/series.php';
    }
    elseif($_GET['page']=='sum-of-series')
    {
        include 'pages/sumOfSeries.php';
    }
    elseif($_GET['page']=='sum-of-series-result')
    {
        $series = new Series($_POST);
        $result = $series->sumOfSeries();
        include 'pages/sumOfSeries.php';
    }
    elseif($_GET['page']=='odd-even')
    {
        include 'pages/oddEven.php';
    }
    elseif($_GET['page']=='odd-even-result')
    {
        $oddEven = new OddEven($_POST);
        $result = $oddEven->getOddEven();
        include 'pages/oddEven.php';
    }






    elseif($_GET['page']=='login')
    {
        include 'pages/login.php';
    }
    elseif($_GET['page']=='user-login')
    {
        $auth = new Auth($_POST);
        $result = $auth->checkUser();
        include 'pages/login.php';
    }



    elseif($_GET['page']=='logout')
    {
        $auth = new Auth($_POST);
        $result = $auth->logout();
//        include 'pages/logout.php';
    }
}
