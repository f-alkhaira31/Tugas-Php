<?php

	//Query dibawah untuk mengecek apakah mahasiswa dengan nim yang dimaksud sudah pernah dimasukkan nilainya sebelumnya atau belum
	$query = mysqli_query($koneksi,"select * from nilai where nim = '$nim' and id_matkul = '$id_matkul' and semester = '$semester'");

//Dibawah adalah cara untuk menghitung jumlah data yang ditemukan berdasarkan query diatas
	$jumlah = mysqli_num_rows($query);

?>