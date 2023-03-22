<?php


namespace App\classes;


class Product
{
        public $Products;

        public function __construct()
        {
            $this->Products = [
                0 => [
                    'id' => 1,
                    'title' => 'Pink T shirt ',
                    'price' => 17500,
                    'color' =>'Pink',
                    'size' => 'L',
                    'image' => 'b.jpg',
                    'short_description' => 'Specifications of Grey Cotton Short Sleeve T-Shirt for Men BrandNo BrandSKU136918705_BD-1059194591Main MaterialCotton',
                    'long_description' => 'Product details of Grey Cotton Short Sleeve T-Shirt for Men Product Type: Stylish Half Sleeve T-Shirt For Men Colour: Pink Material: Cotton Gender: Men Stylish Design High Quality Cotton Fabric Fabric: 100% Cotton Fabrication: 120+ GSM',
                ],
                1 => [
                    'id' => 2,
                    'title' => 'Blue T shirt ',
                    'price' => 1700,
                    'color' =>'Blue',
                    'size' => 'L',
                    'image' => 'c.jpg',
                    'short_description' => 'Specifications of Grey Cotton Short Sleeve T-Shirt for Men BrandNo BrandSKU136918705_BD-1059194591Main MaterialCotton',
                    'long_description' => 'Product details of Grey Cotton Short Sleeve T-Shirt for Men Product Type: Stylish Half Sleeve T-Shirt For Men Colour: '
                ],
                2 => [
                    'id' => 3,
                    'title' => 'White T shirt ',
                    'price' => 19500,
                    'color' =>'White',
                    'size' => 'L',
                    'image' => 'a.jpg',
                    'short_description' => 'Specifications of Grey Cotton Short Sleeve T-Shirt for Men BrandNo BrandSKU136918705_BD-1059194591Main MaterialCotton',
                    'long_description' => 'Product details of Grey Cotton Short Sleeve T-Shirt for Men Product Type: Stylish Half Sleeve T-Shirt For Men Colour: '
                ],
                3 => [
                    'id' => 4,
                    'title' => 'Gray T shirt ',
                    'price' => 35500,
                    'color' =>'Gray',
                    'size' => 'L',
                    'image' => 'd.jpg',
                    'short_description' => 'Specifications of Grey Cotton Short Sleeve T-Shirt for Men BrandNo BrandSKU136918705_BD-1059194591Main MaterialCotton',
                    'long_description' => 'Product details of Grey Cotton Short Sleeve T-Shirt for Men Product Type: Stylish Half Sleeve T-Shirt For Men Colour: '
                ],
                4 => [
                    'id' => 5,
                    'title' => 'black T shirt ',
                    'price' => 68500,
                    'color' =>'Black',
                    'size' => 'L',
                    'image' => 'd.jpg',
                    'short_description' => 'Specifications of Grey Cotton Short Sleeve T-Shirt for Men BrandNo BrandSKU136918705_BD-1059194591Main MaterialCotton',
                    'long_description' => 'Product details of Grey Cotton Short Sleeve T-Shirt for Men Product Type: Stylish Half Sleeve T-Shirt For Men Colour: '],
                5 => [
                    'id' => 6,
                    'title' => 'White And Ash Color Tshirts - Tshirt T shirt ',
                    'price' => 17500,
                    'color' =>'Tshirts',
                    'size' => 'L',
                    'image' => 'e.jpg',
                    'short_description' => 'Specifications of Grey Cotton Short Sleeve T-Shirt for Men BrandNo BrandSKU136918705_BD-1059194591Main MaterialCotton',
                    'long_description' => 'Product details of Grey Cotton Short Sleeve T-Shirt for Men Product Type: Stylish Half Sleeve T-Shirt For Men Colour: '],
                6 => [
                    'id' => 7,
                    'title' => 'T shirt ',
                    'price' => 17500,
                    'color' =>'Pink',
                    'size' => 'L',
                    'image' => 'f.jpg',
                    'short_description' => 'Specifications of Grey Cotton Short Sleeve T-Shirt for Men BrandNo BrandSKU136918705_BD-1059194591Main MaterialCotton',
                    'long_description' => 'Product details of Grey Cotton Short Sleeve T-Shirt for Men Product Type: Stylish Half Sleeve T-Shirt For Men Colour: '],
                7 => [
                    'id' => 8,
                    'title' => 'T shirt ',
                    'price' => 17500,
                    'color' =>'Gray',
                    'size' => 'L',
                    'image' => 'f.jpg',
                    'short_description' => 'Specifications of Grey Cotton Short Sleeve T-Shirt for Men BrandNo BrandSKU136918705_BD-1059194591Main MaterialCotton',
                    'long_description' => 'Product details of Grey Cotton Short Sleeve T-Shirt for Men Product Type: Stylish Half Sleeve T-Shirt For Men Colour: '
                ],
            ];
        }

        public function index()
        {
            return $this->Products;
        }

        public function getProductDetails($productId)
        {
            foreach ($this->Products as $product)
            {
                if($product['id'] == $productId)
                {
                    return $product;
                }
            }
        }
}