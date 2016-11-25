<?php

use Illuminate\Database\Seeder;
use App\Image;
class Image_Camera_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camera = new Image;
    	$camera->file_path ='img/products/camera/A4TECH PK-635G ANTI-GLARE 16MP W MIC USB WEBCAM.jpg';
    	$camera->product_id='230';
    	$camera->is_front = '1';
    	$camera->save();

    	       $camera = new Image;
    	$camera->file_path ='img/products/camera/LOGITECH C615 8MP FULL HD WEBCAM.jpg';
    	$camera->product_id='231';
    	$camera->is_front = '1';
    	$camera->save();

    	       $camera = new Image;
    	$camera->file_path ='img/products/camera/LOGITECH C920 HD PRO WEBCAM.jpg';
    	$camera->product_id='232';
    	$camera->is_front = '1';
    	$camera->save();

    }
}
