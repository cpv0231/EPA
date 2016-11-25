<?php

use Illuminate\Database\Seeder;
use App\Product;
class Product_Operating_System_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $OS = new Product;
    	$OS->category_id = '3';
    	$OS->subcategory_id = '16';
    	$OS->brand_id ='0';
    	$OS->title ='WINDOWS 8 PRO FPP UPGRADE';
    	$OS->price ='3250';
    	$OS->description='WINDOWS 8 PRO FPP UPGRADE';
    	$OS->stocks='5000';
    	$OS->meta_description='';
    	$OS->meta_keyword='';
    	$OS->meta_title='OS';
    	$OS->save();
    }
}
