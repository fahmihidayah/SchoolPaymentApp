<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Registrasi extends Model {

	//
	protected $table = 'registrasis';

	public function mahasiswa(){
		return $this->hasMany('Mahasiswa');
	}

}
