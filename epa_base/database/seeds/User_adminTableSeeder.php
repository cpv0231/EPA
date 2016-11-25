<?php

use Illuminate\Database\Seeder;
use App\User;
class User_adminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	 $user = new User;
		$user->firstname = 'Christian';
		$user->lastname = 'Villaruel';
		$user->email = 'admin@gmail.com';
		$user->password = Hash::make('adminadmin');
		$user->user_type_id = 3;
		$user->save();
		

		 $user = new User;
		$user->firstname = 'MArk';
		$user->lastname = 'Jumeras';
		$user->email = 'admin2@gmail.com';
		$user->password = Hash::make('adminadmin');
		$user->user_type_id = 3;
		$user->save();
 		

		 $user = new User;
		$user->firstname = 'Jeff';
		$user->lastname = 'Paleracio';
		$user->email = 'admin3@gmail.com';
		$user->password = Hash::make('adminadmin');
		$user->user_type_id = 3;
		$user->save();  
    }
}
