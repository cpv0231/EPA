<?php

use Illuminate\Database\Seeder;
use App\Subcategory;
class Subcategory_PC_parts_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$subcategory = new Subcategory;
    	$subcategory->category_id = '1';
    	$subcategory->subcategory_name = 'Case';
    	$subcategory->save();
    	
    	$subcategory = new Subcategory;
    	$subcategory->category_id = '1';
    	$subcategory->subcategory_name = 'CPU FAN';
    	$subcategory->save();
    	
    	$subcategory = new Subcategory;
    	$subcategory->category_id = '1';
    	$subcategory->subcategory_name = 'Graphics card';
    	$subcategory->save();
    	

    	$subcategory = new Subcategory;
    	$subcategory->category_id = '1';
    	$subcategory->subcategory_name = 'Hard Disk';
    	$subcategory->save();
    	
    	$subcategory = new Subcategory;
    	$subcategory->category_id = '1';
    	$subcategory->subcategory_name = 'Memory';
    	$subcategory->save();
    	
    	$subcategory = new Subcategory;
    	$subcategory->category_id = '1';
    	$subcategory->subcategory_name = 'Motherboard';
    	$subcategory->save();
    	
    	$subcategory = new Subcategory;
    	$subcategory->category_id = '1';
    	$subcategory->subcategory_name = 'NIC Cards';
    	$subcategory->save();
    	
    	$subcategory = new Subcategory;
    	$subcategory->category_id = '1';
    	$subcategory->subcategory_name = 'Power Supply';
    	$subcategory->save();
    	
    	$subcategory = new Subcategory;
    	$subcategory->category_id = '1';
    	$subcategory->subcategory_name = 'Processor';
    	$subcategory->save();
    	
    }
}
