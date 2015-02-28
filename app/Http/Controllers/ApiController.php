<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Mahasiswa;
use App\Notification;
use App\Pesan;
use App\Registrasi;
use App\ServerAddress;
use Illuminate\Http\Request;

class ApiController extends Controller {

	//

	public function getJson(Request $request){
		return response()->json(['data'=>'hello world']);
	}

	public function loginMahasiswa(Request $request){
		$nim = $request->get('nim');
		$mahasiswa = Mahasiswa::where('nim', $nim)->first();

		if($mahasiswa != NULL){
			return response()->json(['data'=>$mahasiswa]);
		}
		else {
			return response()->json(['data'=>'data not found']);
		}
	}

	public function getNotif(Request $request){
		$mahasiswas_id = $request->get('mahasiswas_id');
		$list_notif = Notification::where('mahasiswas_id',$mahasiswas_id)->get();
		return response()->json(['data' => $list_notif]);
	}

	public function getMessageAdmin(Request $request){
		$mahasiswas_id = $request->get('mahasiswas_id');
		$list_pesan = Pesan::where('mahasiswas_id',$mahasiswas_id)->get();
		return response()->json(['data' => $list_pesan]);
	}

	public function uploadRegistration(Request $request){
		$keterangan = $request->get('keterangan');
		$mahasiswas_id = $request->get('mahasiswas_id');

		$file = $request->file('image');
		$file_name = uniqid();
		$real_path = "/opt/lampp/htdocs/uploads/";
		$url_path = "/uploads/" . $file_name;
		$file->move($real_path, $file_name);

		$registrasi = new Registrasi();
		$registrasi->keterangan = $keterangan;
		$registrasi->mahasiswas_id = $mahasiswas_id;
		$registrasi->path_file = $url_path;
		$registrasi->save();
		return response()->json(['data'=> 'success registrasi']);
	}

	public function setServer(Request $request){
		$server_address = $request->get('server_address');
		$server = ServerAddress::find(1);
		$server->ip_address = $server_address;
		$server->save();
		return response()->json(['data'=>'success update server']);
	}

	public function daftarMahasiswa(Request $request){
		$nim = $request->get('nim');
		$nama = $request->get('nama');
		$alamat = $request->get('alamat');
		$telepon = $request->get('telepon');

		$mahasiswa = new Mahasiswa();
		$mahasiswa->nim = $nim;
		$mahasiswa->nama = $nama;
		$mahasiswa->alamat = $alamat;
		$mahasiswa->telepon = $telepon;
		$mahasiswa->save();
		return response()->json(['data'=>'success insert mahasiswa']);
	}


	// test view

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
}
