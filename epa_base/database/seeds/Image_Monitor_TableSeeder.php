<?php

use Illuminate\Database\Seeder;
use App\Image;
class Image_Monitor_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Monitor = new Image;
    	$Monitor->file_path ='img/products/Monitor/AOC 19.53 M2060SWD LED DVI + VGA LED BLACK MONITORa.jpg';
    	$Monitor->product_id='258';
    	$Monitor->is_front = '1';
    	$Monitor->save();

    	       $Monitor = new Image;
    	$Monitor->file_path ='img/products/Monitor/AOC 21.5 E2250SWD LED (1920X1080) BLACK MONITORa.jpg';
    	$Monitor->product_id='259';
    	$Monitor->is_front = '1';
    	$Monitor->save();


       $Monitor = new Image;
    	$Monitor->file_path ='img/products/Monitor/AOC 21.5 I2269VW IPS LED BLACK MONITORa.jpg';
    	$Monitor->product_id='260';
    	$Monitor->is_front = '1';
    	$Monitor->save();


       $Monitor = new Image;
    	$Monitor->file_path ='img/products/Monitor/ASUS 18.5 VS197DE (1366X768) BLACK MONITORa.jpg';
    	$Monitor->product_id='261';
    	$Monitor->is_front = '1';
    	$Monitor->save();


       $Monitor = new Image;
    	$Monitor->file_path ='img/products/Monitor/ASUS 23 VC239H SLIM IPS LED (1920X1080) 5MS MONITORa.jpg';
    	$Monitor->product_id='262';
    	$Monitor->is_front = '1';
    	$Monitor->save();


       $Monitor = new Image;
    	$Monitor->file_path ='img/products/Monitor/ASUS 27 VX279H (1920X1080) LED MONITORa.jpg';
    	$Monitor->product_id='263';
    	$Monitor->is_front = '1';
    	$Monitor->save();


       $Monitor = new Image;
    	$Monitor->file_path ='img/products/Monitor/BENQ 21.5 GW2255 (1920X1080) WIDESCREEN BLACK MONITORa.jpg';
    	$Monitor->product_id='264';
    	$Monitor->is_front = '1';
    	$Monitor->save();


       $Monitor = new Image;
    	$Monitor->file_path ='img/products/Monitor/BENQ 24 fXL2430T 144HZ GAMING MONITOR.jpg';
    	$Monitor->product_id='265';
    	$Monitor->is_front = '1';
    	$Monitor->save();


       $Monitor = new Image;
    	$Monitor->file_path ='img/products/Monitor/BENQ 24 GL2460 FLICKER FREE LED WIDESCREEN MONITORa.jpg';
    	$Monitor->product_id='266';
    	$Monitor->is_front = '1';
    	$Monitor->save();


       $Monitor = new Image;
    	$Monitor->file_path ='img/products/Monitor/BENQ 24 GW2470H LED WIDESCREEN MONITORa.jpg';
    	$Monitor->product_id='267';
    	$Monitor->is_front = '1';
    	$Monitor->save();


       $Monitor = new Image;
    	$Monitor->file_path ='img/products/Monitor/DELL 21.5 S2216H IPS LED BLACK MONITORa.jpg';
    	$Monitor->product_id='268';
    	$Monitor->is_front = '1';
    	$Monitor->save();


       $Monitor = new Image;
    	$Monitor->file_path ='img/products/Monitor/LG 15.6 16M37A WIDESCREEN BLACK MONITOR.jpg';
    	$Monitor->product_id='269';
    	$Monitor->is_front = '1';
    	$Monitor->save();


       $Monitor = new Image;
    	$Monitor->file_path ='img/products/Monitor/LG 18.5 19M37A (1366X768)FLICKER SAFE BLACK MONITOR.jpg';
    	$Monitor->product_id='270';
    	$Monitor->is_front = '1';
    	$Monitor->save();


    }
}
