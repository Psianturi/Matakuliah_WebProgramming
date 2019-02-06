<?php
if (isset($_POST['Proses'])) {
	$saran = nl2br($_POST['Saran']);
	echo "Kritik / Saran Anda Adalah :<br>";
	echo "<font color=blue><b>$saran</b></font>";
}
?>