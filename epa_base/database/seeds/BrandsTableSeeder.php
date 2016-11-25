<?php

use Illuminate\Database\Seeder;
use App\Brand;
class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Brand = new Brand;
		$Brand->brand_name = 'Acer';
		$Brand->brand_image = '1.jpg';
		$Brand->save();
		
		 $Brand = new Brand;
		$Brand->brand_name = 'Lenovo';
		$Brand->brand_image = '2.jpg';
		$Brand->save();
		
		 $Brand = new Brand;
		$Brand->brand_name = 'Samsung';
		$Brand->brand_image = '3.jpg';
		$Brand->save();
		
		 $Brand = new Brand;
		$Brand->brand_name = 'A4tech';
		$Brand->brand_image = '4.jpg';
		$Brand->save();
		
		 $Brand = new Brand;
		$Brand->brand_name = 'MSI';
		$Brand->brand_image = '5.jpg';
		$Brand->save();
		
		 $Brand = new Brand;
		$Brand->brand_name = 'Intel';
		$Brand->brand_image = '6.jpg';
		$Brand->save();
		
		 $Brand = new Brand;
		$Brand->brand_name = 'AMD';
		$Brand->brand_image = '7.jpg';
		$Brand->save();
		
		 $Brand = new Brand;
		$Brand->brand_name = 'ASUS';
		$Brand->brand_image = '8.jpg';
		$Brand->save();
		
		 $Brand = new Brand;
		$Brand->brand_name = 'DELL';
		$Brand->brand_image = '9.jpg';
		$Brand->save();
		

		 $Brand = new Brand;
		$Brand->brand_name = 'KINGSTON';
		$Brand->brand_image = '10.jpg';
		$Brand->save();
		

		 $Brand = new Brand;
		$Brand->brand_name = 'LOGITECH';
		$Brand->brand_image = '11.jpg';
		$Brand->save();	

			 $Brand = new Brand;
		$Brand->brand_name = 'TENDA';
		$Brand->brand_image = '12.jpg';
		$Brand->save();		
    }
}
