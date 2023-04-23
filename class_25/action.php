<?php
require_once 'vendor/autoload.php';

use App\classes\Category;
use App\classes\Product;

$category = new Category();
$categories = $category->getAllCategories();

if ($_GET['page'] == 'home')
{
    $product = new Product();
    $products = $product->getAllProducts();
    include 'pages/home.php';
}
elseif ($_GET['page'] == 'about')
{
    include 'pages/about.php';
}
elseif ($_GET['page'] == 'product-details')
{
    $product = new Product();
    $productDetails = $product->getProductDetails($_GET['product_id']);

    include 'pages/product-details.php';
}
elseif ($_GET['page'] == 'category')
{
    $category = new Category();
    $product = $category->getCategoryWiseProduct($_GET['id']);

    include 'pages/categoryPage.php';
}
