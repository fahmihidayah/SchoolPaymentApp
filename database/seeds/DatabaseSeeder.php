<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		// Model::unguard();

		// $this->call('UserTableSeeder');
		DB::table('users')->insert(
			array(
				array('name'=>'yogi', 'email'=>'yogi@gmail.com', 'password'=>bcrypt('yogi')),
				)
			);
		DB::table('tanggal')->insert(
			array(
				array('tanggal_bayar_spp' => '2015-02-01'),
				)
			);
		DB::table('serveraddresses')->insert(
			array(
				array('ip_address' => '192.168.1.1'),
				)
			);
	}

}
