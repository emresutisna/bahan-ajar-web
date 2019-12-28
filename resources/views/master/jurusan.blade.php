<!-- Buat file di resources/views/master/jurusan.blade.php -->
<!DOCTYPE html>
<html>
<head>
	<title>Data Jurusan</title>
</head>
<body>
	<h1>Data Jurusan</h1>
	<ol>
		@foreach($jurusan as $jurusan)
			<li>{{ $jurusan->nama }}</li>
		@endforeach
	</ol>
</body>
</html>