<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'Samsung led tv',
                'price'=>'420',
                'category'=>'tv',
                'description'=>'A smart led tv with 43 inch',
                'gallery'=>'https://images.samsung.com/is/image/samsung/in-full-hd-tv-te50fa-ua43te50fakxxl-frontblack-231881877?$720_576_PNG$'
            ],
            [
                'name'=>'Eartic',
                'price'=>'350',
                'category'=>'tv',
                'description'=>'A smart led tv with 32 inch',
                'gallery'=>'https://m.media-amazon.com/images/I/81t2A6uhm4L._SL1500_.jpg',
            ],
            [
                'name'=>'Mi tv',
                'price'=>'510',
                'category'=>'tv',
                'description'=>'A smart led tv with 50 inch',
                'gallery'=>'https://images.indianexpress.com/2019/10/Mi-TV_BIG_LEAD.jpg'
            ],
            [
                'name'=>'Real me',
                'price'=>'400',
                'category'=>'tv',
                'description'=>'A smart led tv with 43 inch',
                'gallery'=>'https://rukminim1.flixcart.com/image/416/416/kae95e80/television/r/g/m/realme-tv-43-original-imafrz78gbgx3zz5.jpeg?q=70'
            ],
            [
                'name'=>'One plus',
                'price'=>'420',
                'category'=>'tv',
                'description'=>'A smart led tv with 32 inch',
                'gallery'=>'https://m.media-amazon.com/images/I/71vZypjNkPS._SL1500_.jpg'
            ]
        ]);
    }
}
