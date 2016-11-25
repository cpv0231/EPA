<?php

use Illuminate\Database\Seeder;
use App\Product;
class Product_pc_NIC_cards_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nic_cards = new Product;
        $nic_cards->category_id = '1';
        $nic_cards->subcategory_id = '7';
        $nic_cards->brand_id ='8';
        $nic_cards->title ='DLINK DFE-528TX/DFE-520TX 10/100MBPS LAN CARD';
        $nic_cards->price ='330';
        $nic_cards->description='DLINK DFE-528TX/DFE-520TX 10/100MBPS LAN CARD';
        $nic_cards->stocks='5000';
        $nic_cards->meta_description='nic_cards';
        $nic_cards->meta_keyword='cards';
        $nic_cards->meta_title='';
        $nic_cards->save();

        $nic_cards = new Product;
        $nic_cards->category_id = '1';
        $nic_cards->subcategory_id = '7';
        $nic_cards->brand_id ='8';
        $nic_cards->title ='DLINK DWA-525 PCI WIRELESS LAN CARD';
        $nic_cards->price ='650';
        $nic_cards->description='DLINK DWA-525 PCI WIRELESS LAN CARD';
        $nic_cards->stocks='5000';
        $nic_cards->meta_description='nic_cards';
        $nic_cards->meta_keyword='cards';
        $nic_cards->meta_title='';
        $nic_cards->save();

        $nic_cards = new Product;
        $nic_cards->category_id = '1';
        $nic_cards->subcategory_id = '7';
        $nic_cards->brand_id ='8';
        $nic_cards->title ='LINK TL-WN851N 300MBPS WIRELESS N PCI ADAPTER';
        $nic_cards->price ='880';
        $nic_cards->description='LINK TL-WN851N 300MBPS WIRELESS N PCI ADAPTER';
        $nic_cards->stocks='5000';
        $nic_cards->meta_description='nic_cards';
        $nic_cards->meta_keyword='cards';
        $nic_cards->meta_title='';
        $nic_cards->save();

        $nic_cards = new Product;
        $nic_cards->category_id = '1';
        $nic_cards->subcategory_id = '7';
        $nic_cards->brand_id ='8';
        $nic_cards->title ='LINK TL-WN881ND 300MBPS WIRELESS N PCI EXPRESS ADAPTER';
        $nic_cards->price ='880';
        $nic_cards->description='LINK TL-WN881ND 300MBPS WIRELESS N PCI EXPRESS ADAPTER';
        $nic_cards->stocks='5000';
        $nic_cards->meta_description='nic_cards';
        $nic_cards->meta_keyword='cards';
        $nic_cards->meta_title='';
        $nic_cards->save();


        $nic_cards = new Product;
        $nic_cards->category_id = '1';
        $nic_cards->subcategory_id = '7';
        $nic_cards->brand_id ='8';
        $nic_cards->title ='TP-LINK TF-3239DL 10/100 LAN CARD';
        $nic_cards->price ='210';
        $nic_cards->description='TP-LINK TF-3239DL 10/100 LAN CARD';
        $nic_cards->stocks='5000';
        $nic_cards->meta_description='nic_cards';
        $nic_cards->meta_keyword='cards';
        $nic_cards->meta_title='';
        $nic_cards->save();

        $nic_cards = new Product;
        $nic_cards->category_id = '1';
        $nic_cards->subcategory_id = '7';
        $nic_cards->brand_id ='8';
        $nic_cards->title ='TP-LINK TG-3269 GIGABIT LAN CARD';
        $nic_cards->price ='450';
        $nic_cards->description='TP-LINK TG-3269 GIGABIT LAN CARD';
        $nic_cards->stocks='5000';
        $nic_cards->meta_description='nic_cards';
        $nic_cards->meta_keyword='cards';
        $nic_cards->meta_title='';
        $nic_cards->save();

        $nic_cards = new Product;
        $nic_cards->category_id = '1';
        $nic_cards->subcategory_id = '7';
        $nic_cards->brand_id ='8';
        $nic_cards->title ='TP-LINK TG-3468 LAN CARD';
        $nic_cards->price ='570';
        $nic_cards->description='TP-LINK TG-3468 LAN CARD';
        $nic_cards->stocks='5000';
        $nic_cards->meta_description='nic_cards';
        $nic_cards->meta_keyword='cards';
        $nic_cards->meta_title='';
        $nic_cards->save();


    }
}
