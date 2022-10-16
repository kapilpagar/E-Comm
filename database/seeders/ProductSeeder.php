<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
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
                'name' => 'RP mobile',
                'price' => '300',
                'categaory' => 'mobile',
                'description' => 'A smartphone with 8 gb RAM & 128 gb ROM',
                'gallery' => 'https://www.tradeinn.com/f/13889/138892386_5/xiaomi-redmi-9a-2gb-32gb-6.5-dual-sim-smartphone.jpg',
            ],
            [
                'name' => 'VP mobile',
                'price' => '400',
                'categaory' => 'mobile',
                'description' => 'A smartphone with 8 gb RAM & 128 gb ROM',
                'gallery' => 'https://www.idgcdn.com.au/article/images/740x500/dimg/dreamstime_xl_229900614_edited.jpg',
            ],
            [
                'name' => 'RP mobile',
                'price' => '500',
                'categaory' => 'mobile',
                'description' => 'A smartphone with 8 gb RAM & 128 gb ROM',
                'gallery' => 'https://img.etimg.com/photo/msid-92225858,quality-100/oneplus-9-5g-smartphone.jpg',
            ],
        ]);
    }
}
