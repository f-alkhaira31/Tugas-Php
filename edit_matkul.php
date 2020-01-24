<?php

	$query = mysqli_query($koneksi,"update matkul set nama_matkul = '$matkul' where id_matkul = '$id_matkul'");

?>