<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <h1>
            Dzisiejsze promocje:
        </h1>
        <table>
            <tr><td>NUMER</td><td>NAZWA PODZESPOŁU</td><td>OPIS</td><td>CENA</td></tr>
            <?php
                $pol = new PDO("mysql:host=localhost;dbname=mch_sklep","root","");

                $zap1 = 'SELECT id, nazwa, opis, cena from podzespoly where cena<1000 && opis not like "%DDR3%"';

                $wyn = $pol->query($zap1);

                foreach($wyn as $rek)
                {
                    echo "<tr>
                    <td>{$rek['id']}</td>
                    <td>{$rek['nazwa']}</td>
                    <td>{$rek['opis']}</td>
                    <td>{$rek['cena']}</td>
                    </tr>";
                }


                $pol=null;
            ?>
        </table>
    </main>
</body>
</html>