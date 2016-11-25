<?php

use Illuminate\Database\Seeder;
use App\Image;
class Image_Headsets_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $headset = new Image;
    	$headset->file_path ='img/products/headset/1.jpg';
    	$headset->product_id='233';
    	$headset->is_front = '1';
    	$headset->save();

    	  $headset = new Image;
    	$headset->file_path ='img/products/headset/2.jpg';
    	$headset->product_id='234';
    	$headset->is_front = '1';
    	$headset->save();

    	  $headset = new Image;
    	$headset->file_path ='img/products/headset/3.jpg';
    	$headset->product_id='235';
    	$headset->is_front = '1';
    	$headset->save();

    	  $headset = new Image;
    	$headset->file_path ='img/products/headset/4.jpg';
    	$headset->product_id='236';
    	$headset->is_front = '1';
    	$headset->save();

    	  $headset = new Image;
    	$headset->file_path ='img/products/headset/5.jpg';
    	$headset->product_id='237';
    	$headset->is_front = '1';
    	$headset->save();

    	  $headset = new Image;
    	$headset->file_path ='img/products/headset/6.jpg';
    	$headset->product_id='238';
    	$headset->is_front = '1';
    	$headset->save();

    	  $headset = new Image;
    	$headset->file_path ='img/products/headset/7.jpg';
    	$headset->product_id='239';
    	$headset->is_front = '1';
    	$headset->save();

    	  $headset = new Image;
    	$headset->file_path ='img/products/headset/8.jpg';
    	$headset->product_id='240';
    	$headset->is_front = '1';
    	$headset->save();

    	  $headset = new Image;
    	$headset->file_path ='img/products/headset/9.jpg';
    	$headset->product_id='241';
    	$headset->is_front = '1';
    	$headset->save();

    	  $headset = new Image;
    	$headset->file_path ='img/products/headset/10.jpg';
    	$headset->product_id='242';
    	$headset->is_front = '1';
    	$headset->save();

    	  $headset = new Image;
    	$headset->file_path ='img/products/headset/11.jpg';
    	$headset->product_id='243';
    	$headset->is_front = '1';
    	$headset->save();

    	  $headset = new Image;
    	$headset->file_path ='img/products/headset/12.jpg';
    	$headset->product_id='244';
    	$headset->is_front = '1';
    	$headset->save();

    	  $headset = new Image;
    	$headset->file_path ='img/products/headset/13.jpg';
    	$headset->product_id='245';
    	$headset->is_front = '1';
    	$headset->save();


    }
}
