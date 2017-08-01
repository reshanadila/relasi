@extends('layouts.app')
@section('content')
<div class="row">
<center><h1>Data Orang Tua</h1></center>
<div class="panel panel-primary">
<div class="panel-heading">Data Anak
<div class="panel-title pull-right">
<a href="{{URL::previous()}}">Kembali</a></div></div>

	<div class="panel-body">
	<form action="{{route('anak.update',$anak->id )}}" method="post">
	<input type="hidden" name="_method" value="PUT">
	<input type="hidden" name="_token" value="{{csrf_token()}}">

	<div class="form-group">
	<label class="control-lable">Nama</label>
	<input type="text" name="a" value="{{$anak->nama}}" class="form-control" required="">
	</div>
	<div class="form-group">
	<label class="control-lable">Nama Orangtua</label>
	<select name="b" class="form-control">
	@foreach($ortu as $data)
	<option value="{{$data->orangtuaaa_id}}">{{$data->nama_ayah}} dan {{$data->nama_ibu}}</option>
	@endforeach 
	</div>
	<div class="form-group">
	<label class="control-lable">Umur</label>
	<input type="number" name="c" value="{{$anak->umur}}" class="form-control" required="">
	</div>
	<div class="form-group">
	<label class="control-lable"> Alamat</label>
	<textarea class="form-control" row="10" name="d" class="form-control" required="">{{$anak->alamat}}</textarea>
	</div>
	<div class="form-group">
	<button type="submit" class="btn btn-success">Simpan</button>
	<button type="reset" class="btn btn-danger">Reset</button>
	</div>
	</form>
	</div>
	</div>
	</div>
@endsection