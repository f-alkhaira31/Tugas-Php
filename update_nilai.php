<?php

	//Query dibawah untuk mengupdate nilai mahasiswa yang dimaksud
	$query = mysqli_query($koneksi,"update nilai set id_matkul = '$id_matkul',semester = '$semester', nilai_tugas = '$nilai_tugas',nilai_quiz = '$nilai_quiz', nilai_uts = '$nilai_uts', nilai_uas = '$nilai_uas' where nim = '$nim' and id_matkul = '$id_matkul_sebelumnya'");
	

?>