<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Products = [
                [
                    'product_name' => 'Hyunda',
                    'product_description' => 'Modern and Expensive Car',
                    'photo' => 'image/car3.webp',
                    'price' => 700
                ],  

                [
                    'product_name' => 'Nisan',
                    'product_description' => 'Modern and Expensive Car',
                    'photo' => 'image/car7.jpg',
                    'price' => 900
                ], 
                [
                  'product_name' => 'Hyunda',
                'product_description' => 'Modern and Expensive Car ',
                'photo' => 'image/car9.jpg',
                'price' => 800
              ], 
              [
                'product_name' => 'Nisan',
              'product_description' => 'Modern and Expensive Car',
              'photo' => 'image/car11.avif',
              'price' => 900
            ],
          
              [
                'product_name' => 'Ford',
              'product_description' => 'Modern and Expensive Car',
              'photo' => 'image/car13.avif',
              'price' => 500
            ],
            [
              'product_name' => 'Ford',
            'product_description' => 'Modern and Expensive Car',
            'photo' => 'image/car_logo.jpg',
            'price' => 400
          ],
          [
            'product_name' => 'Ford',
          'product_description' => 'Modern and Expensive Car',
          'photo' => 'image/car13.avif',
          'price' => 600
        ],
        [
          'product_name' => 'Tata',
        'product_description' => 'Modern and Expensive Car',
        'photo' => 'image/car14.avif',
        'price' => 800
      ],
      [
        'product_name' => 'Mahindra',
      'product_description' => 'Modern and Expensive Car',
      'photo' => 'image/car15.avif',
      'price' => 900
    ],
    [
      'product_name' => 'Nissan',
    'product_description' => 'Modern and Expensive Car',
    'photo' => 'image/car16.avif',
    'price' => 600
    ],
    [
      'product_name' => 'Force Max',
    'product_description' => 'Modern and Expensive Car',
    'photo' => 'image/car21.webp',
    'price' => 600
    ],
    [
      'product_name' => 'Toyota Crown',
    'product_description' => 'Modern and Expensive Car',
    'photo' => 'image/car17.avif',
    'price' => 1000
    ],
    [
      'product_name' => 'Tundra',
    'product_description' => 'Modern and Expensive Car',
    'photo' => 'image/car19.avif',
    'price' => 600
    ],   
        ];
        foreach ($Products as $key => $value) {
            Product::create($value);
    }
}
}
    

