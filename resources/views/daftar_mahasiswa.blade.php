@extends('base_admin')

@section('content')

<div class="col-lg-12">
	<div class="panel panel-default">
		<div class="panel-heading">
			{{$title}}
		</div>
		<div class="panel-body">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th>NIM</th>
							<th>Nama</th>
							<th>Alamat</th>
							<th>Telepon</th>
							<th></th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@foreach($list_mahasiswa as $mahasiswa)
						<tr>
							<td>{{ $mahasiswa->nim }}</td>
							<td>{{ $mahasiswa->nama }}</td>
							<td>{{ $mahasiswa->alamat }}</td>
							<td>{{ $mahasiswa->telepon }}</td>
							<td><a href="{{URL::to('/kirim_pesan/'.$mahasiswa->id)}}" class="fa fa-envelope-o btn btn-success"></a></td>

							<td><a href="{{URL::to('/edit/'.$mahasiswa->id)}}" class="fa fa-edit btn btn-primary"></a></td>
							
							<td><a href="{{URL::to('/delete/'.$mahasiswa->id)}}" class="fa fa-trash-o btn btn-danger"></a></td>
						</tr>
						@endforeach
					</tbody>
				</table>

			</div>
			<a href="{{URL::to('tambah')}}" class="btn btn-primary">Tambah Mahasiswa</a>
		</div>

	</div>
	
</div>

<!-- /.table-responsive -->


@stop

