<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')-> insert([
            'name' => 'Google Pixel 4',
            'price' => 'Rp. 7,000,000',
            'year' => 2019,
            'desc' => 'The Google Pixel 4 comes with a 90Hz 5.7" OLED display, a dual camera, 
            a Snapdragon 855 chipset, 6GB of RAM.',
            'image' => '#',
            'quantity' => 1
        ]);

        DB::table('products')-> insert([
            'name' => 'Samsung M52 5G',
            'price' => 'Rp. 4,355,000',
            'year' => 2019,
            'desc' => 'Similar to most phones at this price, the Galaxy M52 5G relies on the powerful Snapdragon 778G chip. 
            Samsung has optimised it well for the OneUI 3.1.',
            'image' => '#',
            'quantity' => 1
        ]);

        DB::table('products')-> insert([
            'name' => 'Samsung Galaxy Note 10',
            'price' => 'Rp. 7,200,000',
            'year' => 2019,
            'desc' => 'The Samsung Galaxy Note 10 stands out thanks to its dynamic AMOLED screen, high-quality camera.',
            'image' => '#',
            'quantity' => 1
        ]);

        DB::table('products')-> insert([
            'name' => 'Samsung Galaxy Z Fold 4',
            'price' => 'Rp. 27,950,000',
            'year' => 2021,
            'desc' => 'Is fold 4 worth buying?
            Samsungs Galaxy Z Fold 4 is a refined foldable, which is hard to beat. 
            This top-of-the-line phone—quite expectedly—leaves many other flagships miles.',
            'image' => '#',
            'quantity' => 1
        ]);

        DB::table('products')-> insert([
            'name' => 'Apple Iphone 13',
            'price' => 'Rp. 14,000,000',
            'year' => 2021,
            'desc' => 'With the A15 chip, the iPhone 13 models support many of the photographic capabilities that are available with the rear cameras.',
            'image' => '#',
            'quantity' => 1
        ]);

        DB::table('products')-> insert([
            'name' => 'One Plus 10T',
            'price' => 'Rp. 11,000,000',
            'year' => 2022,
            'desc' => 'The OnePlus 10T offers ultimate performance thanks to its combination of a powerful chipset.',
            'image' => '#',
            'quantity' => 1
        ]);
    }
}
