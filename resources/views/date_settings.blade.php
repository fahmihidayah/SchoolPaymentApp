@extends('base_admin')

@section('content')
<div class="col-lg-5">
	<div class="panel panel-default">
		<div class="panel-heading">
			{{$title}}
		</div>
		<div class="panel-body">
			{!!Form::open(array('url'=> '/set_date'))!!}
			<div class="form-group">
				<label>Tanggal </label>
				<input type="date" class="form-control" name="date" value="{{$date->tanggal_bayar_spp}}">
				{{-- {!!Form::text('date', ''.$date->tanggal_bayar_spp, array('class'=> 'form-control', 'type'=>'date'))!!} --}}
			</div>
			<button type="submit" class="btn btn-primary">Simpan</button>
			{!!Form::close()!!}
		</div>

	</div>
	
</div>
@stop

