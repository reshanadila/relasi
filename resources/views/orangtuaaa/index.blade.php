@extends('layouts.app')
@section('content')
<div class="row">
	<center><h1>Data OrangTua</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Orang Tua
		<div class="panel-title pull-right"><a href="/orangtuaaa/create">Tambah Data</a></div></div>
		<div class="panel-body">
			<table class="table">
				<thead>
					<tr>
						<th>Nama Ayah</th>
						<th>Nama Ibu</th>
						<th>Umur Ayah</th>
						<th>Umur Ibu</th>
						<th>Alamat</th>
						<th>Nama Anak</th>
						<th colspan="3">Action</th>
					</tr>
				</thead>
				<tbody>
				@foreach($ortu as $data)
					<tr>
						<td>{{$data->nama_ayah}}</td>
						<td>{{$data->nama_ibu}}</td>
						<td>{{$data->umur_ayah}}</td>
						<td>{{$data->umur_ibu}}</td>
						<td>{{$data->alamat}}</td>
						<td>
						@foreach($data->anak as $a)
						<li>{{$a->nama}}</li>
						@endforeach
						</td>
							<td><a class="btn btn-warning" href="/orangtuaaa/{{$data->id}}/edit">Edit</a></td>
							<td><a class="btn btn-warning" href="/orangtuaaa/{{$data->id}}">Show</a></td>
							<td><form action="{{route('orangtuaaa.destroy',$data->id)}}" method="post">
								<input type="hidden" name="_method" value="DELETE">
								<input type="hidden" name="_token">
								<input type="submit" class="btn btn-danger" value="Delete">
								{{csrf_field()}}
							</form>
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>	
		</div>
	</div>
</div>
@endsection