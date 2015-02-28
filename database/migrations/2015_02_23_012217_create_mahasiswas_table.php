<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMahasiswasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mahasiswas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nim')->unique();
			$table->string('nama');
			$table->string('alamat');
			$table->string('telepon');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('mahasiswas');
	}

}
