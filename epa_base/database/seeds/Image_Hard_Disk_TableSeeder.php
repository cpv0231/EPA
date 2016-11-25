<?php

use Illuminate\Database\Seeder;
use App\Image;
class Image_Hard_Disk_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $hard_disk = new Image;
    	$hard_disk->file_path ='img/products/Hard Disk/INTEL 240GB 535 SERIES SOLID STATE DRIVE.jpg';
    	$hard_disk->product_id='39';
    	$hard_disk->is_front = '1';
    	$hard_disk->save();

    	 $hard_disk = new Image;
    	$hard_disk->file_path ='img/products/Hard Disk/KINGSTON 120GB HYPERX FURY SOLID STATE DRIVE.jpg';
    	$hard_disk->product_id='40';
    	$hard_disk->is_front = '1';
    	$hard_disk->save();

    	 $hard_disk = new Image;
    	$hard_disk->file_path ='img/products/Hard Disk/KINGSTON 120GB SSDNOW V300 SOLID STATE DRIVE.jpg';
    	$hard_disk->product_id='41';
    	$hard_disk->is_front = '1';
    	$hard_disk->save();

    	 $hard_disk = new Image;
    	$hard_disk->file_path ='img/products/Hard Disk/KINGSTON 240GB HYPERX 3K SOLID STATE DRIVE.jpg';
    	$hard_disk->product_id='42';
    	$hard_disk->is_front = '1';
    	$hard_disk->save();

    	 $hard_disk = new Image;
    	$hard_disk->file_path ='img/products/Hard Disk/KINGSTON 240GB HYPERX FURY SOLID STATE DRIVE.jpg';
    	$hard_disk->product_id='43';
    	$hard_disk->is_front = '1';
    	$hard_disk->save();

    	 $hard_disk = new Image;
    	$hard_disk->file_path ='img/products/Hard Disk/KINGSTON 240GB SSDNOW V300 SOLID STATE DRIVE.jpg';
    	$hard_disk->product_id='44';
    	$hard_disk->is_front = '1';
    	$hard_disk->save();

    	 $hard_disk = new Image;
    	$hard_disk->file_path ='img/products/Hard Disk/KINGSTON 480GB SOLID STATE DRIVE NOW UV400 SERIES.jpg';
    	$hard_disk->product_id='45';
    	$hard_disk->is_front = '1';
    	$hard_disk->save();

    	 $hard_disk = new Image;
    	$hard_disk->file_path ='img/products/Hard Disk/KINGSTON 480GB SSDNOW V300 SOLID STATE DRIVE.jpg';
    	$hard_disk->product_id='46';
    	$hard_disk->is_front = '1';
    	$hard_disk->save();

    	 $hard_disk = new Image;
    	$hard_disk->file_path ='img/products/Hard Disk/SAMSUNG 120GB 850 EVO SOLID STATE DRIVE.jpg';
    	$hard_disk->product_id='47';
    	$hard_disk->is_front = '1';
    	$hard_disk->save();

    	 $hard_disk = new Image;
    	$hard_disk->file_path ='img/products/Hard Disk/SAMSUNG 250GB 850 EVO SOLID STATE DRIVE.jpg';
    	$hard_disk->product_id='48';
    	$hard_disk->is_front = '1';
    	$hard_disk->save();

    	 $hard_disk = new Image;
    	$hard_disk->file_path ='img/products/Hard Disk/SAMSUNG 500GB 850 EVO SOLID STATE DRIVE.jpg';
    	$hard_disk->product_id='49';
    	$hard_disk->is_front = '1';
    	$hard_disk->save();

    	 $hard_disk = new Image;
    	$hard_disk->file_path ='img/products/Hard Disk/SEAGATE 1TERABYTE SATA.jpg';
    	$hard_disk->product_id='50';
    	$hard_disk->is_front = '1';
    	$hard_disk->save();

    	 $hard_disk = new Image;
    	$hard_disk->file_path ='img/products/Hard Disk/TOSHIBA 1TB 9.5MM MOBILE SATA.jpg';
    	$hard_disk->product_id='51';
    	$hard_disk->is_front = '1';
    	$hard_disk->save();

    	 $hard_disk = new Image;
    	$hard_disk->file_path ='img/products/Hard Disk/TOSHIBA 1TB 7200RPM SATA.jpg';
    	$hard_disk->product_id='52';
    	$hard_disk->is_front = '1';
    	$hard_disk->save();

    	 $hard_disk = new Image;
    	$hard_disk->file_path ='img/products/Hard Disk/WESTERN DIGITAL 1TB 9MM.jpg';
    	$hard_disk->product_id='53';
    	$hard_disk->is_front = '1';
    	$hard_disk->save();

    	 $hard_disk = new Image;
    	$hard_disk->file_path ='img/products/Hard Disk/WESTERN DIGITAL 1TB CAVIAR.jpg';
    	$hard_disk->product_id='54';
    	$hard_disk->is_front = '1';
    	$hard_disk->save();

    	 $hard_disk = new Image;
    	$hard_disk->file_path ='img/products/Hard Disk/WESTERN DIGITAL 1TB PURPLE SATA.jpg';
    	$hard_disk->product_id='55';
    	$hard_disk->is_front = '1';
    	$hard_disk->save();

    	 $hard_disk = new Image;
    	$hard_disk->file_path ='img/products/Hard Disk/WESTERN DIGITAL 1TB SATA 3.8.jpg';
    	$hard_disk->product_id='56';
    	$hard_disk->is_front = '1';
    	$hard_disk->save();

    	 $hard_disk = new Image;
    	$hard_disk->file_path ='img/products/Hard Disk/WESTERN DIGITAL 500GB SATA 7200RPM 32MB.jpg';
    	$hard_disk->product_id='57';
    	$hard_disk->is_front = '1';
    	$hard_disk->save();
    }
}
