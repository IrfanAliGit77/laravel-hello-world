<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'title' => 'PASTA CAPELLINI',
                'image' => 'images/thumb1.png'
            ],
            [
                'title' => 'PASTA PILLUS',
                'image' => 'images/thumb2.jpg'
            ],
            [
                'title' => 'PASTA FUSILLI',
                'image' => 'images/thumb3.png'
            ]
        ]);
    }
}
