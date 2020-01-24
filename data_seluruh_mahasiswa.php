<?php

//Membaca seluruh data mahasiswa di database
	$query = mysqli_query($koneksi,"select nim,nama,IF(jenis_kelamin='L','Laki-Laki','Perempuan') as jenis_kelamin,jurusan,kelas,no_hp from mahasiswa order by nim asc");

?>