<?php

use Illuminate\Database\Seeder;
use App\Image;
class Image_AVR_UPS_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $avr_ups = new Image;
    	$avr_ups->file_path ='img/products/avr & ups/APC BX1100LI-MS 1100VA UPS.jpg';
    	$avr_ups->product_id='223';
    	$avr_ups->is_front = '1';
    	$avr_ups->save();

    	$avr_ups = new Image;
    	$avr_ups->file_path ='img/products/avr & ups/APC BX625CI-MS 625VA BLK UPS.jpg';
    	$avr_ups->product_id='224';
    	$avr_ups->is_front = '1';
    	$avr_ups->save();

    	$avr_ups = new Image;
    	$avr_ups->file_path ='img/products/avr & ups/SECURE 220V COMPUTER AVR.jpg';
    	$avr_ups->product_id='225';
    	$avr_ups->is_front = '1';
    	$avr_ups->save();
    }
}
