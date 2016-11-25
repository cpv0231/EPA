<?php

use Illuminate\Database\Seeder;
use App\Product;
class Product_Mouse_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $mouse = new Product;
    	$mouse->category_id = '4';
    	$mouse->subcategory_id = '23';
    	$mouse->brand_id ='4';
    	$mouse->title ='A4TECH X-710BK USB BLK MOUSE';
    	$mouse->price ='750';
    	$mouse->description='A4TECH X-710BK USB BLK MOUSE';
    	$mouse->stocks='5000';
    	$mouse->meta_description='';
    	$mouse->meta_keyword='';
    	$mouse->meta_title='mouse';
    	$mouse->save();

    	       $mouse = new Product;
    	$mouse->category_id = '4';
    	$mouse->subcategory_id = '23';
    	$mouse->brand_id ='0';
    	$mouse->title ='GENIUS TRAVELER 6000Z WIRELESS BLUE MOUSE';
    	$mouse->price ='400';
    	$mouse->description='GENIUS TRAVELER 6000Z WIRELESS BLUE MOUSE';
    	$mouse->stocks='5000';
    	$mouse->meta_description='';
    	$mouse->meta_keyword='';
    	$mouse->meta_title='mouse';
    	$mouse->save();

    	       $mouse = new Product;
    	$mouse->category_id = '4';
    	$mouse->subcategory_id = '23';
    	$mouse->brand_id ='0';
    	$mouse->title ='GENIUS TRAVELER 6000Z WIRELESS RED MOUSE';
    	$mouse->price ='400';
    	$mouse->description='GENIUS TRAVELER 6000Z WIRELESS RED MOUSE';
    	$mouse->stocks='5000';
    	$mouse->meta_description='';
    	$mouse->meta_keyword='';
    	$mouse->meta_title='mouse';
    	$mouse->save();

    	       $mouse = new Product;
    	$mouse->category_id = '4';
    	$mouse->subcategory_id = '23';
    	$mouse->brand_id ='0';
    	$mouse->title ='LOGITECH B100 USB BLK MOUSE';
    	$mouse->price ='240';
    	$mouse->description='LOGITECH B100 USB BLK MOUSE';
    	$mouse->stocks='5000';
    	$mouse->meta_description='';
    	$mouse->meta_keyword='';
    	$mouse->meta_title='mouse';
    	$mouse->save();

    	       $mouse = new Product;
    	$mouse->category_id = '4';
    	$mouse->subcategory_id = '23';
    	$mouse->brand_id ='0';
    	$mouse->title ='LOGITECH M185 RED WIRELESS MOUSE';
    	$mouse->price ='650';
    	$mouse->description='LOGITECH M185 RED WIRELESS MOUSE';
    	$mouse->stocks='5000';
    	$mouse->meta_description='';
    	$mouse->meta_keyword='';
    	$mouse->meta_title='mouse';
    	$mouse->save();


    	       $mouse = new Product;
    	$mouse->category_id = '4';
    	$mouse->subcategory_id = '23';
    	$mouse->brand_id ='0';
    	$mouse->title ='LOGITECH M238 PLAY BLUE FACETS WIRELESS MOUSE';
    	$mouse->price ='800';
    	$mouse->description='LOGITECH M238 PLAY BLUE FACETS WIRELESS MOUSE';
    	$mouse->stocks='5000';
    	$mouse->meta_description='';
    	$mouse->meta_keyword='';
    	$mouse->meta_title='mouse';
    	$mouse->save();

    	       $mouse = new Product;
    	$mouse->category_id = '4';
    	$mouse->subcategory_id = '23';
    	$mouse->brand_id ='0';
    	$mouse->title ='LOGITECH M238 PLAY FOX WIRELESS MOUSE';
    	$mouse->price ='800';
    	$mouse->description='LOGITECH M238 PLAY FOX WIRELESS MOUSE';
    	$mouse->stocks='5000';
    	$mouse->meta_description='';
    	$mouse->meta_keyword='';
    	$mouse->meta_title='mouse';
    	$mouse->save();

    	       $mouse = new Product;
    	$mouse->category_id = '4';
    	$mouse->subcategory_id = '23';
    	$mouse->brand_id ='0';
    	$mouse->title ='ALOGITECH M238 PLAY MONKEY WIRELESS MOUSE';
    	$mouse->price ='800';
    	$mouse->description='LOGITECH M238 PLAY MONKEY WIRELESS MOUSE';
    	$mouse->stocks='5000';
    	$mouse->meta_description='';
    	$mouse->meta_keyword='';
    	$mouse->meta_title='mouse';
    	$mouse->save();

    	       $mouse = new Product;
    	$mouse->category_id = '4';
    	$mouse->subcategory_id = '23';
    	$mouse->brand_id ='0';
    	$mouse->title ='LOGITECH M238 PLAY OWL WIRELESS MOUSE';
    	$mouse->price ='800';
    	$mouse->description='LOGITECH M238 PLAY OWL WIRELESS MOUSE';
    	$mouse->stocks='5000';
    	$mouse->meta_description='';
    	$mouse->meta_keyword='';
    	$mouse->meta_title='mouse';
    	$mouse->save();

    }
}
