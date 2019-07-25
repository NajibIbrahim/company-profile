<?php
include "koneksi.php";

$judul = $_GET['judul'];

$sql2 = mysqli_query($conn, "SELECT gambar FROM slider WHERE judul='$judul' ");
$pecah = mysqli_fetch_array($sql2);
$gambar = $pecah['gambar'];
if(is_file("img/slider/$gambar"))
{
	unlink("img/slider/$gambar");
}


$sql= $conn->query("DELETE FROM slider WHERE judul='$judul'");


if ($sql) {
	?>
	<script type="text/javascript">
		alert("Hapus Data Berhasil!");
		document.location='?halaman=dataslider';
	</script>
	<?php
}
else  {
	echo "Gagal Hapus Data";
}
?>