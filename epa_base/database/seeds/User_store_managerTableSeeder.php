<?php

use Illuminate\Database\Seeder;
use App\User;
class User_store_managerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
		$user->firstname = 'manager';
		$user->lastname = 'manager';
		$user->email = 'store_manager@gmail.com';
		$user->password = Hash::make('store_manager023');
		$user->user_type_id = 2;
		$user->save();
		

    }
}
