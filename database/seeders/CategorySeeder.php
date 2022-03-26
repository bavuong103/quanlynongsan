<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('category')->insert([
            [
                'name' => 'Trái cây Đà Lạt',
                
            ],
            [
                'name' => 'Trái cây nhập khẩu',
                
            ],
            [
                'name' => 'Rau củ',
                
            ]
        ]);
    }
}
