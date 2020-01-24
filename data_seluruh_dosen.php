<?php

	$query = mysqli_query($koneksi,"select id,nama,if(jenis_kelamin = 'L','Laki-Laki','Perempuan') as jenis_kelamin, no_hp from dosen order by nama asc");

?>