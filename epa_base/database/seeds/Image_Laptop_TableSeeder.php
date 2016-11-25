<?php

use Illuminate\Database\Seeder;
use App\Image;
class Image_Laptop_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $laptop = new Image;
    	$laptop->file_path ='img/products/Laptop/1.jpg';
    	$laptop->product_id='127';
    	$laptop->is_front = '1';
    	$laptop->save();

    	       $laptop = new Image;
    	$laptop->file_path ='img/products/Laptop/2.jpg';
    	$laptop->product_id='128';
    	$laptop->is_front = '1';
    	$laptop->save();

    	       $laptop = new Image;
    	$laptop->file_path ='img/products/Laptop/3.jpg';
    	$laptop->product_id='129';
    	$laptop->is_front = '1';
    	$laptop->save();

    	       $laptop = new Image;
    	$laptop->file_path ='img/products/Laptop/4.jpg';
    	$laptop->product_id='130';
    	$laptop->is_front = '1';
    	$laptop->save();

    	       $laptop = new Image;
    	$laptop->file_path ='img/products/Laptop/5.jpg';
    	$laptop->product_id='131';
    	$laptop->is_front = '1';
    	$laptop->save();

    	       $laptop = new Image;
    	$laptop->file_path ='img/products/Laptop/6.jpg';
    	$laptop->product_id='132';
    	$laptop->is_front = '1';
    	$laptop->save();

    	       $laptop = new Image;
    	$laptop->file_path ='img/products/Laptop/7.jpg';
    	$laptop->product_id='133';
    	$laptop->is_front = '1';
    	$laptop->save();

    	       $laptop = new Image;
    	$laptop->file_path ='img/products/Laptop/8.jpg';
    	$laptop->product_id='134';
    	$laptop->is_front = '1';
    	$laptop->save();

    	       $laptop = new Image;
    	$laptop->file_path ='img/products/Laptop/9.jpg';
    	$laptop->product_id='135';
    	$laptop->is_front = '1';
    	$laptop->save();

    	       $laptop = new Image;
    	$laptop->file_path ='img/products/Laptop/10.jpg';
    	$laptop->product_id='136';
    	$laptop->is_front = '1';
    	$laptop->save();

    	       $laptop = new Image;
    	$laptop->file_path ='img/products/Laptop/11.jpg';
    	$laptop->product_id='137';
    	$laptop->is_front = '1';
    	$laptop->save();

    	       $laptop = new Image;
    	$laptop->file_path ='img/products/Laptop/12.jpg';
    	$laptop->product_id='138';
    	$laptop->is_front = '1';
    	$laptop->save();

    	       $laptop = new Image;
    	$laptop->file_path ='img/products/Laptop/13.jpg';
    	$laptop->product_id='139';
    	$laptop->is_front = '1';
    	$laptop->save();

    	       $laptop = new Image;
    	$laptop->file_path ='img/products/Laptop/14.jpg';
    	$laptop->product_id='140';
    	$laptop->is_front = '1';
    	$laptop->save();

    	       $laptop = new Image;
    	$laptop->file_path ='img/products/Laptop/15.jpg';
    	$laptop->product_id='141';
    	$laptop->is_front = '1';
    	$laptop->save();

    }
}
