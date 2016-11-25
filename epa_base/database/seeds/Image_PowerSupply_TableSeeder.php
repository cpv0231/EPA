<?php

use Illuminate\Database\Seeder;
use App\Image;
class Image_PowerSupply_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $powerSupply = new Image;
    	$powerSupply->file_path ='img/products/Power Supply/AEROCOOL STRIKE-X 500W 80+ BRONZE MODULAR POWER SUPPLY.jpg';
    	$powerSupply->product_id='97';
    	$powerSupply->is_front = '1';
    	$powerSupply->save();

    	        $powerSupply = new Image;
    	$powerSupply->file_path ='img/products/Power Supply/AEROCOOL STRIKE-X 600W 80+ BRONZE POWER SUPPLY.jpg';
    	$powerSupply->product_id='98';
    	$powerSupply->is_front = '1';
    	$powerSupply->save();

    	        $powerSupply = new Image;
    	$powerSupply->file_path ='img/products/Power Supply/COOLER MASTER B600 V2 600W 80+ POWER SUPPLY.jpg';
    	$powerSupply->product_id='99';
    	$powerSupply->is_front = '1';
    	$powerSupply->save();

    	        $powerSupply = new Image;
    	$powerSupply->file_path ='img/products/Power Supply/COOLER MASTER THUNDER 450W POWER SUPPLY.jpg';
    	$powerSupply->product_id='100';
    	$powerSupply->is_front = '1';
    	$powerSupply->save();

    	        $powerSupply = new Image;
    	$powerSupply->file_path ='img/products/Power Supply/cooler-master-thunder-500w-80-power-supply.jpg';
    	$powerSupply->product_id='101';
    	$powerSupply->is_front = '1';
    	$powerSupply->save();

    	        $powerSupply = new Image;
    	$powerSupply->file_path ='img/products/Power Supply/corsair vs450 600x571.jpg';
    	$powerSupply->product_id='102';
    	$powerSupply->is_front = '1';
    	$powerSupply->save();

    	        $powerSupply = new Image;
    	$powerSupply->file_path ='img/products/Power Supply/CORSAIR VS550 550W POWER SUPPLY.jpg';
    	$powerSupply->product_id='103';
    	$powerSupply->is_front = '1';
    	$powerSupply->save();

    	        $powerSupply = new Image;
    	$powerSupply->file_path ='img/products/Power Supply/CORSAIR VS650 650W POWER SUPPLY.jpg';
    	$powerSupply->product_id='104';
    	$powerSupply->is_front = '1';
    	$powerSupply->save();

    	$powerSupply = new Image;
    	$powerSupply->file_path ='img/products/Power Supply/FSP AURUM 500 80PLUS GOLD SLI 500WATTS POWER SUPPLY.jpg';
    	$powerSupply->product_id='105';
    	$powerSupply->is_front = '1';
    	$powerSupply->save();


    }
}
