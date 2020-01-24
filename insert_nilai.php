<?php
	
	$query= mysqli_query($koneksi,"insert into nilai values ('$nim','$id_matkul','$semester','$nilai_tugas','$nilai_quiz','$nilai_uts','$nilai_uas')");

?>