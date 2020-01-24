<?php
$query=mysqli_query($koneksi,"select distinct(kelas)as kelas from mahasiswa order by kelas asc");
?>