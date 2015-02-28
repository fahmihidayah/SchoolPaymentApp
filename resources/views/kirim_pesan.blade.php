@extends('base_admin')

@section('content')
<div class="col-lg-5">
	<div class="panel panel-default">
		<div class="panel-heading">
			{{$title}}
		</div>
		<div class="panel-body">
			{!!Form::open(array('url'=> '/kirim_pesan/'. $mahasiswa->id))!!}
			<div class="form-group">
				<label>Pesan ke : {{$mahasiswa->nama}}</label>
			</div>
			
			<div class="form-group">
			<label>Pesan</label>
				<textarea class="form-control" rows="3" name="pesan"></textarea>
			</div>

			<button type="submit" class="btn btn-primary">Simpan</button>
			{!!Form::close()!!}
		</div>

	</div>
	
</div>
@stop

