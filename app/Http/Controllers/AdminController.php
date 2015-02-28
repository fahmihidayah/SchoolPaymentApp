<?php namespace App\Http\Controllers;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Mahasiswa;
use App\Notification;
use App\Pesan;
use App\Registrasi;
use App\Tanggal;
use App\ServerAddress;
use Illuminate\Http\Request;

class AdminController extends Controller {


	public function __construct()
	{
		$this->middleware('auth');
	}

	

	public function adminPage(Request $request){
		$list_mahasiswa = Mahasiswa::all();
		$title = 'Daftar Mahasiswa';
		return view('daftar_mahasiswa')->with('title', "Daftar Mahasiswa")->with('list_mahasiswa', $list_mahasiswa);
	}

	public function simpanMahasiswa(Request $request){
		return view('simpan_mahasiswa')->with('title', 'Tambah Mahasiswa');
	}

	public function insert(Request $request){
		$mahasiswa = new Mahasiswa();
		$mahasiswa->nim = $request->get('nim');
		$mahasiswa->nama = $request->get('nama');
		$mahasiswa->alamat = $request->get('alamat');
		$mahasiswa->telepon = $request->get('telepon');
		$mahasiswa->save();
		return redirect('tambah');
	}

	public function dateSetting(Request $request){
		$date = Tanggal::find(1);
		return view('date_settings')->with('title', "Setting tanggal")->with('date', $date);
	}

	public function setDate(Request $request){
		$tanggal = $request->get('date');
		$date = Tanggal::find(1);
		$date->tanggal_bayar_spp = $tanggal;
		$date->save();
		return redirect('date_settings');
	}

	public function getKirimPesan($id,Request $request){
		$mahasiswa = Mahasiswa::find($id);
		return view('kirim_pesan')->with('title', "Kirim Pesan")->with('mahasiswa',$mahasiswa);
	}

	public function postKirimPesan($id, Request $request){
		$data_pesan = $request->get('pesan');
		$pesan = new Pesan();
		$pesan->data_pesan = $data_pesan;
		$pesan->mahasiswas_id = $id;
		$pesan->save();
		return redirect('admin');
	}

	public function getEdit($id,  Request $request){
		$mahasiswa = Mahasiswa::find($id);
		return view('edit_mahasiswa')->with('mahasiswa', $mahasiswa)->with('title', 'Edit Mahasiswa');
	}

	public function postEdit($id, Request $request){
		$mahasiswa = Mahasiswa::find($id);
		$mahasiswa->nim = $request->get('nim');
		$mahasiswa->nama = $request->get('nama');
		$mahasiswa->alamat = $request->get('alamat');
		$mahasiswa->telepon = $request->get('telepon');
		$mahasiswa->save();
		return redirect('admin');
	}

	public function delete($id){
		$mahasiswa = Mahasiswa::find($id);
		$mahasiswa->delete();
		return redirect('admin');
	}

}
