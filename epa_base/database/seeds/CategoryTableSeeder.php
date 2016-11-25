<?php

use Illuminate\Database\Seeder;
use App\Category;
class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category;
		$category->category_name = 'PC parts';
		$category->category_image = '1.jpg';
		$category->save();
		

        $category = new Category;
		$category->category_name = 'Laptops';
		$category->category_image = '2.jpg';
		$category->save();
		

        $category = new Category;
		$category->category_name = 'Software';
		$category->category_image = '3.jpg';
		$category->save();
		

        $category = new Category;
		$category->category_name = 'Peripherals';
		$category->category_image = '4.jpg';
		$category->save();
			
    }
}
