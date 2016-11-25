<?php

use Illuminate\Database\Seeder;
use App\Image;
class Image_Memory_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $memory = new Image;
    	$memory->file_path ='img/products/Memory/GSKILLS RIPJAWS X-RED 8GB (1X8GB) DDR3 MEMORY.jpg';
    	$memory->product_id='58';
    	$memory->is_front = '1';
    	$memory->save();

    	        $memory = new Image;
    	$memory->file_path ='img/products/Memory/GSKILLS RIPJAWS X-RED 8GB (2X4GB) DDR3.jpg';
    	$memory->product_id='59';
    	$memory->is_front = '1';
    	$memory->save();

    	        $memory = new Image;
    	$memory->file_path ='img/products/Memory/GSKILLS RIPJAWSV 8GB (2X4GB) DDR4-2400MHZ MEMORY (1).jpg';
    	$memory->product_id='60';
    	$memory->is_front = '1';
    	$memory->save();

    	        $memory = new Image;
    	$memory->file_path ='img/products/Memory/KINGSTON 16GB (2X8GB) 2133MHZ DDR4.jpg';
    	$memory->product_id='61';
    	$memory->is_front = '1';
    	$memory->save();

    	        $memory = new Image;
    	$memory->file_path ='img/products/Memory/KINGSTON 4GB 1600MHZ HYPERX.jpg';
    	$memory->product_id='62';
    	$memory->is_front = '1';
    	$memory->save();

    	        $memory = new Image;
    	$memory->file_path ='img/products/Memory/KINGSTON 4GB 1600MHZ HYPERX.jpg';
    	$memory->product_id='63';
    	$memory->is_front = '1';
    	$memory->save();

    	    	        $memory = new Image;
    	$memory->file_path ='img/products/Memory/KINGSTON 4GB 1600MHZ HYPERX.jpg';
    	$memory->product_id='64';
    	$memory->is_front = '1';
    	$memory->save();

    	        $memory = new Image;
    	$memory->file_path ='img/products/Memory/KINGSTON 8GB 1600MHZ HYPERX FURY BLUE (KHX316C10F8.jpg';
    	$memory->product_id='65';
    	$memory->is_front = '1';
    	$memory->save();

    	        $memory = new Image;
    	$memory->file_path ='img/products/Memory/KINGSTON 8GB 1600MHZ HYPERX FURY BLUE.jpg';
    	$memory->product_id='66';
    	$memory->is_front = '1';
    	$memory->save();

    	        $memory = new Image;
    	$memory->file_path ='img/products/Memory/KINGSTON 8GB 1600MHZ HYPERX FURY BLUE.jpg';
    	$memory->product_id='67';
    	$memory->is_front = '1';
    	$memory->save();

    	        $memory = new Image;
    	$memory->file_path ='img/products/Memory/KINGSTON 8GB DDR3L PC1600.jpg';
    	$memory->product_id='68';
    	$memory->is_front = '1';
    	$memory->save();

    	        $memory = new Image;
    	$memory->file_path ='img/products/Memory/KINGSTON 8GB DDR4 PC2133 SODIMM MEMORY.jpg';
    	$memory->product_id='69';
    	$memory->is_front = '1';
    	$memory->save();

    	        $memory = new Image;
    	$memory->file_path ='img/products/Memory/KINGSTON 8GB DDR4 PC2133 SODIMM MEMORY.jpg';
    	$memory->product_id='70';
    	$memory->is_front = '1';
    	$memory->save();

    	        $memory = new Image;
    	$memory->file_path ='img/products/Memory/ZEPPELIN 4GB DDR3 1333MHZ.jpg';
    	$memory->product_id='71';
    	$memory->is_front = '1';
    	$memory->save();




    }
}
