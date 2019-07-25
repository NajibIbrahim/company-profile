<?php
include "koneksi.php";

$judul = $_GET['judul'];

$sql2 = mysqli_query($conn, "SELECT gambar FROM berita WHERE judul='$judul' ");
$pecah = mysqli_fetch_array($sql2);
$gambar = $pecah['gambar'];
if(is_file("img/berita/$gambar"))
{
	unlink("img/berita/$gambar");
}


$sql= $conn->query("DELETE FROM berita WHERE judul='$judul'");


if ($sql) {
	?>
	<script type="text/javascript">
		alert("Hapus Data Berhasil!");
		document.location='?halaman=databerita';
	</script>
	<?php
}
else  {
	echo "Gagal Hapus Data";
}
?>