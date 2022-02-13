<?php


namespace App\classes;


class Product
{
    public function getAllProduct()
    {
        return[
            0 =>[
                'id' =>1,
                'name'=>'new Product',
                'price'=>'4500',
                'description'=>'Description',
                'image'=>'img01.jpg',
            ],
            1 =>[
                'id' =>2,
                'name'=>'new T-Shirt',
                'price'=>'5500',
                'description'=>'Description',
                'image'=>'img02.jpg',
            ],
            2 =>[
                'id' =>3,
                'name'=>'new Shari',
                'price'=>'10500',
                'description'=>'Description',
                'image'=>'img03.jpg',
            ],
        ];
    }
}