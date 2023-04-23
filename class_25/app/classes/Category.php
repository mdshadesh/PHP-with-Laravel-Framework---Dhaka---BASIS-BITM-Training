<?php


namespace App\classes;

use App\classes\Product;

class Category
{
    public $product, $products;
    public $data= [];

    public function getAllCategories ()
    {
        return [
            0 => [
                'id' => 1,
                'name' => 'Man Fashion'
            ],
            1 => [
                'id' => 2,
                'name' => 'Woman Fashion'
            ],
            2 => [
                'id'    => 3,
                'name'  => 'Kid Fashion'
            ],
            3 => [
                'id' => 4,
                'name' => 'Electronics'
            ],
        ];
    }


    public function getCategoryWiseProduct($catagoryId)
    {
            $this->product = new Product();
            $this->products = $this->product->getAllProducts();

            foreach ($this->products as $product)
            {
                if ($product['category_id'] == $catagoryId)
                {
                    array_push($this->data, $product);
                }
            }
            return $this->data;
    }
}