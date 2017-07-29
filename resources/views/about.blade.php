<!DOCTYPE html>
<html>
<head>
	<title>about</title>
</head>
<body><center>
@foreach($ortu as $data)
Nama ibu : {{$data->nama_ibu}}<br>
Nama ayah :  {{$data->nama_ayah}}<br>
Umur ibu :  {{$data->umur_ibu}}<br>
Umur ayah :  {{$data->umur_ayah}}<br><hr>
@endforeach
@foreach($anak as $data)
Nama : {{$data->nama}}<br>
id ortu {{$data->orangtuaaa_id}}<br>
Umur :  {{$data->umur}}<br>
Alamat :  {{$data->alamat}}<br><hr>
@endforeach

</center>
</body>
</html>