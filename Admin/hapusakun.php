<?php
include "koneksi.php";

$name = $_GET['name'];
$sql= $conn->query("DELETE FROM login WHERE name='$name'");

if ($sql) {
	?>
	<script type="text/javascript">
		alert("Hapus Data Berhasil!");
		document.location='?halaman=dataakun';
	</script>
	<?php
}
else  {
	echo "Gagal Hapus Data";
}
?>