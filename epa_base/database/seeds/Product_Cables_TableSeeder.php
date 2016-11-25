<?php

use Illuminate\Database\Seeder;
use App\Product;
class Product_Cables_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       	$cable = new Product;
    	$cable->category_id = '4';
    	$cable->subcategory_id = '18';
    	$cable->brand_id ='0';
    	$cable->title ='HDMI CABLE';
    	$cable->price ='480';
    	$cable->description='HDMI CABLE';
    	$cable->stocks='5000';
    	$cable->meta_description='';
    	$cable->meta_keyword='';
    	$cable->meta_title='cable';
    	$cable->save();

       	$cable = new Product;
    	$cable->category_id = '4';
    	$cable->subcategory_id = '18';
    	$cable->brand_id ='0';
    	$cable->title ='PRINTER CABLE';
    	$cable->price ='180';
    	$cable->description='PRINTER CABLE';
    	$cable->stocks='5000';
    	$cable->meta_description='';
    	$cable->meta_keyword='';
    	$cable->meta_title='cable';
    	$cable->save();

    	$cable = new Product;
    	$cable->category_id = '4';
    	$cable->subcategory_id = '18';
    	$cable->brand_id ='0';
    	$cable->title ='SATA TO USB 3.0 CABLE';
    	$cable->price ='450';
    	$cable->description='SATA TO USB 3.0 CABLE';
    	$cable->stocks='5000';
    	$cable->meta_description='';
    	$cable->meta_keyword='';
    	$cable->meta_title='cable';
    	$cable->save();

    	$cable = new Product;
    	$cable->category_id = '4';
    	$cable->subcategory_id = '18';
    	$cable->brand_id ='0';
    	$cable->title ='VGA CABLE';
    	$cable->price ='480';
    	$cable->description='VGA CABLE';
    	$cable->stocks='5000';
    	$cable->meta_description='';
    	$cable->meta_keyword='';
    	$cable->meta_title='cable';
    	$cable->save();

    }
}
