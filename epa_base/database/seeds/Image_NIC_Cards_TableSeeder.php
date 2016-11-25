<?php

use Illuminate\Database\Seeder;
use App\Image;
class Image_NIC_Cards_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $NIC = new Image;
    	$NIC->file_path ='img/products/NIC Cards/DLINK DFE-528TXDFE-520TX 10100MBPS LAN CARD.jpg';
    	$NIC->product_id='90';
    	$NIC->is_front = '1';
    	$NIC->save();

    	       $NIC = new Image;
    	$NIC->file_path ='img/products/NIC Cards/dlink-dwa-525-pci-wireless-lan-card.jpg';
    	$NIC->product_id='91';
    	$NIC->is_front = '1';
    	$NIC->save();

    	       $NIC = new Image;
    	$NIC->file_path ='img/products/NIC Cards/link-tl-wn851n-300mbps-wireless-n-pci-adapter.jpg';
    	$NIC->product_id='92';
    	$NIC->is_front = '1';
    	$NIC->save();

    	       $NIC = new Image;
    	$NIC->file_path ='img/products/NIC Cards/link-tl-wn881nd-300mbps-wireless-n-pci-express-adapter.jpg';
    	$NIC->product_id='93';
    	$NIC->is_front = '1';
    	$NIC->save();

    	       $NIC = new Image;
    	$NIC->file_path ='img/products/NIC Cards/TP-LINK TG-3468 LAN CARD.jpg';
    	$NIC->product_id='94';
    	$NIC->is_front = '1';
    	$NIC->save();

    	       $NIC = new Image;
    	$NIC->file_path ='img/products/NIC Cards/tp-link-tf-3239dl-10100-lan-card.jpg';
    	$NIC->product_id='95';
    	$NIC->is_front = '1';
    	$NIC->save();

    	       $NIC = new Image;
    	$NIC->file_path ='img/products/NIC Cards/tp-link-tg-3269-gigabit-lan-card.jpg';
    	$NIC->product_id='96';
    	$NIC->is_front = '1';
    	$NIC->save();
    }
}
