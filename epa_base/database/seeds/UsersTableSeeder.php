<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       

		$user = new User;
		$user->firstname = 'testing';
		$user->lastname = '';
		$user->email = 'testing@gmail.com';
		$user->password = Hash::make('testing');
		$user->user_type_id = 1;
		$user->save();
    
    }
}
