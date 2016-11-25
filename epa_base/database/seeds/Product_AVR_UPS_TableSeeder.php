<?php

use Illuminate\Database\Seeder;
use App\Product;
class Product_AVR_UPS_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$avrUPS = new Product;
    	$avrUPS->category_id = '4';
    	$avrUPS->subcategory_id = '17';
    	$avrUPS->brand_id ='0';
    	$avrUPS->title ='APC BX1100LI-MS 1100VA UPS';
    	$avrUPS->price ='5950';
    	$avrUPS->description='APC BX1100LI-MS 1100VA UPS';
    	$avrUPS->stocks='5000';
    	$avrUPS->meta_description='';
    	$avrUPS->meta_keyword='';
    	$avrUPS->meta_title='avrUPS';
    	$avrUPS->save();

    			$avrUPS = new Product;
    	$avrUPS->category_id = '4';
    	$avrUPS->subcategory_id = '17';
    	$avrUPS->brand_id ='0';
    	$avrUPS->title ='APC BX625CI-MS 625VA BLK UPS';
    	$avrUPS->price ='2850';
    	$avrUPS->description='APC BX625CI-MS 625VA BLK UPS';
    	$avrUPS->stocks='5000';
    	$avrUPS->meta_description='';
    	$avrUPS->meta_keyword='';
    	$avrUPS->meta_title='avrUPS';
    	$avrUPS->save();

    			$avrUPS = new Product;
    	$avrUPS->category_id = '4';
    	$avrUPS->subcategory_id = '17';
    	$avrUPS->brand_id ='0';
    	$avrUPS->title ='SECURE 220V COMPUTER AVR';
    	$avrUPS->price ='300';
    	$avrUPS->description='SECURE 220V COMPUTER AVR';
    	$avrUPS->stocks='5000';
    	$avrUPS->meta_description='';
    	$avrUPS->meta_keyword='';
    	$avrUPS->meta_title='avrUPS';
    	$avrUPS->save();

    }
}
