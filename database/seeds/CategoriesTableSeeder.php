<?php

use Illuminate\Database\Seeder;

use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cate_one = new Category();
        $cate_one->slug = 'medics';
        $cate_one->name = 'Medics';
        $cate_one->save();

        $cate_two = new Category();
        $cate_two->slug = 'providers';
        $cate_two->name = 'Providers';
        $cate_two->save();
    }
}
