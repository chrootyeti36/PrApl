<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Ogłoszenia</h1>
    <?php
        //PDO
        //nawiązanie połączenia z bazą danych PDO
        $pol = new PDO("mysql:host=localhost;dbname=mch_ogloszenia","root","");

        //$pol = new mysqli("localhost","ogloszenie","root","");

        //wyświetlanie polskich znaków (jeśli z automatu nie działają)
        $pol->exec("set names utf8mb4");

        //$pol->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        //$wyn = $pol->query("SELECT `tytul`,`tresc` FROM `ogloszenie`");
        $wyn = $pol->query("SELECT og.tytul, og.tresc,u.imie,u.nazwisko,u.email FROM `ogloszenie` og LEFT JOIN uzytkownik u ON og.uzytkownik_id = u.id");

        //pętla która jako parametr dostanie tablicę to odczytuje je kolejno
        foreach($wyn as $rekord){
            //var_dump($rekord);
            //$rekord['tytul'];
            //$rekord['tresc'];

            echo "<article>
            <h4>{$rekord['tytul']}</h4>
            <p>{$rekord['tresc']}</p>
            <div>{$rekord['imie']} {$rekord['nazwisko']}</div>
            <p>{$rekord['email']}</p>
            </article>";
        }

        $pol = null;
    ?>
</body>
</html>

<!-- 
Przykładowy SQL:
SELECT og.tytul, og.tresc,u.imie,u.nazwisko,u.email FROM `ogloszenie` og LEFT JOIN uzytkownik u ON og.uzytkownik_id = u.id 
-->