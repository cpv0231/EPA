<?php

use Illuminate\Database\Seeder;
use App\Subcategory;
class Subcategory_software_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcategory = new Subcategory;
    	$subcategory->category_id = '3';
    	$subcategory->subcategory_name = 'Anti virus';
    	$subcategory->save();
    	
    	$subcategory = new Subcategory;
    	$subcategory->category_id = '3';
    	$subcategory->subcategory_name = 'Office Application';
    	$subcategory->save();
    	
    	$subcategory = new Subcategory;
    	$subcategory->category_id = '3';
    	$subcategory->subcategory_name = 'Operating System';
    	$subcategory->save();
    	
    	
    }
}
