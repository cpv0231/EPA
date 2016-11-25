<?php

use Illuminate\Database\Seeder;
use App\Product;
class Product_pc_cpu_fan_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$cpu_fan = new Product;
    	$cpu_fan->category_id = '1';
    	$cpu_fan->subcategory_id = '2';
    	$cpu_fan->brand_id ='0';
    	$cpu_fan->title ='COOLER MASTER SEIDON 120';
    	$cpu_fan->price ='2900';
    	$cpu_fan->description='';
    	$cpu_fan->stocks='5000';
    	$cpu_fan->meta_description='PLUS LIQUID COOLING SYSTEM';
    	$cpu_fan->meta_keyword='fan';
    	$cpu_fan->meta_title='cpu fan';
    	$cpu_fan->save();


    	$cpu_fan = new Product;
    	$cpu_fan->category_id = '1';
    	$cpu_fan->subcategory_id = '2';
    	$cpu_fan->brand_id ='0';
    	$cpu_fan->title ='THERMALTAKE FRIO EXTREME ';
    	$cpu_fan->price ='3800';
    	$cpu_fan->description='THERMALTAKE FRIO EXTREME ';
    	$cpu_fan->stocks='5000';
    	$cpu_fan->meta_description='';
    	$cpu_fan->meta_keyword='';
    	$cpu_fan->meta_title='cpu fan';
    	$cpu_fan->save();

    	
    	$cpu_fan = new Product;
    	$cpu_fan->category_id = '1';
    	$cpu_fan->subcategory_id = '2';
    	$cpu_fan->brand_id ='0';
    	$cpu_fan->title ='THERMALTAKE FRIO OCK ';
    	$cpu_fan->price ='3750';
    	$cpu_fan->description='THERMALTAKE FRIO OCK ';
    	$cpu_fan->stocks='5000';
    	$cpu_fan->meta_description='';
    	$cpu_fan->meta_keyword='';
    	$cpu_fan->meta_title='cpu fan';
    	$cpu_fan->save();


    	$cpu_fan = new Product;
    	$cpu_fan->category_id = '1';
    	$cpu_fan->subcategory_id = '2';
    	$cpu_fan->brand_id ='0';
    	$cpu_fan->title ='THERMALTAKE WATER 3.0 EXTREME-S ';
    	$cpu_fan->price ='5050';
    	$cpu_fan->description='THERMALTAKE WATER 3.0 EXTREME-S ';
    	$cpu_fan->stocks='5000';
    	$cpu_fan->meta_description='';
    	$cpu_fan->meta_keyword='';
    	$cpu_fan->meta_title='cpu fan';
    	$cpu_fan->save();


    	$cpu_fan = new Product;
    	$cpu_fan->category_id = '1';
    	$cpu_fan->subcategory_id = '2';
    	$cpu_fan->brand_id ='0';
    	$cpu_fan->title ='XIGMATEK JANUS LD1266 120/80MM ';
    	$cpu_fan->price ='1900';
    	$cpu_fan->description='THERMALTAKE WATER 3.0 EXTREME-S ';
    	$cpu_fan->stocks='5000';
    	$cpu_fan->meta_description='';
    	$cpu_fan->meta_keyword='';
    	$cpu_fan->meta_title='cpu fan';
    	$cpu_fan->save();

    	$cpu_fan = new Product;
    	$cpu_fan->category_id = '1';
    	$cpu_fan->subcategory_id = '2';
    	$cpu_fan->brand_id ='0';
    	$cpu_fan->title ='XIGMATEK PRAETON LD963';
    	$cpu_fan->price ='1050';
    	$cpu_fan->description='XIGMATEK PRAETON LD963 ';
    	$cpu_fan->stocks='5000';
    	$cpu_fan->meta_description='';
    	$cpu_fan->meta_keyword='';
    	$cpu_fan->meta_title='cpu fan';
    	$cpu_fan->save();



    	$cpu_fan = new Product;
    	$cpu_fan->category_id = '1';
    	$cpu_fan->subcategory_id = '2';
    	$cpu_fan->brand_id ='0';
    	$cpu_fan->title ='ZALMAN CNPS14X ';
    	$cpu_fan->price ='2250';
    	$cpu_fan->description='ZALMAN CNPS14X ';
    	$cpu_fan->stocks='5000';
    	$cpu_fan->meta_description='';
    	$cpu_fan->meta_keyword='';
    	$cpu_fan->meta_title='cpu fan';
    	$cpu_fan->save();



    	$cpu_fan = new Product;
    	$cpu_fan->category_id = '1';
    	$cpu_fan->subcategory_id = '2';
    	$cpu_fan->brand_id ='0';
    	$cpu_fan->title ='ZALMAN CNPS99000 MAX ';
    	$cpu_fan->price ='3800';
    	$cpu_fan->description='ZALMAN CNPS99000 MAX ';
    	$cpu_fan->stocks='5000';
    	$cpu_fan->meta_description='';
    	$cpu_fan->meta_keyword='';
    	$cpu_fan->meta_title='cpu fan';
    	$cpu_fan->save();



    }
}
