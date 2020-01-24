<?php

	//Menghapus Data Mahasiswa di database
	$query = mysqli_query($koneksi,"delete from mahasiswa where nim = '$nim'");

?>