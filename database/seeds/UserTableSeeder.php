<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('users')->insert(
			array(
				array('name'=>'yogi', 'email'=>'yogi@gmail.com', 'password'=>bcrypt('yogi')),
				)
			);
		DB::table('tanggal')->insert(
			array(
				array('tanggal_bayar_spp' => date("Y-m-d",'2015-02-02')),
				)
			);
		DB::table('serveraddresses')->insert(
			array(
				array('ip_address' => '192.168.1.1'),
				)
			);
		// User::create(array('email' => 'fahmi_ae@yahoo.com' , 'password' => Hash::make('fahmi')));
	}

}



