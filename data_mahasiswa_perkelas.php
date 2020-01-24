<?php
$A = mysqli_query($koneksi,"select * from mahasiswa where kelas='$kelas' order by nim asc");
?>