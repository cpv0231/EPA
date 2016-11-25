<?php

use Illuminate\Database\Seeder;
use App\Image;
class Image_Speaker_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
              $speaker = new Image;
    	$speaker->file_path ='img/products/speaker/ALTEC LANSING CIRCUS 2.1 SPEAKER.jpg';
    	$speaker->product_id='306';
    	$speaker->is_front = '1';
    	$speaker->save();

    	        $speaker = new Image;
    	$speaker->file_path ='img/products/speaker/ALTEC LANSING CLAW 2.1 WBLUETOOTH BLACK SPEAKER.jpg';
    	$speaker->product_id='307';
    	$speaker->is_front = '1';
    	$speaker->save();

    	        $speaker = new Image;
    	$speaker->file_path ='img/products/speaker/ALTEC LANSING HELIX 39W 2.1 BLACK.jpg';
    	$speaker->product_id='308';
    	$speaker->is_front = '1';
    	$speaker->save();

    	        $speaker = new Image;
    	$speaker->file_path ='img/products/speaker/ALTEC LANSING LOZENGE 2.1 SPEAKER.jpg';
    	$speaker->product_id='309';
    	$speaker->is_front = '1';
    	$speaker->save();

    	        $speaker = new Image;
    	$speaker->file_path ='img/products/speaker/CREATIVE INSPIRE T3300 2.1 BLACK SPEAKER.jpg';
    	$speaker->product_id='310';
    	$speaker->is_front = '1';
    	$speaker->save();

    	        $speaker = new Image;
    	$speaker->file_path ='img/products/speaker/CREATIVE SBS A120 2.1 SPEAKER.jpg';
    	$speaker->product_id='311';
    	$speaker->is_front = '1';
    	$speaker->save();

    	        $speaker = new Image;
    	$speaker->file_path ='img/products/speaker/CREATIVE SBS A350 2.1 BLACK SPEAKER.jpg';
    	$speaker->product_id='312';
    	$speaker->is_front = '1';
    	$speaker->save();

    	        $speaker = new Image;
    	$speaker->file_path ='img/products/speaker/LC EXCELLENCE S20 MINI STEREO SPEAKER.jpg';
    	$speaker->product_id='313';
    	$speaker->is_front = '1';
    	$speaker->save();




    }
}
