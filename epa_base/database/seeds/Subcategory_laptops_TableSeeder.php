<?php

use Illuminate\Database\Seeder;
use App\Subcategory;
class Subcategory_laptops_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcategory = new Subcategory;
    	$subcategory->category_id = '2';
    	$subcategory->subcategory_name = 'Laptop';
    	$subcategory->save();
    	
    	$subcategory = new Subcategory;
    	$subcategory->category_id = '2';
    	$subcategory->subcategory_name = 'Battery';
    	$subcategory->save();
    	
    	$subcategory = new Subcategory;
    	$subcategory->category_id = '2';
    	$subcategory->subcategory_name = 'Charger';
    	$subcategory->save();
    	

    	$subcategory = new Subcategory;
    	$subcategory->category_id = '2';
    	$subcategory->subcategory_name = 'LCD Screen';
    	$subcategory->save();
    	
    
    }
}
