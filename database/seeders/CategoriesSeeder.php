<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;

use App\Models\Category;

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Category::truncate();

        $categories =  [
            [
                'name' => 'Dell',
            ],
            [
                'name' => 'HP',
            ],
            [
                'name' => 'Acer',
            ],
            [
                'name' => 'Toshipa',
            ]
        ];


        // DB::table('categories')->insert($categories);
        Category::insert($categories);
    }
}
