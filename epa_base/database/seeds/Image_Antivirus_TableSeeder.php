<?php

use Illuminate\Database\Seeder;
use App\Image;
class Image_Antivirus_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $antivirus = new Image;
    	$antivirus->file_path ='img/products/Anti virus/BITDEFENDER ANTIVIRUS PLUS 2016.jpg';
    	$antivirus->product_id='215';
    	$antivirus->is_front = '1';
    	$antivirus->save();

    	        $antivirus = new Image;
    	$antivirus->file_path ='img/products/Anti virus/BITDEFENDER ANTIVIRUS PLUS 2016.jpg';
    	$antivirus->product_id='216';
    	$antivirus->is_front = '1';
    	$antivirus->save();


        $antivirus = new Image;
    	$antivirus->file_path ='img/products/Anti virus/BITDEFENDER INTERNET SEC 2016.jpg';
    	$antivirus->product_id='217';
    	$antivirus->is_front = '1';
    	$antivirus->save();


        $antivirus = new Image;
    	$antivirus->file_path ='img/products/Anti virus/KASPERSKY INTERNET SECURITY 2016.jpg';
    	$antivirus->product_id='218';
    	$antivirus->is_front = '1';
    	$antivirus->save();



    }
}
