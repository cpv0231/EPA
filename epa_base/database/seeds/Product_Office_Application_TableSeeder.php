<?php

use Illuminate\Database\Seeder;
use App\Product;
class Product_Office_Application_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      	$office_app = new Product;
    	$office_app->category_id = '3';
    	$office_app->subcategory_id = '15';
    	$office_app->brand_id ='0';
    	$office_app->title ='MS OFFICE 365 PERSONAL 32-BIT/X64 1 YEAR SUBSCRIPTION';
    	$office_app->price ='2300';
    	$office_app->description='MS OFFICE 365 PERSONAL 32-BIT/X64 1 YEAR SUBSCRIPTION';
    	$office_app->stocks='5000';
    	$office_app->meta_description='';
    	$office_app->meta_keyword='';
    	$office_app->meta_title='office_app';
    	$office_app->save();

      	$office_app = new Product;
    	$office_app->category_id = '3';
    	$office_app->subcategory_id = '15';
    	$office_app->brand_id ='0';
    	$office_app->title ='MS OFFICE HOME AND BUSINESS 2016 FPP';
    	$office_app->price ='11000';
    	$office_app->description='MS OFFICE HOME AND BUSINESS 2016 FPP';
    	$office_app->stocks='5000';
    	$office_app->meta_description='';
    	$office_app->meta_keyword='';
    	$office_app->meta_title='office_app';
    	$office_app->save();

    	$office_app = new Product;
    	$office_app->category_id = '3';
    	$office_app->subcategory_id = '15';
    	$office_app->brand_id ='0';
    	$office_app->title ='MS OFFICE HOME AND STUDENT 2016 MEDIALESS';
    	$office_app->price ='4500';
    	$office_app->description='MS OFFICE HOME AND STUDENT 2016 MEDIALESS';
    	$office_app->stocks='5000';
    	$office_app->meta_description='';
    	$office_app->meta_keyword='';
    	$office_app->meta_title='office_app';
    	$office_app->save();

    }  
}
