<?php

use Illuminate\Database\Seeder;
use App\Image;
class Image_OfficeApplication_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $officeApp = new Image;
    	$officeApp->file_path ='img/products/Office Application/MS OFFICE 365 PERSONAL 32-BITX64 1 YEAR SUBSCRIPTION.jpg';
    	$officeApp->product_id='219';
    	$officeApp->is_front = '1';
    	$officeApp->save();

    	        $officeApp = new Image;
    	$officeApp->file_path ='img/products/Office Application/MS OFFICE HOME AND BUSINESS 2016 FPP.jpg';
    	$officeApp->product_id='220';
    	$officeApp->is_front = '1';
    	$officeApp->save();

    	        $officeApp = new Image;
    	$officeApp->file_path ='img/products/Office Application/MS OFFICE HOME AND STUDENT 2016 MEDIALESS.jpg';
    	$officeApp->product_id='221';
    	$officeApp->is_front = '1';
    	$officeApp->save();
    }
}
