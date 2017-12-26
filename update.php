<?php
include "koneksi.php";
mysql_query("UPDATE siswa SET nama        = '$_POST[nama]',
							  tempat      = '$_POST[tempat]',
							  tanggal      = '$_POST[tanggal]',
							  bulan      = '$_POST[bulan]',
							  tahun      = '$_POST[tahun]',
							  jenis_kelamin      = '$_POST[jenis_kelamin]',
							  agama      = '$_POST[agama]',
							  alamat      = '$_POST[alamat]'
                          WHERE id_siswa      = '$_POST[id]'");
header('location:view.php');
?>
