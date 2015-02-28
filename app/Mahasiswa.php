<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model {

	////
	protected $table = 'mahasiswas';

	public function notification(){
		return $this->belongsTo('Notification');
	}

	public function pensan(){
		return $this->belongsTo('Pesan');
	}

	public function regristrasi(){
		return $this->belongTo('Regristrasi');
	}
}
