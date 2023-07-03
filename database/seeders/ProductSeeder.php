<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        DB::table('products')->insert([
            [
                'name'=>'Apple Mobile',
                'price'=>'10000',
                'description'=>'20GB RAM with much more features',
                'category'=>'mobile',
                'gallary'=>'https://www.au.com/english/mobile/'
            ],
            [
                'name'=>'OPPO Mobile',
                'price'=>'18000',
                'description'=>'8GB RAM with much more features',
                'category'=>'mobile',
                'gallary'=>'https://www.forbes.com/uk/advisor/mobile-phones/how-to-transfer-apps-music-photos-games-and-contacts-to-a-new-phone/'
            ],
            [
                'name'=>'Panasonic fridge',
                'price'=>'50000',
                'description'=>'Cooling more with much more features',
                'category'=>'Fridge',
                'gallary'=>'https://pakref.com/shop/refrigerator-and-fridge-price-in-pakistan/top-mount/haier-hrf-306-epb-epr-epc/'
            ],
            [
                'name'=>'LG TV',
                'price'=>'25000',
                'description'=>'SMART LED with much more features',
                'category'=>'TV',
                'gallary'=>'https://www.shutterstock.com/search/television'
            ],
        ]);
    }
}
