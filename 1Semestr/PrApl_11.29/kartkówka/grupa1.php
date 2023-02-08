<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Kartkówka 1</title>
	<style>
        td {border: 1px solid grey;}
	</style>
</head>
<body>

<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	$db = new PDO('mysql:host=localhost;dbname=mch_sklep', 'root', '');

	$sql = "SELECT marka, model, rocznik from samochody where rocznik>2005";

	$wyn = $db->query($sql);

	foreach($wyn as $rek)
	{
		echo "<p><b>{$rek['marka']}</b> {$rek['model']} {$rek['rocznik']}</p>";
	}



	$db=null;
	?>
</body>
</html>
