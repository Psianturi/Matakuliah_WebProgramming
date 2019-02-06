<?php
if (isset($_POST['Pilih'])){
	$film = $_POST['kartun'];
	echo "Film Kartun Favorit Anda Adalah:
	<fontcolor=blue><b>$film</b></font>";
}
?>