<?php

if(isset($_GET['id_video'])){

	include('koneksi.php');

	$id_video = $_GET['id_video'];

	$data = mysqli_query("SELECT id_video FROM video WHERE id_video='$id_video'") or die(mysql_error());

	if(mysqli_num_rows($data) == 0){

		echo '<script>window.history.back()</script>';
	
	}else{

		$del = mysql_query("DELETE FROM video WHERE id_video='$id_video'");

		if($del){
			
			echo 'Data berhasil di hapus! ';
			echo '<a href="index.php">Kembali</a>';
			
		}else{
			
			echo 'Gagal menghapus data! ';
			echo '<a href="index.php">Kembali</a>';
		
		}
		
	}
	
}else{
	
	//redirect atau dikembalikan ke halaman beranda
	echo '<script>window.history.back()</script>';
	
}
?>