@extends('layouts.app')
@section('content')
<div class="row">
	<center><h1>Data Anak</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Anak
		<div class="panel-title pull-right"><a href="{{URL::previous()}}">Kembali</a></div></div>

		<div class="panel-body">
			<form action="{{route('anak.update',$anak->id)}}" method = "post">
				<input type="hidden" name="_method" value="PUT">
				<input type="hidden" name="_token" value="{{csrf_token()}}">

				<div class="form-group">
					<label class="control-lable">Nama </label>
					<input type="text" name="a" class="form-control" value="{{$anak->nama}}" readonly="">
				</div>
				<div class="form-group">
					<label class="control-lable">Nama Orangtua</label>
					<input type="text" name="b" class="form-control" readonly="" value="{{$anak->orangtuaaa->nama_ayah}} dan {{$anak->orangtuaaa->nama_ibu}}">
				</div>
				<div class="form-group">
					<label class="control-lable">Umur</label>
					<input type="text" name="c" class="form-control" value="{{$anak->umur}}" readonly="">
				</div>
				<div class="form-group">
					<label class="control-lable">Alamat</label>
					<textarea name="d" class="form-control" value="{{$anak->alamat}}" readonly="">{{$anak->alamat}}</textarea>
				</div>
			</form>	
		</div>
	</div>
</div>
@endsection