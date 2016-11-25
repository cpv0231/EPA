<?php

use Illuminate\Database\Seeder;
use App\Product;
class Product_Antivirus_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $antivirus = new Product;
    	$antivirus->category_id = '3';
    	$antivirus->subcategory_id = '14';
    	$antivirus->brand_id ='0';
    	$antivirus->title ='BITDEFENDER ANTIVIRUS PLUS 2016';
    	$antivirus->price ='1050';
    	$antivirus->description='BITDEFENDER ANTIVIRUS PLUS 2016 (3 USER) BOX';
    	$antivirus->stocks='5000';
    	$antivirus->meta_description='';
    	$antivirus->meta_keyword='';
    	$antivirus->meta_title='antivirus';
    	$antivirus->save();

    	        $antivirus = new Product;
    	$antivirus->category_id = '3';
    	$antivirus->subcategory_id = '14';
    	$antivirus->brand_id ='0';
    	$antivirus->title ='BITDEFENDER INTERNET SEC 2016';
    	$antivirus->price ='1350';
    	$antivirus->description='BITDEFENDER INTERNET SEC 2016 (3 USER) BOX';
    	$antivirus->stocks='5000';
    	$antivirus->meta_description='';
    	$antivirus->meta_keyword='';
    	$antivirus->meta_title='antivirus';
    	$antivirus->save();

    	        $antivirus = new Product;
    	$antivirus->category_id = '3';
    	$antivirus->subcategory_id = '14';
    	$antivirus->brand_id ='0';
    	$antivirus->title ='KASPERSKY ANTIVIRUS 2016';
    	$antivirus->price ='1300';
    	$antivirus->description='KASPERSKY ANTIVIRUS 2016 2 LICENSE';
    	$antivirus->stocks='5000';
    	$antivirus->meta_description='';
    	$antivirus->meta_keyword='';
    	$antivirus->meta_title='antivirus';
    	$antivirus->save();

    	        $antivirus = new Product;
    	$antivirus->category_id = '3';
    	$antivirus->subcategory_id = '14';
    	$antivirus->brand_id ='0';
    	$antivirus->title ='KASPERSKY INTERNET SECURITY 2016';
    	$antivirus->price ='1700';
    	$antivirus->description='KASPERSKY INTERNET SECURITY 2016 MULTI DEVICE';
    	$antivirus->stocks='5000';
    	$antivirus->meta_description='';
    	$antivirus->meta_keyword='';
    	$antivirus->meta_title='antivirus';
    	$antivirus->save();
    }
}
