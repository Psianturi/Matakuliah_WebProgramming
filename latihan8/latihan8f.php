<?php
	if(isset($_POST['input'])){
	$nilai = $_POST['nilai'];
	if($nilai >=60){
		echo "Nilai Anda $nilai, Anda LULUS";
	} else {
		echo "Nilai Anda $nilai, Anda TIDAK LULUS";
	}
}