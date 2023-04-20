<!DOCTYPE html>
<html>
<head>
	<title>Task Pertemuan 16</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
	<?php
		// BIODATA
		$nama = 'Dzikri Nur Fauzi';
		$tempat_lahir = 'Tasikmalaya';
		$tanggal_lahir = '04 Juli 2002';
		$jenis_kelamin = 'Pria';
		$alamat = 'Jl. Merdeka No.106';
		$foto = '../assets/img/DSC_0070.JPG';
		$pendidikan = 'S1 Pendidikan Sejarah - Universitas Pendidikan Indonesia';
		$hobbies = 'Olahraga, Musik';

		// TAMPILKAN BIODATA
		echo '<h1>BIODATA</h1>';
		echo '<div class="container">';
        echo '<div class="photo"><img src="' . $foto . '" alt="Foto"></div>';
		echo '<div class="row"><span class="label">Nama         :</span> <span class="value">' . $nama . '</span></div>';
		echo '<div class="row"><span class="label">Tempat/Tanggal Lahir:</span> <span class="value">' . $tempat_lahir . ', ' . $tanggal_lahir . '</span></div>';
		echo '<div class="row"><span class="label">Jenis Kelamin:</span> <span class="value">' . $jenis_kelamin . '</span></div>';
		echo '<div class="row"><span class="label">Alamat       :</span> <span class="value">' . $alamat . '</span></div>';    
		echo '<div class="row"><span class="label">Pendidikan   :</span> <span class="value">' . $pendidikan . '</span></div>';
		echo '<div class="row"><span class="label">Hobbies         :</span> <span class="value">' . $hobbies . '</span></div>';
		echo '</div>';
	?>
</body>
</html>
