<?php

use Illuminate\Database\Seeder;
use App\Image;
class Image_Case_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $case = new Image;
    	$case->file_path ='img/products/Case/AEROCOOL AERO-1000 BLACK GAMING CASE-1.jpg';
    	$case->product_id='1';
    	$case->is_front = '1';
    	$case->save();

    	 $case = new Image;
    	$case->file_path ='img/products/Case/AEROCOOL AERO-800 GREY GAMING CASE-1.jpg';
    	$case->product_id='2';
    	$case->is_front = '1';
    	$case->save();

    	   	 $case = new Image;
    	$case->file_path ='img/products/Case/AEROCOOL CRUISE STAR ADVANCE BLACK GAMING CASE-1.jpg';
    	$case->product_id='3';
    	$case->is_front = '1';
    	$case->save();

    	   	 $case = new Image;
    	$case->file_path ='img/products/Case/AEROCOOL GT-A BLK GAMING CASE-1.jpg';
    	$case->product_id='4';
    	$case->is_front = '1';
    	$case->save();

    	   	 $case = new Image;
    	$case->file_path ='img/products/Case/AEROCOOL VS-92 BLK GAMING CASING-1.jpg';
    	$case->product_id='5';
    	$case->is_front = '1';
    	$case->save();

    	   	 $case = new Image;
    	$case->file_path ='img/products/Case/COOLER MASTER ELITE 110 MINI ITX USB 3.0 GAMING CHASSIS-1.jpg';
    	$case->product_id='6';
    	$case->is_front = '1';
    	$case->save();

    	   	 $case = new Image;
    	$case->file_path ='img/products/Case/COOLER MASTER ELITE 110 MINI ITX USB 3.0 GAMING CHASSIS-1.jpg';
    	$case->product_id='7';
    	$case->is_front = '1';
    	$case->save();

    	   	 $case = new Image;
    	$case->file_path ='img/products/Case/COOLER MASTER ELITE RC102 W 500W PSU CASING-1.jpg';
    	$case->product_id='8';
    	$case->is_front = '1';
    	$case->save();

    	   	 $case = new Image;
    	$case->file_path ='img/products/Case/COOLER MASTER K280 WO POWERSUPPLY CASING-1.jpg';
    	$case->product_id='9';
    	$case->is_front = '1';
    	$case->save();

    	   	 $case = new Image;
    	$case->file_path ='img/products/Case/AEROCOOL AERO-800 GREY GAMING CASE-1.jpg';
    	$case->product_id='10';
    	$case->is_front = '1';
    	$case->save();

    	   	 $case = new Image;
    	$case->file_path ='img/products/Case/COOLER MASTER LAN 241 BLACK CASING-1.jpg';
    	$case->product_id='11';
    	$case->is_front = '1';
    	$case->save();

    	   	 $case = new Image;
    	$case->file_path ='img/products/Case/COOLER MASTER MASTER CASE 5 PRO FULL MODULAR BLACK CASING-1.jpg';
    	$case->product_id='12';
    	$case->is_front = '1';
    	$case->save();

    	   	 $case = new Image;
    	$case->file_path ='img/products/Case/COOLER MASTER STORM TROOPER USB3.0 CASING-1.jpg';
    	$case->product_id='13';
    	$case->is_front = '1';
    	$case->save();

    }
}
