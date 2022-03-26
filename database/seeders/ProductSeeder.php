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
        DB::table('product')->insert([
            [
                'name' => 'Lê',
                'id_category' => 1,
                'description' => 'Lê Đà Lạt nguyên chất, không hóa chất',
                'price' => 120000,
                'promotion_price' => 0,
                'image' => 'le.jpg'
            ],
            [
                'name' => 'Quýt',
                'id_category' => 1,
                'description' => 'Quýt Đà Lạt nguyên chất, không hóa chất',
                'price' => 150000,
                'promotion_price' => 0,
                'image' => 'quyt.jpg'
            ],
            [
                'name' => 'Táo',
                'id_category' => 1,
                'description' => 'Táo Đà Lạt nguyên chất, không hóa chất',
                'price' => 135000,
                'promotion_price' => 0,
                'image' => 'tao.jpg'
            ]
            ,
            [
                'name' => 'Cherry',
                'id_category' => 2,
                'description' => 'Cherry Đà Lạt nguyên chất, không hóa chất',
                'price' => 100000,
                'promotion_price' => 0,
                'image' => 'cherry.jpg'
            ]
            ,
            [
                'name' => 'Dưa lưới',
                'id_category' => 1,
                'description' => 'Dưa lưới Đà Lạt nguyên chất, không hóa chất',
                'price' => 200000,
                'promotion_price' => 0,
                'image' => 'dualuoi.jpg'
            ]
            ,
            [
                'name' => 'Khoai lang',
                'id_category' => 3,
                'description' => 'Khoai Đà Lạt nguyên chất, không hóa chất',
                'price' => 135000,
                'promotion_price' => 0,
                'image' => 'khoai.jpg'
            ]
        ]);
    }
}
