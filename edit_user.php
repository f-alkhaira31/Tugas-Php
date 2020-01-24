<?php

	$query = mysqli_query($koneksi,"update user set user_name = '$username', nama = '$nama', tingkatan_user = '$tingkatan', password = '$pass', no_hp = '$no_hp' where id_user = '$id'");

?>