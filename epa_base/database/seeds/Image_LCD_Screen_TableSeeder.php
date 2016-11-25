<?php

use Illuminate\Database\Seeder;
use App\Image;
class Image_LCD_Screen_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          $LCD = new Image;
    	$LCD->file_path ='img/products/LCD Screen/10.0 LED LCD Laptop Screen Standard.jpg';
    	$LCD->product_id='202';
    	$LCD->is_front = '1';
    	$LCD->save();

     $LCD = new Image;
    	$LCD->file_path ='img/products/LCD Screen/10.1inch LED LCD Laptop Screen Slim.jpg';
    	$LCD->product_id='203';
    	$LCD->is_front = '1';
    	$LCD->save();


     $LCD = new Image;
    	$LCD->file_path ='img/products/LCD Screen/10.1inch LED LCD Laptop Screen Standard.jpg';
    	$LCD->product_id='204';
    	$LCD->is_front = '1';
    	$LCD->save();


     $LCD = new Image;
    	$LCD->file_path ='img/products/LCD Screen/11.6inch LED LCD Laptop Screen Slim 30 Pins Up-Down Bracket.jpg';
    	$LCD->product_id='205';
    	$LCD->is_front = '1';
    	$LCD->save();


     $LCD = new Image;
    	$LCD->file_path ='img/products/LCD Screen/11.6inch LED LCD Laptop Screen Slim 40 Pins Lef-Right.jpg';
    	$LCD->product_id='206';
    	$LCD->is_front = '1';
    	$LCD->save();


     $LCD = new Image;
    	$LCD->file_path ='img/products/LCD Screen/11.6inch LED LCD Laptop Screen Slim 40 Pins Up-Down Bracket.jpg';
    	$LCD->product_id='207';
    	$LCD->is_front = '1';
    	$LCD->save();


     $LCD = new Image;
    	$LCD->file_path ='img/products/LCD Screen/14.0inch LED LCD Laptop Screen Slim 40 Pins Up-Down Bracket.jpg';
    	$LCD->product_id='208';
    	$LCD->is_front = '1';
    	$LCD->save();


     $LCD = new Image;
    	$LCD->file_path ='img/products/LCD Screen/14.0inch LED LCD Laptop Screen Standard 40 Pins.jpg';
    	$LCD->product_id='209';
    	$LCD->is_front = '1';
    	$LCD->save();


     $LCD = new Image;
    	$LCD->file_path ='img/products/LCD Screen/14.1inch LCD Laptop Screen.jpg';
    	$LCD->product_id='210';
    	$LCD->is_front = '1';
    	$LCD->save();

     $LCD = new Image;
    	$LCD->file_path ='img/products/LCD Screen/15.6inch LED LCD Slim 30pin for LE Panel Screena.jpg';
    	$LCD->product_id='211';
    	$LCD->is_front = '1';
    	$LCD->save();

     $LCD = new Image;
    	$LCD->file_path ='img/products/LCD Screen/b8.9INCH LED LCD STANDARD.jpg';
    	$LCD->product_id='212';
    	$LCD->is_front = '1';
    	$LCD->save();

     $LCD = new Image;
    	$LCD->file_path ='img/products/LCD Screen/BRAND NEW 15.6 SLIM LCD PANEL.jpg';
    	$LCD->product_id='213';
    	$LCD->is_front = '1';
    	$LCD->save();

     $LCD = new Image;
    	$LCD->file_path ='img/products/LCD Screen/Brand New 15.6 Standard LCD Panel.jpg';
    	$LCD->product_id='214';
    	$LCD->is_front = '1';
    	$LCD->save();

    }
}
