<?php

use Illuminate\Database\Seeder;
use App\Image;
class Image_Keyboards_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          $keyboards = new Image;
    	$keyboards->file_path ='img/products/keyboards/A4TECH B120 ILLUMINATED USB GAMING KEYBOARD.jpg';
    	$keyboards->product_id='246';
    	$keyboards->is_front = '1';
    	$keyboards->save();

    	         $keyboards = new Image;
    	$keyboards->file_path ='img/products/keyboards/A4TECH KD-800L BACKLIGHT USB KEYBOARD.jpg';
    	$keyboards->product_id='247';
    	$keyboards->is_front = '1';
    	$keyboards->save();


         $keyboards = new Image;
    	$keyboards->file_path ='img/products/keyboards/A4TECH KLS-7MU X-SLIM W MIC AND USB PS2 KEYBOARD.jpg';
    	$keyboards->product_id='248';
    	$keyboards->is_front = '1';
    	$keyboards->save();


         $keyboards = new Image;
    	$keyboards->file_path ='img/products/keyboards/A4TECH KRS-83 PS2 BLACK KEYBOARD.jpg';
    	$keyboards->product_id='249';
    	$keyboards->is_front = '1';
    	$keyboards->save();


         $keyboards = new Image;
    	$keyboards->file_path ='img/products/keyboards/A4TECH KRS-83 USB BLACK KEYBOARD.jpg';
    	$keyboards->product_id='250';
    	$keyboards->is_front = '1';
    	$keyboards->save();


         $keyboards = new Image;
    	$keyboards->file_path ='img/products/keyboards/A4TECH TK-5 (17 18 KEYS) NUMERIC KEYPAD.jpg';
    	$keyboards->product_id='251';
    	$keyboards->is_front = '1';
    	$keyboards->save();


         $keyboards = new Image;
    	$keyboards->file_path ='img/products/keyboards/KB-RAPOO 9060 WIRELESS KB+MOUSE COMBO.jpg';
    	$keyboards->product_id='252';
    	$keyboards->is_front = '1';
    	$keyboards->save();


         $keyboards = new Image;
    	$keyboards->file_path ='img/products/keyboards/LOGITECH K120 USB BLACK KEYBOARD.jpg';
    	$keyboards->product_id='253';
    	$keyboards->is_front = '1';
    	$keyboards->save();


         $keyboards = new Image;
    	$keyboards->file_path ='img/products/keyboards/LOGITECH K270 WIRELESS KEYBOARD.jpg';
    	$keyboards->product_id='254';
    	$keyboards->is_front = '1';
    	$keyboards->save();


         $keyboards = new Image;
    	$keyboards->file_path ='img/products/keyboards/LOGITECH K400 PLUS WIRELESS TOUCH KEYBOARD.jpg';
    	$keyboards->product_id='255';
    	$keyboards->is_front = '1';
    	$keyboards->save();


         $keyboards = new Image;
    	$keyboards->file_path ='img/products/keyboards/LOGITECH MK100 BLK (KB+MOUSE) COMBO.jpg';
    	$keyboards->product_id='256';
    	$keyboards->is_front = '1';
    	$keyboards->save();

         $keyboards = new Image;
    	$keyboards->file_path ='img/products/keyboards/LOGITECH MK120 USB KB+MOUSE COMBO.jpg';
    	$keyboards->product_id='257';
    	$keyboards->is_front = '1';
    	$keyboards->save();

    }
}
