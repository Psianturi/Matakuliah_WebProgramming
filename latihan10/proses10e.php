<head>
	<title>form 5 input select option</title>
</head>
<body>

	<form method="POST">
		<table border="1" width="20%" cellpadding="1" cellspacing="1" align="center">
			<tr>
				<td>KOTA</td>
				<td>
					<select name="kota">
						<option value="bogor">Bogor</option>
						<option value="surabaya">Surabaya</option>
						<option value="yogyakarta">Yogyakarta</option>
					</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="kirim" value="kirim">
				</td>
			</tr>
		</table>
	</form>
</body>
<?php
	if(isset($_POST['kirim'])){
	$city = nl2br($_POST['kota']);
	echo "<font color=blue><b>$city</b></font>";
}
?>