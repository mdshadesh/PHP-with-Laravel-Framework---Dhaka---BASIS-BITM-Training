<?php


namespace App\classes;


class Category
{
        public function getAllCategory()
        {
            return [
                0 => [
                    'Id' => 1,
                    'Name' => 'Man Fashion'
                ],
                1 => [
                    'id' => 2,
                    'Name' => 'Woman Fashion'
                ],
                2 => [
                    'id' => 3,
                    'Name' => 'Child Fashion'
                ],
                3 => [
                    'id' => 4,
                    'Name' => 'Electric Device'
                ],
                4 => [
                    'id' => 5,
                    'Name' => 'Gaming Device'
                ]
            ];
        }
}