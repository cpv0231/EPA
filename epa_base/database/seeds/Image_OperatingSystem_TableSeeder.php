<?php

use Illuminate\Database\Seeder;
use App\Image;
class Image_OperatingSystem_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $os = new Image;
    	$os->file_path ='img/products/OS/win8pro-600x571.jpg';
    	$os->product_id='222';
    	$os->is_front = '1';
    	$os->save();
    }
}
