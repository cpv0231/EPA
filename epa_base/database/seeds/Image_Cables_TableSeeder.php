<?php

use Illuminate\Database\Seeder;
use App\Image;
class Image_Cables_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          $cables = new Image;
    	$cables->file_path ='img/products/cables/HDMI CABLE.jpg';
    	$cables->product_id='226';
    	$cables->is_front = '1';
    	$cables->save();


    	          $cables = new Image;
    	$cables->file_path ='img/products/cables/PRINTER CABLE.jpg';
    	$cables->product_id='227';
    	$cables->is_front = '1';
    	$cables->save();


          $cables = new Image;
    	$cables->file_path ='img/products/cables/SATA to USB 3.0 cable.png';
    	$cables->product_id='228';
    	$cables->is_front = '1';
    	$cables->save();

    	          $cables = new Image;
    	$cables->file_path ='img/products/cables/VGA CABLE.jpg';
    	$cables->product_id='229';
    	$cables->is_front = '1';
    	$cables->save();


    }
}
