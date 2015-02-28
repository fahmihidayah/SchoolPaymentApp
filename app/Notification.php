<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model {

	//
	protected $table = 'notifications';

	public function mahasiswa(){
		return $this->hasMany('Mahasiswa');
	}

}
