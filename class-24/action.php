<?php

require_once 'vendor/autoload.php';

use App\classes\Category;
use App\classes\Product;

$category = new Category();
$categorys = $category->getAllCategory();

if ($_GET['page'] == 'Home')
{
    $product = new Product();
    $products = $product->getAllProduct();


    include 'pages/Home.php';
}
elseif ($_GET['page'] == 'About')
{
    include 'pages/About.php';
}





elseif ($_GET['page'] == 'Gallery')
{
    include 'pages/Gallery.php';
}
elseif ($_GET['page'] == 'Project')
{
    include 'pages/Project.php';
}
elseif ($_GET['page'] == 'Contract')
{
    include 'pages/Contract.php';
}