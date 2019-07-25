<?php
include "koneksi.php";

$id_san = $_GET['id_san'];
$sql= $conn->query("DELETE FROM santri WHERE id_san='$id_san'");

if ($sql) {
	?>
	<script type="text/javascript">
		alert("Hapus Data Berhasil!");
		document.location='?halaman=datasantri';
	</script>
	<?php
}
else  {
	echo "Gagal Hapus Data";
}
?>