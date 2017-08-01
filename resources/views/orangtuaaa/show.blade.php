@extends('layouts.app')
@section('content')
<div class="row">
	<center><h1>Data Orang Tua</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Orang Tua
		<div class="panel-title pull-right"><a href="{{URL::previous()}}">Kembali</a></div></div>

		<div class="panel-body">
			<form action="{{route('orangtuaaa.update',$ortu->id)}}" method = "post">
				<input type="hidden" name="_method" value="PUT">
				<input type="hidden" name="_token" value="{{csrf_token()}}">

				<div class="form-group">
					<label class="control-lable">Nama Ayah</label>
					<input type="text" name="a" class="form-control" value="{{$ortu->nama_ayah}}" readonly="">
				</div>
				<div class="form-group">
					<label class="control-lable">Nama Ibu</label>
					<input type="text" name="b" class="form-control" value="{{$ortu->nama_ibu}}" readonly="">
				</div>
				<div class="form-group">
					<label class="control-lable">Umur Ayah</label>
					<input type="text" name="c" class="form-control" value="{{$ortu->umur_ayah}}" readonly="">
				</div>
				<div class="form-group">
					<label class="control-lable">Umur Ibu</label>
					<input type="text" name="d" class="form-control" value="{{$ortu->umur_ibu}}" readonly="">
				</div>
				<div class="form-group">
					<label class="control-lable">Alamat</label>
					<textarea name="e" class="form-control" value="{{$ortu->alamat}}" readonly="">{{$ortu->alamat}}</textarea>
				</div>
			</form>	
		</div>
	</div>
</div>
@endsection