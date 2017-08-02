@extends('layouts.app')
@section('content')
<div class="row">
<center><h1>Data book</h1></center>
<div class="panel panel-primary">
<div class="panel-heading">Data book
<div class="panel-title pull-right">
<a href="{{URL::previous()}}">Kembali</a></div></div>

	<div class="panel-body">
	{{-- {!! Form::open(array('router' =>'book.store','enctype' => 'multipart/form.data'.'files' =>'true')) !!}
	--}}
	<form action="{{route('book.store')}}" method="post">
	{{csrf_field()}}
	<div class="form-group">
	<label class="control-lable">Title</label>
	<input type="text" name="title" class="form-control" required="">
	</div>
	<div class="form-group">
	<label class="control-lable">Nama Penulis</label>
	<select type="text" name="author_id" class="form-control">
@foreach($author as $data)
<option value="{{$data->id}}">{{$data->nama}}</option>
@endforeach
</select>
	</div>
	<div class="form-group">
	<label class="control-lable">Amounth</label>
	<input type="number" name="amounth" class="form-control" required="">
	</div>
		</div>
	<div class="form-group">
	<label class="control-lable">Cover</label>
	<input type="number" name="cover" class="form-control" required="">
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