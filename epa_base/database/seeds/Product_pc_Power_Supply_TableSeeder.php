<?php

use Illuminate\Database\Seeder;
use App\Product;
class Product_pc_Power_Supply_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$power_supply = new Product;
    	$power_supply->category_id = '1';
    	$power_supply->subcategory_id = '8';
    	$power_supply->brand_id ='0';
    	$power_supply->title ='AEROCOOL STRIKE-X 500W 80+ BRONZE MODULAR POWER SUPPLY';
    	$power_supply->price ='2750';
    	$power_supply->description='AEROCOOL STRIKE-X 500W 80+ BRONZE MODULAR POWER SUPPLY';
    	$power_supply->stocks='5000';
    	$power_supply->meta_description='power supply';
    	$power_supply->meta_keyword='supply';
    	$power_supply->meta_title='';
    	$power_supply->save();

    	$power_supply = new Product;
    	$power_supply->category_id = '1';
    	$power_supply->subcategory_id = '8';
    	$power_supply->brand_id ='0';
    	$power_supply->title ='AEROCOOL STRIKE-X 600W 80+ BRONZE POWER SUPPLY';
    	$power_supply->price ='2650';
    	$power_supply->description='AEROCOOL STRIKE-X 600W 80+ BRONZE POWER SUPPLY';
    	$power_supply->stocks='5000';
    	$power_supply->meta_description='power supply';
    	$power_supply->meta_keyword='supply';
    	$power_supply->meta_title='';
    	$power_supply->save();

    	$power_supply = new Product;
    	$power_supply->category_id = '1';
    	$power_supply->subcategory_id = '8';
    	$power_supply->brand_id ='0';
    	$power_supply->title ='COOLER MASTER B600 V2 600W 80+ POWER SUPPLY';
    	$power_supply->price ='3150	';
    	$power_supply->description='COOLER MASTER B600 V2 600W 80+ POWER SUPPLY';
    	$power_supply->stocks='5000';
    	$power_supply->meta_description='power supply';
    	$power_supply->meta_keyword='supply';
    	$power_supply->meta_title='';
    	$power_supply->save();

    	$power_supply = new Product;
    	$power_supply->category_id = '1';
    	$power_supply->subcategory_id = '8';
    	$power_supply->brand_id ='0';
    	$power_supply->title ='COOLER MASTER THUNDER 450W POWER SUPPLY';
    	$power_supply->price ='1950';
    	$power_supply->description='COOLER MASTER THUNDER 450W POWER SUPPLY';
    	$power_supply->stocks='5000';
    	$power_supply->meta_description='power supply';
    	$power_supply->meta_keyword='supply';
    	$power_supply->meta_title='';
    	$power_supply->save();

    	$power_supply = new Product;
    	$power_supply->category_id = '1';
    	$power_supply->subcategory_id = '8';
    	$power_supply->brand_id ='0';
    	$power_supply->title ='COOLER MASTER THUNDER 500W 80+ POWER SUPPLY';
    	$power_supply->price ='2450';
    	$power_supply->description='COOLER MASTER THUNDER 500W 80+ POWER SUPPLY';
    	$power_supply->stocks='5000';
    	$power_supply->meta_description='power supply';
    	$power_supply->meta_keyword='supply';
    	$power_supply->meta_title='';
    	$power_supply->save();

    	$power_supply = new Product;
    	$power_supply->category_id = '1';
    	$power_supply->subcategory_id = '8';
    	$power_supply->brand_id ='0';
    	$power_supply->title ='CORSAIR VS450 450W POWER SUPPLY';
    	$power_supply->price ='1750';
    	$power_supply->description='CORSAIR VS450 450W POWER SUPPLY';
    	$power_supply->stocks='5000';
    	$power_supply->meta_description='power supply';
    	$power_supply->meta_keyword='supply';
    	$power_supply->meta_title='';
    	$power_supply->save();

    	$power_supply = new Product;
    	$power_supply->category_id = '1';
    	$power_supply->subcategory_id = '8';
    	$power_supply->brand_id ='0';
    	$power_supply->title ='CORSAIR VS550 550W POWER SUPPLY';
    	$power_supply->price ='2300';
    	$power_supply->description='CORSAIR VS550 550W POWER SUPPLY';
    	$power_supply->stocks='5000';
    	$power_supply->meta_description='power supply';
    	$power_supply->meta_keyword='supply';
    	$power_supply->meta_title='';
    	$power_supply->save();

    	$power_supply = new Product;
    	$power_supply->category_id = '1';
    	$power_supply->subcategory_id = '8';
    	$power_supply->brand_id ='0';
    	$power_supply->title ='CORSAIR VS650 650W POWER SUPPLY';
    	$power_supply->price ='2800';
    	$power_supply->description='CORSAIR VS650 650W POWER SUPPLY';
    	$power_supply->stocks='5000';
    	$power_supply->meta_description='power supply';
    	$power_supply->meta_keyword='supply';
    	$power_supply->meta_title='';
    	$power_supply->save();

    	$power_supply = new Product;
    	$power_supply->category_id = '1';
    	$power_supply->subcategory_id = '8';
    	$power_supply->brand_id ='0';
    	$power_supply->title ='FSP AURUM 500 80PLUS GOLD SLI 500WATTS POWER SUPPLY';
    	$power_supply->price =	'3650';
    	$power_supply->description='FSP AURUM 500 80PLUS GOLD SLI 500WATTS POWER SUPPLY';
    	$power_supply->stocks='5000';
    	$power_supply->meta_description='power supply';
    	$power_supply->meta_keyword='supply';
    	$power_supply->meta_title='';
    	$power_supply->save();
    }
}
