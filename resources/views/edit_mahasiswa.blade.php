@extends('base_admin')

@section('content')
<div class="col-lg-8">
	<div class="panel panel-default">
		<div class="panel-heading">
			{{$title}}
		</div>
		<div class="panel-body">
			<div class="panel-body">
			{!!Form::open(array('url'=> '/edit/'.$mahasiswa->id))!!}
				<div class="form-group">
					<label>NIM</label>
					<input name="nim" class="form-control" value="{{$mahasiswa->nim}}">
				</div>
				<div class="form-group">
					<label>Nama</label>
					<input name="nama" class="form-control" value="{{$mahasiswa->nama}}">
				</div>
				<div class="form-group">
					<label>Alamat</label>
					<input name="alamat" class="form-control" value="{{$mahasiswa->alamat}}">
				</div>
				<div class="form-group">
					<label>Telepon</label>
					<input name="telepon" class="form-control" value="{{$mahasiswa->telepon}}">
				</div>
				<button type="submit" class="btn btn-primary">Simpan</button>
				<!-- /.table-responsive -->
				{!!Form::close()!!}
			</div>
		</div>
	</div>
</div>
@stop

