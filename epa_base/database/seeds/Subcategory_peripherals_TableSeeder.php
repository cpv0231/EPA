<?php

use Illuminate\Database\Seeder;
use App\Subcategory;
class Subcategory_peripherals_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $subcategory = new Subcategory;
    	$subcategory->category_id = '4';
    	$subcategory->subcategory_name = 'AVR & UPS';
    	$subcategory->save();
    	
    	$subcategory = new Subcategory;
    	$subcategory->category_id = '4';
    	$subcategory->subcategory_name = 'Cables';
    	$subcategory->save();
    	
    	$subcategory = new Subcategory;
    	$subcategory->category_id = '4';
    	$subcategory->subcategory_name = 'Camera';
    	$subcategory->save();
    	

        $subcategory = new Subcategory;
    	$subcategory->category_id = '4';
    	$subcategory->subcategory_name = 'Headset';
    	$subcategory->save();
    	
    	$subcategory = new Subcategory;
    	$subcategory->category_id = '4';
    	$subcategory->subcategory_name = 'Keyboards';
    	$subcategory->save();
    	
    	$subcategory = new Subcategory;
    	$subcategory->category_id = '4';
    	$subcategory->subcategory_name = 'Monitor';
    	$subcategory->save();
        $subcategory = new Subcategory;
    	$subcategory->category_id = '4';
    	$subcategory->subcategory_name = 'Mouse';
    	$subcategory->save();
    	
    	$subcategory = new Subcategory;
    	$subcategory->category_id = '4';
    	$subcategory->subcategory_name = 'Modem';
    	$subcategory->save();
    	
    	$subcategory = new Subcategory;
    	$subcategory->category_id = '4';
    	$subcategory->subcategory_name = 'Printer & Scanners';
    	$subcategory->save();


    	$subcategory = new Subcategory;
    	$subcategory->category_id = '4';
    	$subcategory->subcategory_name = 'Speaker';
    	$subcategory->save();

    	
    	$subcategory = new Subcategory;
    	$subcategory->category_id = '4';
    	$subcategory->subcategory_name = 'Storage devices';
    	$subcategory->save();

    	

    }
}
