<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Salon pielęgnacji</title>
	<link rel="stylesheet" href="salon.css">
</head>
<body>
	<section id="header">
		<h1>SALON PIELĘGNACJI PSÓW I KOTÓW</h1>
	</section>
	<div id="kontener">
	<section id="left">
		<h3>SALON ZAPRASZA W DNIACH</h3>
		<ul>
			<li>Poniedziałek, 12:00 - 18:00</li>
			<li>Wtorek, 12:00 - 18:00</li>
		</ul>
		<a href="http://via.placeholder.com/400x300"><img src="http://via.placeholder.com/80x90" alt="pies"></a>
		<p>Umów się telefonicznie na wizytę lub po prostu przyjdź!</p>
	</section>
	<section id="content">
		<h3>PRZYPOMNIENIE O NASTĘPNEJ WIZYCIE</h3>
		<?php
		//############
		//do uzupełnienia

		$connection = new PDO("mysql:host=localhost;dbname=mch_salon","root","");

		$query1 = $connection->query("SELECT  imie, rodzaj, nastepna_wizyta, telefon from zwierzeta where nastepna_wizyta!=0");



		foreach($query1 as $rekord1)
		{
			if($rekord1['rodzaj']==1)
			{
				echo("
				<p>Pies: {$rekord1['imie']}<br>
				Data następnej wizyty: {$rekord1['nastepna_wizyta']}, telefon właściciela: {$rekord1['telefon']}
				</p>
				");
			}
			elseif($rekord1['rodzaj'==2])
			{
				echo("
				<p>Kot: {$rekord1['imie']}<br>
				Data następnej wizyty: {$rekord1['nastepna_wizyta']}, telefon właściciela: {$rekord1['telefon']}
				</p>
				");
			}




		}

		?>		
	</section>
	<section id="right">
		<h3>USŁUGI</h3>
		<?php
		//############
		//do uzupełnienia

		?>
		<h3>Nowa usługa</h3>
		<form action="salon.php" method="get">
			<label>Nazwa usługi</label><br>
			<input type="text" name="usluga"><br>
			<label>Cena usługi</label><br>
			<input type="text" name="cena"><br>
			<input type="submit" name="dod" value="dodaj">
		</form>
	</section>
	
	</div>
</body>

</html>