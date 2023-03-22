<?php

require_once 'vendor/autoload.php';

use App\classes\Product;



if ($_GET['page'] == 'home')
{
    $product = new Product();
    $products = $product->index();


    include 'pages/home.php';
}
elseif ($_GET['page'] == 'product-details')
{
    $product = new Product();
    $productDetails = $product->getProductDetails($_GET['id']);
    include 'pages/product-details.php';
}



elseif ($_GET['page'] == 'about')
{
    include 'pages/about.php';
}
elseif ($_GET['page'] == 'contact')
{
    include 'pages/contact.php';
}
elseif ($_GET['page'] == 'Gallery')
{
    include 'pages/Gallery.php';
}
elseif ($_GET['page'] == 'Project')
{
    include 'pages/Project.php';
}
elseif ($_GET['page'] == 'Portfolio')
{
    include 'pages/Portfolio.php';
}
elseif ($_GET['page'] == 'Service')
{
    include 'pages/Service.php';
}
