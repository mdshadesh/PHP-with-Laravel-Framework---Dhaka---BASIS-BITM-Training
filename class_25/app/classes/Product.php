<?php


namespace App\classes;


class Product
{
    private $products;
    public function getAllProducts ()
    {
        return [
            0 => [
                'id' => 1,
                'category_id'   => 1,
                'name' => 'Blue T Shirt',
                'price' => 17500,
                'size'  => 'XL',
                'image' => 'p1.jpg',
                'short_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'long_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consequuntur deserunt ducimus ea eaque eius est, harum laborum neque nisi omnis pariatur perferendis praesentium quae quas, rem tempore unde voluptate?',
            ],
            1 => [
                'id' => 2,
                'category_id'   => 1,
                'name' => 'Blue Pant',
                'price' => 7500,
                'size'  => 'XXL',
                'image' => 'p2.jpg',
                'short_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'long_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consequuntur deserunt ducimus ea eaque eius est, harum laborum neque nisi omnis pariatur perferendis praesentium quae quas, rem tempore unde voluptate?',
            ],
            2 => [
                'id' => 3,
                'category_id'   => 1,
                'name' => 'Gents Lungi',
                'price' => 17500,
                'size'  => '6 hat',
                'image' => 'm3.jpg',
                'short_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'long_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consequuntur deserunt ducimus ea eaque eius est, harum laborum neque nisi omnis pariatur perferendis praesentium quae quas, rem tempore unde voluptate?',
            ],
            3 => [
                'id' => 4,
                'category_id'   => 2,
                'name' => 'Gold Saree',
                'price' => 157500,
                'size'  => '13 hat',
                'image' => 'p6.jpg',
                'short_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'long_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consequuntur deserunt ducimus ea eaque eius est, harum laborum neque nisi omnis pariatur perferendis praesentium quae quas, rem tempore unde voluptate?',
            ],
            4 => [
                'id' => 5,
                'category_id'   => 2,
                'name' => 'White Three Piece',
                'price' => 17500,
                'size'  => 'M',
                'image' => 'w2.jpg',
                'short_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'long_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consequuntur deserunt ducimus ea eaque eius est, harum laborum neque nisi omnis pariatur perferendis praesentium quae quas, rem tempore unde voluptate?',
            ],
            5 => [
                'id' => 6,
                'category_id'   => 2,
                'name' => 'Grey Three Piece',
                'price' => 17500,
                'size'  => 'XL',
                'image' => 'w3.jpg',
                'short_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'long_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consequuntur deserunt ducimus ea eaque eius est, harum laborum neque nisi omnis pariatur perferendis praesentium quae quas, rem tempore unde voluptate?',
            ],
            6 => [
                'id' => 7,
                'category_id'   => 3,
                'name' => 'Kid T shirt',
                'price' => 7500,
                'size'  => 'M',
                'image' => 'k1.jpg',
                'short_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'long_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consequuntur deserunt ducimus ea eaque eius est, harum laborum neque nisi omnis pariatur perferendis praesentium quae quas, rem tempore unde voluptate?',
            ],
            7 => [
                'id' => 8,
                'category_id'   => 3,
                'name' => 'Kids Pant',
                'price' => 1500,
                'size'  => 'M',
                'image' => 'k2.jpg',
                'short_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'long_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consequuntur deserunt ducimus ea eaque eius est, harum laborum neque nisi omnis pariatur perferendis praesentium quae quas, rem tempore unde voluptate?',
            ],
            8 => [
                'id' => 9,
                'category_id'   => 3,
                'name' => 'Kid Shoe',
                'price' => 7500,
                'size'  => 'XL',
                'image' => 'k3.jpeg',
                'short_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'long_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consequuntur deserunt ducimus ea eaque eius est, harum laborum neque nisi omnis pariatur perferendis praesentium quae quas, rem tempore unde voluptate?',
            ],
            9 => [
                'id' => 10,
                'category_id'   => 4,
                'name' => 'Sony Mobile',
                'price' => 37500,
                'size'  => '6.5 inc',
                'image' => 'p3.jpg',
                'short_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'long_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consequuntur deserunt ducimus ea eaque eius est, harum laborum neque nisi omnis pariatur perferendis praesentium quae quas, rem tempore unde voluptate?',
            ],
            10 => [
                'id' => 11,
                'category_id'   => 4,
                'name' => 'Samsung Mobile',
                'price' => 77500,
                'size'  => '6.2 inc',
                'image' => 'p4.jpg',
                'short_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'long_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consequuntur deserunt ducimus ea eaque eius est, harum laborum neque nisi omnis pariatur perferendis praesentium quae quas, rem tempore unde voluptate?',
            ],
            11 => [
                'id' => 12,
                'category_id'   => 4,
                'name' => 'IPhone 4',
                'price' => 177500,
                'size'  => '5.2 inc',
                'image' => 'p5.jpg',
                'short_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'long_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consequuntur deserunt ducimus ea eaque eius est, harum laborum neque nisi omnis pariatur perferendis praesentium quae quas, rem tempore unde voluptate?',
            ],
        ];
    }

    public function getProductDetails ($productId)
    {

        $this->products = $this->getAllProducts();

        foreach ($this->products as $product)
        {
            if ($product['id'] == $productId)
            {
                return $product;
////                  echo "<pre>";
//                  print_r($product);
//                  exit();
            }

        }
        return "error";
    }
}