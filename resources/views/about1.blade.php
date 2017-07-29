<!DOCTYPE html>
<html>
<head>
	<title>about</title>
</head>
<body><center>
@foreach($anak as $data)
Nama : {{$data->nama}}<br>
Umur :  {{$data->umur}}<br>
Alamat :  {{$data->alamat}}<br><hr>
@endforeach
</center>
</body>
</html>