<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesan extends Model {

	protected $table = "pesans";

	public function mahasiswa(){
		return $this->hasMany('Mahasiswa');
	}

}
