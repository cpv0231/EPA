<?php

use Illuminate\Database\Seeder;
use App\Product;
class Product_Camera_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       	$camera = new Product;
    	$camera->category_id = '4';
    	$camera->subcategory_id = '19';
    	$camera->brand_id ='0';
    	$camera->title ='A4TECH PK-635G ANTI-GLARE 16MP W/MIC USB WEBCAM';
    	$camera->price ='580';
    	$camera->description='A4TECH PK-635G ANTI-GLARE 16MP W/MIC USB WEBCAM';
    	$camera->stocks='5000';
    	$camera->meta_description='';
    	$camera->meta_keyword='';
    	$camera->meta_title='camera';
    	$camera->save();

    	$camera = new Product;
    	$camera->category_id = '4';
    	$camera->subcategory_id = '19';
    	$camera->brand_id ='0';
    	$camera->title ='LOGITECH C615 8MP FULL HD WEBCAM';
    	$camera->price ='2850';
    	$camera->description='LOGITECH C615 8MP FULL HD WEBCAM';
    	$camera->stocks='5000';
    	$camera->meta_description='';
    	$camera->meta_keyword='';
    	$camera->meta_title='camera';
    	$camera->save();

    	$camera = new Product;
    	$camera->category_id = '4';
    	$camera->subcategory_id = '19';
    	$camera->brand_id ='0';
    	$camera->title ='LOGITECH C920 HD PRO WEBCAM';
    	$camera->price ='4200';
    	$camera->description='LOGITECH C920 HD PRO WEBCAM';
    	$camera->stocks='5000';
    	$camera->meta_description='';
    	$camera->meta_keyword='';
    	$camera->meta_title='camera';
    	$camera->save();

    }
}

