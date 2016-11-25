<?php

use Illuminate\Database\Seeder;
use App\Image;
class Image_CPU_FAN_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $cpu = new Image;
    	$cpu->file_path ='img/products/CPU FAN/COOLER MASTER SEIDON 120V PLUS LIQUID COOLING SYSTEM.jpg';
    	$cpu->product_id='14';
    	$cpu->is_front = '1';
    	$cpu->save();

    	 $cpu = new Image;
    	$cpu->file_path ='img/products/CPU FAN/THERMALTAKE FRIO EXTREME CPU FAN.jpg';
    	$cpu->product_id='15';
    	$cpu->is_front = '1';
    	$cpu->save();

    	 $cpu = new Image;
    	$cpu->file_path ='img/products/CPU FAN/THERMALTAKE FRIO OCK CPU FAN.jpg';
    	$cpu->product_id='16';
    	$cpu->is_front = '1';
    	$cpu->save();

    	 $cpu = new Image;
    	$cpu->file_path ='img/products/CPU FAN/THERMALTAKE WATER 3.0 EXTREME-S CPU FAN.jpg';
    	$cpu->product_id='17';
    	$cpu->is_front = '1';
    	$cpu->save();


    	 $cpu = new Image;
    	$cpu->file_path ='img/products/CPU FAN/XIGMATEK JANUS LD1266 120 80MM CPU FAN.jpg';
    	$cpu->product_id='18';
    	$cpu->is_front = '1';
    	$cpu->save();

    	 $cpu = new Image;
    	$cpu->file_path ='img/products/CPU FAN/XIGMATEK PRAETON LD963 CPU FAN.jpg';
    	$cpu->product_id='19';
    	$cpu->is_front = '1';
    	$cpu->save();

    	 $cpu = new Image;
    	$cpu->file_path ='img/products/CPU FAN/ZALMAN CNPS14X CPU FAN.jpg';
    	$cpu->product_id='20';
    	$cpu->is_front = '1';
    	$cpu->save();

    	 $cpu = new Image;
    	$cpu->file_path ='img/products/CPU FAN/ZALMAN CNPS99000 MAX CPU FAN.jpg';
    	$cpu->product_id='21';
    	$cpu->is_front = '1';
    	$cpu->save();
    }
}
