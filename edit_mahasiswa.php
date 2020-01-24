<?php

	$query = mysqli_query($koneksi,"update mahasiswa set nama = '$nama',jenis_kelamin = '$klamin', jurusan = '$jurusan',kelas = '$kelas',no_hp = '$no_hp' where nim = '$nim'");

?>