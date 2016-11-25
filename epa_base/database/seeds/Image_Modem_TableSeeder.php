<?php

use Illuminate\Database\Seeder;
use App\Image;
class Image_Modem_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $modem = new Image;
    	$modem->file_path ='img/products/Networking peripherals/Asus RT AC51U Dual-Band AC750 Wireless Router (Black).jpg';
    	$modem->product_id='280';
    	$modem->is_front = '1';
    	$modem->save();

    	        $modem = new Image;
    	$modem->file_path ='img/products/Networking peripherals/ASUS RT-AC51U AC750 DUAL-BAND WIRELESS ROUTER W BUILT IN USB.jpg';
    	$modem->product_id='281';
    	$modem->is_front = '1';
    	$modem->save();

    	        $modem = new Image;
    	$modem->file_path ='img/products/Networking peripherals/ASUS RT-AC87U AC2400 DUAL-BAND WIRELESS GIGABIT ROUTER.jpg';
    	$modem->product_id='282';
    	$modem->is_front = '1';
    	$modem->save();

    	        $modem = new Image;
    	$modem->file_path ='img/products/Networking peripherals/ASUS RT-N12HP HIGH POWER ROUTER.jpg';
    	$modem->product_id='283';
    	$modem->is_front = '1';
    	$modem->save();

    	        $modem = new Image;
    	$modem->file_path ='img/products/Networking peripherals/ASUS RT-N14UHP HIGH POWER ROUTER.jpg';
    	$modem->product_id='284';
    	$modem->is_front = '1';
    	$modem->save();

    	        $modem = new Image;
    	$modem->file_path ='img/products/Networking peripherals/B-LINK BL-WN151 WIRELESS USB ADAPTER  150MBPS.jpg';
    	$modem->product_id='285';
    	$modem->is_front = '1';
    	$modem->save();

    	        $modem = new Image;
    	$modem->file_path ='img/products/Networking peripherals/TENDA AH302 WIRELESS-N RANGE EXTENDER.jpg';
    	$modem->product_id='286';
    	$modem->is_front = '1';
    	$modem->save();

    	        $modem = new Image;
    	$modem->file_path ='img/products/Networking peripherals/TENDA F303 WIFI-N ROUTER.jpg';
    	$modem->product_id='287';
    	$modem->is_front = '1';
    	$modem->save();

    	        $modem = new Image;
    	$modem->file_path ='img/products/Networking peripherals/TENDA F452 GIGABIT ROUTER.jpg';
    	$modem->product_id='288';
    	$modem->is_front = '1';
    	$modem->save();

    	        $modem = new Image;
    	$modem->file_path ='img/products/Networking peripherals/TENDA S108 8PORT SWITCH HUB.jpg';
    	$modem->product_id='289';
    	$modem->is_front = '1';
    	$modem->save();

    	        $modem = new Image;
    	$modem->file_path ='img/products/Networking peripherals/TENDA TEG1024D 24 PORT GIGABIT SWITCH.jpg';
    	$modem->product_id='290';
    	$modem->is_front = '1';
    	$modem->save();

    	        $modem = new Image;
    	$modem->file_path ='img/products/Networking peripherals/TENDA tW1800R AC1750 ROUTER.jpg';
    	$modem->product_id='291';
    	$modem->is_front = '1';
    	$modem->save();

    	        $modem = new Image;
    	$modem->file_path ='img/products/Networking peripherals/TENDA W311M USB ADAPTER.jpg';
    	$modem->product_id='292';
    	$modem->is_front = '1';
    	$modem->save();

    	        $modem = new Image;
    	$modem->file_path ='img/products/Networking peripherals/TENDA W311R+ ROUTER.jpg';
    	$modem->product_id='293';
    	$modem->is_front = '1';
    	$modem->save();

    	        $modem = new Image;
    	$modem->file_path ='img/products/Networking peripherals/TP-LINK 300 Mbps Wireless N Router [TL-WR841N].jpg';
    	$modem->product_id='294';
    	$modem->is_front = '1';
    	$modem->save();
    }
}
