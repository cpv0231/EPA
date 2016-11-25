<?php

use Illuminate\Database\Seeder;
use App\Image;
class Image_Printer_Scanner_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $printers = new Image;
    	$printers->file_path ='img/products/printer & scanners/BROTHER DCP-T300 3-IN-1 INKJET MFC PRINTER.jpg';
    	$printers->product_id='295';
    	$printers->is_front = '1';
    	$printers->save();

    	         $printers = new Image;
    	$printers->file_path ='img/products/printer & scanners/BROTHER DCP-T500W (PRINT COPY SCAN WIFI) PRINTER.jpg';
    	$printers->product_id='296';
    	$printers->is_front = '1';
    	$printers->save();

    	         $printers = new Image;
    	$printers->file_path ='img/products/printer & scanners/CANON G1000 PRINTER.jpg';
    	$printers->product_id='297';
    	$printers->is_front = '1';
    	$printers->save();

    	         $printers = new Image;
    	$printers->file_path ='img/products/printer & scanners/CANON G2000 MULTI FUNCTION PRINTER.jpg';
    	$printers->product_id='298';
    	$printers->is_front = '1';
    	$printers->save();

    	         $printers = new Image;
    	$printers->file_path ='img/products/printer & scanners/CANON G3000 MULTIFUNCTION PRINTER.jpg';
    	$printers->product_id='299';
    	$printers->is_front = '1';
    	$printers->save();

    	         $printers = new Image;
    	$printers->file_path ='img/products/printer & scanners/CANON LIDE 120 FLATBED SCANNER.jpg';
    	$printers->product_id='300';
    	$printers->is_front = '1';
    	$printers->save();

    	         $printers = new Image;
    	$printers->file_path ='img/products/printer & scanners/CANON PIXMA IP2770 PRINTER.jpg';
    	$printers->product_id='301';
    	$printers->is_front = '1';
    	$printers->save();

    	         $printers = new Image;
    	$printers->file_path ='img/products/printer & scanners/CANON PIXMA IP2870 PRINTER.jpg';
    	$printers->product_id='302';
    	$printers->is_front = '1';
    	$printers->save();

    	         $printers = new Image;
    	$printers->file_path ='img/products/printer & scanners/EPSON L220 3-IN-1 PRINTER.jpg';
    	$printers->product_id='303';
    	$printers->is_front = '1';
    	$printers->save();

    	         $printers = new Image;
    	$printers->file_path ='img/products/printer & scanners/L120-600x571.jpg';
    	$printers->product_id='304';
    	$printers->is_front = '1';
    	$printers->save();

    	         $printers = new Image;
    	$printers->file_path ='img/products/printer & scanners/EPSON L365 AIO PRINTER.jpg';
    	$printers->product_id='305';
    	$printers->is_front = '1';
    	$printers->save();

    }
}
