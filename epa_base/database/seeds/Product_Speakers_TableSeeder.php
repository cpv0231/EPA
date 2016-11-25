<?php

use Illuminate\Database\Seeder;
use App\Product;
class Product_Speakers_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $speakers = new Product;
    	$speakers->category_id = '4';
    	$speakers->subcategory_id = '26';
    	$speakers->brand_id ='0';
    	$speakers->title ='ALTEC LANSING CIRCUS 2.1 SPEAKER';
    	$speakers->price ='2300';
    	$speakers->description='ALTEC LANSING CIRCUS 2.1 SPEAKER';
    	$speakers->stocks='5000';
    	$speakers->meta_description='';
    	$speakers->meta_keyword='';
    	$speakers->meta_title='speakers';
    	$speakers->save();

    	        $speakers = new Product;
    	$speakers->category_id = '4';
    	$speakers->subcategory_id = '26';
    	$speakers->brand_id ='2800';
    	$speakers->title ='ALTEC LANSING CLAW 2.1 W/BLUETOOTH BLACK SPEAKER';
    	$speakers->price ='2300';
    	$speakers->description='ALTEC LANSING CLAW 2.1 W/BLUETOOTH BLACK SPEAKER';
    	$speakers->stocks='5000';
    	$speakers->meta_description='';
    	$speakers->meta_keyword='';
    	$speakers->meta_title='speakers';
    	$speakers->save();

    	        $speakers = new Product;
    	$speakers->category_id = '4';
    	$speakers->subcategory_id = '26';
    	$speakers->brand_id ='0';
    	$speakers->title ='ALTEC LANSING HELIX 39W 2.1 BLACK';
    	$speakers->price ='4600';
    	$speakers->description='ALTEC LANSING HELIX 39W 2.1 BLACK';
    	$speakers->stocks='5000';
    	$speakers->meta_description='';
    	$speakers->meta_keyword='';
    	$speakers->meta_title='speakers';
    	$speakers->save();

    	        $speakers = new Product;
    	$speakers->category_id = '4';
    	$speakers->subcategory_id = '26';
    	$speakers->brand_id ='0';
    	$speakers->title ='ALTEC LANSING LOZENGE 2.1 SPEAKER';
    	$speakers->price ='3750';
    	$speakers->description='ALTEC LANSING LOZENGE 2.1 SPEAKER';
    	$speakers->stocks='5000';
    	$speakers->meta_description='';
    	$speakers->meta_keyword='';
    	$speakers->meta_title='speakers';
    	$speakers->save();

    	        $speakers = new Product;
    	$speakers->category_id = '4';
    	$speakers->subcategory_id = '26';
    	$speakers->brand_id ='0';
    	$speakers->title ='CREATIVE INSPIRE T3300 2.1 BLACK SPEAKER';
    	$speakers->price ='3750';
    	$speakers->description='CREATIVE INSPIRE T3300 2.1 BLACK SPEAKER';
    	$speakers->stocks='5000';
    	$speakers->meta_description='';
    	$speakers->meta_keyword='';
    	$speakers->meta_title='speakers';
    	$speakers->save();

    	        $speakers = new Product;
    	$speakers->category_id = '4';
    	$speakers->subcategory_id = '26';
    	$speakers->brand_id ='0';
    	$speakers->title ='CREATIVE SBS A120 2.1 SPEAKER';
    	$speakers->price ='995';
    	$speakers->description='CREATIVE SBS A120 2.1 SPEAKER';
    	$speakers->stocks='5000';
    	$speakers->meta_description='';
    	$speakers->meta_keyword='';
    	$speakers->meta_title='speakers';
    	$speakers->save();

    	        $speakers = new Product;
    	$speakers->category_id = '4';
    	$speakers->subcategory_id = '26';
    	$speakers->brand_id ='0';
    	$speakers->title ='CREATIVE SBS A350 2.1 BLACK SPEAKER';
    	$speakers->price ='1600';
    	$speakers->description='CREATIVE SBS A350 2.1 BLACK SPEAKER';
    	$speakers->stocks='5000';
    	$speakers->meta_description='';
    	$speakers->meta_keyword='';
    	$speakers->meta_title='speakers';
    	$speakers->save();

    	        $speakers = new Product;
    	$speakers->category_id = '4';
    	$speakers->subcategory_id = '26';
    	$speakers->brand_id ='0';
    	$speakers->title ='LC EXCELLENCE S20 MINI STEREO SPEAKER';
    	$speakers->price ='250';
    	$speakers->description='LC EXCELLENCE S20 MINI STEREO SPEAKER';
    	$speakers->stocks='5000';
    	$speakers->meta_description='';
    	$speakers->meta_keyword='';
    	$speakers->meta_title='speakers';
    	$speakers->save();

    }
}
