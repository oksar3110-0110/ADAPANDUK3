<?php
	if(isset($_POST['send'])){
		$nmpos = $_POST['nmpos'];
		$tanggal = $_POST['tagl'];
		$lap	= addslashes($_POST['lapo']);

		$koneksi = mysqli_connect("localhost","root","","adapandu");

		mysqli_query($koneksi, "INSERT INTO laporankegiatanpos (tanggal, nm_pos, laporan) VALUES('$tanggal', '$nmpos', '$lap')");

		
		echo "<script>alert('PO Berhasil dimasukan!'); window.location = 'kegiatanpos.php'</script>";
	} else {
		echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Ups, Data Departement Gagal Di simpan !</div>';
	}

?>