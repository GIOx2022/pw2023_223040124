<?php
require 'functions.php';

// ambil data di URL
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$film = query("SELECT * FROM tb_films WHERE id = $id")[0];


// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
	
	// cek apakah data berhasil diubah atau tidak
	if( ubah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil diubah!');
				document.location.href = 'index.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal diubah!');
				document.location.href = 'index.php';
			</script>
		";
	}


}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ubah data film</title>
</head>
<body>
	<h1>Ubah data film</h1>

	<form action="" method="post">
		<input type="hidden" name="id" value="<?= $film["id"]; ?>">
		<ul>
			<li>
				<label for="kode" class="form-label">Kode : </label>
				<input type="text"  class="form-control" name="kode" id="kode" required value="<?= $film["kode"]; ?>">
			</li>
			<li>
				<label for="judul" class="form-label">Judul : </label>
				<input type="text"  class="form-control" name="judul" id="judul" value="<?= $film["judul"]; ?>">
			</li>
			<li>
				<label for="jenis" class="form-label">Jenis :</label>
				<input type="text"  class="form-control" name="jenis" id="jenis" value="<?= $film["jenis"]; ?>">
			</li>
			<li>
				<label for="tahun" class="form-label">tahun :</label>
				<input type="text"  class="form-control" name="tahun" id="tahun" value="<?= $film["tahun"]; ?>">
			</li>
			<li>
				<label for="gambar" class="form-label">Gambar :</label>
				<input type="text" class="form-control" name="gambar" id="gambar" value="<?= $film["gambar"]; ?>">
			</li>
			<li>
				<button type="submit" name="submit">Ubah Data!</button>
			</li>
		</ul>

	</form>




</body>
</html>