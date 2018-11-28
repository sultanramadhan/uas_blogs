<?php
	include '../../conf.php';
	include '../../conn.php';
	$judul = post('judul');
	$konten = post('konten');
	$penulis = post('penulis');
	$penulis = $koneksi->prepare("INSERT INTO artikel (`judul`,`konten`,`penulis`) VALUES ('".$judul."','".$konten."','".$penulis."')");
	$penulis->execute();
	header("location:../../index.php?p=artikel");
?>