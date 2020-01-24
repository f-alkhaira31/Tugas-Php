<?php
	
	include '../setting/koneksi.php';
	$nim  = $_POST['tnim'];
	$id_matkul  = $_POST['makul'];
	$id_matkul_sebelumnya  = $_GET['id_matkul_sebelum'];
	$kelas = $_POST['kelas'];
	$semester  = $_POST['semester'];
	$nilai_tugas  = $_POST['ttugas'];
	$nilai_quiz  = $_POST['tquis'];
	$nilai_uts  = $_POST['tuts'];
	$nilai_uas = $_POST['tuas'];

//If Dibawah adalah untuk mengecek apakah masih ada variabel yang belum ada datanya
	if(empty($nim) || empty($id_matkul) || empty($semester) ||  empty($nilai_tugas) || empty($nilai_quiz) ||empty($nilai_uts) || empty($nilai_uas)){
			echo "Data Tidak Lengkap";
		
	}else{
			
			include '../Model/update_nilai.php';
			header("Location:../form_data_mahasiswa_muncul.php?kelas=$kelas");

	}

?>