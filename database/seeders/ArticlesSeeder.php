<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

use App\Models\Category;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Category::truncate();

        $articles =  [
            [
                'name' => 'Dell Latitude E4310',
                'details' => 'This is a Dell Laptop',
                'slug' => 'E4310 Family',
                'user_id' => 11,
                'is_used' => 0,
            ],
            [
                'name' => 'HP H2202',
                'details' => 'This is a HP Laptop',
                'slug' => 'H2202 Family',
                'user_id' => 12,
                'is_used' => 1,
            ],
            [
                'name' => 'OPPO A37',
                'details' => 'This is an OPPO Phone',
                'slug' => 'A37 Family',
                'user_id' => 4,
                'is_used' => 1,
            ],
            [
                'name' => 'OPPO F1',
                'details' => 'This is an OPPO Phone',
                'slug' => 'F1 Family',
                'user_id' => 4,
                'is_used' => 0,
            ],
            [
                'name' => 'Samsung J7',
                'details' => 'This is a Samsung Phone',
                'slug' => 'J7 Family',
                'user_id' => 5,
                'is_used' => 0,
            ],
            [
                'name' => 'IPHONE 13',
                'details' => 'This is an IPHONE',
                'slug' => 'IPH13 Family',
                'user_id' => 8,
                'is_used' => 1,
            ],
            [
                'name' => 'IPHONE 12',
                'details' => 'This is an IPHONE',
                'slug' => 'IPH12 Family',
                'user_id' => 8,
                'is_used' => 0,
            ],
            [
                'name' => 'IPHONE 14',
                'details' => 'This is an IPHONE',
                'slug' => 'IPH14 Family',
                'user_id' => 8,
                'is_used' => 1,
            ],

        ];


        // DB::table('categories')->insert($categories);
        Article::insert($articles);
    }
}