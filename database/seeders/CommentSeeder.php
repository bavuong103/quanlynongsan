<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('comment')->insert([
            [
                'name' => 'huy',
                'content' => 'ngon quá',
                'product_id' => 1
            ],
            [
                'name' => 'huy',
                'content' => 'Còn khuyến mãi không admin?',
                'product_id' => 1
            ]
        ]);
    }
}
