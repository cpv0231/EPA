<?php

use Illuminate\Database\Seeder;
use App\Image;
class Image_StorageDevices_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $storage = new Image;
    	$storage->file_path ='img/products/storage devices/1.jpg';
    	$storage->product_id='314';
    	$storage->is_front = '1';
    	$storage->save();

    	         $storage = new Image;
    	$storage->file_path ='img/products/storage devices/2.jpg';
    	$storage->product_id='315';
    	$storage->is_front = '1';
    	$storage->save();

    	         $storage = new Image;
    	$storage->file_path ='img/products/storage devices/3.jpg';
    	$storage->product_id='316';
    	$storage->is_front = '1';
    	$storage->save();

    	         $storage = new Image;
    	$storage->file_path ='img/products/storage devices/4.jpg';
    	$storage->product_id='317';
    	$storage->is_front = '1';
    	$storage->save();

    	         $storage = new Image;
    	$storage->file_path ='img/products/storage devices/5.jpg';
    	$storage->product_id='318';
    	$storage->is_front = '1';
    	$storage->save();

    	         $storage = new Image;
    	$storage->file_path ='img/products/storage devices/6.jpg';
    	$storage->product_id='319';
    	$storage->is_front = '1';
    	$storage->save();

    	         $storage = new Image;
    	$storage->file_path ='img/products/storage devices/7.jpg';
    	$storage->product_id='320';
    	$storage->is_front = '1';
    	$storage->save();

    	         $storage = new Image;
    	$storage->file_path ='img/products/storage devices/8.jpg';
    	$storage->product_id='321';
    	$storage->is_front = '1';
    	$storage->save();

    	         $storage = new Image;
    	$storage->file_path ='img/products/storage devices/9.jpg';
    	$storage->product_id='322';
    	$storage->is_front = '1';
    	$storage->save();

    	         $storage = new Image;
    	$storage->file_path ='img/products/storage devices/10.jpg';
    	$storage->product_id='323';
    	$storage->is_front = '1';
    	$storage->save();

    	         $storage = new Image;
    	$storage->file_path ='img/products/storage devices/11.jpg';
    	$storage->product_id='324';
    	$storage->is_front = '1';
    	$storage->save();
    }
}
