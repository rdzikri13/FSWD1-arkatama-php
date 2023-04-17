<!DOCTYPE html>
<html>
<head>
	<title>Tugas16</title>
    <link rel="stylesheet" href="../..//">
</head>
<body>
	<?php
		// BIODATA
		$nama = 'Ernawati';
		$tempat_lahir = 'Mataram';
		$tanggal_lahir = '28 Februari 2002';
		$jenis_kelamin = 'Perempuan';
		$alamat = 'Jl. Mandalika Gg. Mustika Ling.Tinggar Ampenan';
		$foto = '../assets/images/erna.jpg';
		$pendidikan = 'S1 Sistem Informasi - Universitas Teknologi Mataram';
		$hoby = 'Traveling, Programming, Reading, and Sleep';

		// TAMPILKAN BIODATA
		echo '<h1>BIODATA</h1>';
		echo '<div class="container">';
        echo '<div class="photo"><img src="' . $foto . '" alt="Foto"></div>';
		echo '<div class="row"><span class="label">Nama         :</span> <span class="value">' . $nama . '</span></div>';
		echo '<div class="row"><span class="label">Tempat/Tanggal Lahir:</span> <span class="value">' . $tempat_lahir . ', ' . $tanggal_lahir . '</span></div>';
		echo '<div class="row"><span class="label">Jenis Kelamin:</span> <span class="value">' . $jenis_kelamin . '</span></div>';
		echo '<div class="row"><span class="label">Alamat       :</span> <span class="value">' . $alamat . '</span></div>';    
		echo '<div class="row"><span class="label">Pendidikan   :</span> <span class="value">' . $pendidikan . '</span></div>';
		echo '<div class="row"><span class="label">Hoby         :</span> <span class="value">' . $hoby . '</span></div>';
		echo '</div>';
	?>
</body>
</html>