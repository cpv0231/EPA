<?php

use Illuminate\Database\Seeder;
use App\Image;
class Image_Graphics_Card_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $cpu = new Image;
    	$cpu->file_path ='img/products/Graphics card/ASUS GT630 1GB DDR3 64BIT.jpg';
    	$cpu->product_id='22';
    	$cpu->is_front = '1';
    	$cpu->save();

    	       $cpu = new Image;
    	$cpu->file_path ='img/products/Graphics card/ASUS GT730 2GB DDR3 128BIT.jpg';
    	$cpu->product_id='23';
    	$cpu->is_front = '1';
    	$cpu->save();

    	       $cpu = new Image;
    	$cpu->file_path ='img/products/Graphics card/ASUS GTX750PHOC 1GB DDR5 128BIT.jpg';
    	$cpu->product_id='24';
    	$cpu->is_front = '1';
    	$cpu->save();

    	       $cpu = new Image;
    	$cpu->file_path ='img/products/Graphics card/ASUS GTX950 DC2OC STRIX 2GB DDR5 128BIT.jpg';
    	$cpu->product_id='25';
    	$cpu->is_front = '1';
    	$cpu->save();

    	       $cpu = new Image;
    	$cpu->file_path ='img/products/Graphics card/ASUS GTX960 DC2OC 2GB DDR5 128BIT BLACK EDITION VIDEOCARD.jpg';
    	$cpu->product_id='26';
    	$cpu->is_front = '1';
    	$cpu->save();

    	       $cpu = new Image;
    	$cpu->file_path ='img/products/Graphics card/ASUS GTX960 DC2OC STRIX 2GB DDR5 128BIT OC VIDEOCARD.jpg';
    	$cpu->product_id='27';
    	$cpu->is_front = '1';
    	$cpu->save();

    	       $cpu = new Image;
    	$cpu->file_path ='img/products/Graphics card/ASUS GTX960 STRIX OC 4GB DDR5 128BIT VIDEOCARD.jpg';
    	$cpu->product_id='28';
    	$cpu->is_front = '1';
    	$cpu->save();

    	       $cpu = new Image;
    	$cpu->file_path ='img/products/Graphics card/ASUS GTX960 STRIX OC 4GB DDR5 128BIT.jpg';
    	$cpu->product_id='29';
    	$cpu->is_front = '1';
    	$cpu->save();

    	       $cpu = new Image;
    	$cpu->file_path ='img/products/Graphics card/ASUS GTX970 TURBO 4GB DDR5 256BIT OC WHT VIDEOCARD.jpg';
    	$cpu->product_id='30';
    	$cpu->is_front = '1';
    	$cpu->save();

    	       $cpu = new Image;
    	$cpu->file_path ='img/products/Graphics card/ASUS R9 280 DC2T 3GB DDR5 384BIT VIDEOCARD.jpg';
    	$cpu->product_id='31';
    	$cpu->is_front = '1';
    	$cpu->save();

    	       $cpu = new Image;
    	$cpu->file_path ='img/products/Graphics card/EVGA GTX960 SSC 2GB DDR5 128BIT VIDEOCARD.jpg';
    	$cpu->product_id='32';
    	$cpu->is_front = '1';
    	$cpu->save();

    	       $cpu = new Image;
    	$cpu->file_path ='img/products/Graphics card/MSI AMD R9 380 GAMING 4GB DDR5 256BIT OC VIDEOCARD.jpg';
    	$cpu->product_id='33';
    	$cpu->is_front = '1';
    	$cpu->save();

    	       $cpu = new Image;
    	$cpu->file_path ='img/products/Graphics card/MSI R5450 1GB DDR3 PCIE 64B VGA DVI HDMI VIDEOCARD.jpg';
    	$cpu->product_id='34';
    	$cpu->is_front = '1';
    	$cpu->save();

    	       $cpu = new Image;
    	$cpu->file_path ='img/products/Graphics card/PALIT GTX970 JETSTREAM 4GB DDR5 256BIT VIDEOCARD.jpg';
    	$cpu->product_id='35';
    	$cpu->is_front = '1';
    	$cpu->save();

    	       $cpu = new Image;
    	$cpu->file_path ='img/products/Graphics card/POWERCOLOR AXR9 380 4GB DDR5 256BIT VIDEOCARD.jpg';
    	$cpu->product_id='36';
    	$cpu->is_front = '1';
    	$cpu->save();

    	       $cpu = new Image;
    	$cpu->file_path ='img/products/Graphics card/POWERCOLOR AXR9 390 8GB DDR5 512BIT VIDEOCARD.jpg';
    	$cpu->product_id='37';
    	$cpu->is_front = '1';
    	$cpu->save();

    	       $cpu = new Image;
    	$cpu->file_path ='img/products/Graphics card/ZOTAC GTX970 4GB DDR5 256BIT DUAL FAN.jpg';
    	$cpu->product_id='38';
    	$cpu->is_front = '1';
    	$cpu->save();
    }
}
