<?php

use Illuminate\Database\Seeder;
use App\Image;
class Image_Mouse_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $Mouse = new Image;
    	$Mouse->file_path ='img/products/Mouse/A4TECH X-710BK USB BLK MOUSE.jpg';
    	$Mouse->product_id='271';
    	$Mouse->is_front = '1';
    	$Mouse->save();

    	         $Mouse = new Image;
    	$Mouse->file_path ='img/products/Mouse/GENIUS TRAVELER 6000Z WIRELESS BLUE MOUSE.jpg';
    	$Mouse->product_id='272';
    	$Mouse->is_front = '1';
    	$Mouse->save();

    	         $Mouse = new Image;
    	$Mouse->file_path ='img/products/Mouse/GENIUS TRAVELER 6000Z WIRELESS RED MOUSE.jpg';
    	$Mouse->product_id='273';
    	$Mouse->is_front = '1';
    	$Mouse->save();

    	         $Mouse = new Image;
    	$Mouse->file_path ='img/products/Mouse/LOGITECH B100 USB BLK MOUSE.jpg';
    	$Mouse->product_id='274';
    	$Mouse->is_front = '1';
    	$Mouse->save();

    	         $Mouse = new Image;
    	$Mouse->file_path ='img/products/Mouse/LOGITECH M185 RED WIRELESS MOUSE.jpg';
    	$Mouse->product_id='275';
    	$Mouse->is_front = '1';
    	$Mouse->save();

    	         $Mouse = new Image;
    	$Mouse->file_path ='img/products/Mouse/LOGITECH M238 PLAY BLUE FACETS WIRELESS MOUSE.jpg';
    	$Mouse->product_id='276';
    	$Mouse->is_front = '1';
    	$Mouse->save();

    	         $Mouse = new Image;
    	$Mouse->file_path ='img/products/Mouse/LOGITECH M238 PLAY FOX WIRELESS MOUSE.jpg';
    	$Mouse->product_id='277';
    	$Mouse->is_front = '1';
    	$Mouse->save();

    	         $Mouse = new Image;
    	$Mouse->file_path ='img/products/Mouse/LOGITECH M238 PLAY MONKEY WIRELESS MOUSE.jpg';
    	$Mouse->product_id='278';
    	$Mouse->is_front = '1';
    	$Mouse->save();

    	         $Mouse = new Image;
    	$Mouse->file_path ='img/products/Mouse/LOGITECH M238 PLAY OWL WIRELESS MOUSE.jpg';
    	$Mouse->product_id='279';
    	$Mouse->is_front = '1';
    	$Mouse->save();

    }
}
