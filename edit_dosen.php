<?php

	$query = mysqli_query($koneksi,"update dosen set nama = '$nama', jenis_kelamin = '$klamin', no_hp = '$no_hp' where id = '$id'");

?>