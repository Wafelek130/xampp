<?php
$link = new mysqli('localhost', 'root', '', 'baza');
if(isset($_POST['rezerwuj'])) {
	$data = $_POST['data'];
	$osoby = $_POST['osoby'];
	$telefon = $_POST['telefon'];
	$sql = "INSERT INTO rezerwacje VALUES (NULL, NULL, '$data', $osoby, '$telefon');";
	mysqli_query($link, $sql);
	echo "Dodano rezerwcje do bazy";
}
$link -> close();
?>