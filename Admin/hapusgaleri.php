<?php
include "koneksi.php";

$judul = $_GET['judul'];

$sql2 = mysqli_query($conn, "SELECT gambar FROM galeri WHERE judul='$judul' ");
$pecah = mysqli_fetch_array($sql2);
$gambar = $pecah['gambar'];
if(is_file("img/galeri/$gambar"))
{
	unlink("img/galeri/$gambar");
}


$sql= $conn->query("DELETE FROM galeri WHERE judul='$judul'");


if ($sql) {
	?>
	<script type="text/javascript">
		alert("Hapus Data Berhasil!");
		document.location='?halaman=datagaleri';
	</script>
	<?php
}
else  {
	echo "Gagal Hapus Data";
}
?>