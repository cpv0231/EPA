<?php

use Illuminate\Database\Seeder;
use App\User_type;
class User_typeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
    	 DB::table('user_types')->insert([
            'user_type_name' => 'customer'
        ]);


         DB::table('user_types')->insert([
            'user_type_name' => 'store_manager'
        ]);

         DB::table('user_types')->insert([
            'user_type_name' => 'admin'
        ]);
    }
}
