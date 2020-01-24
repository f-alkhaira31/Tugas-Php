<?php

	$b = mysqli_query($koneksi,"select * from mahasiswa where nim = '$nimmhs'");
	$c = mysqli_query($koneksi,"select * from nilai where nim = '$nimmhs'");

?>