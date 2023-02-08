
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <select name="pozycja">
            <option value="bramkarz">Bramkarze</option>
            <option value="obronca">Obrońcy</option>
            <option value="pomocnik">Pomocnicy</option>
            <option value="napastnik">Napastnicy</option>
        </select>
        <input type="submit" value="Zobacz">
    </form>

    <ol>
    <?php

    $pol = new PDO("mysql:host=localhost;dbname=mch_egzamin","root","");

    if(isset($_POST['pozycja']))
    {
        
        $pozycja = $_POST['pozycja'];

        $sql1 = 'SELECT zawodnik.imie, zawodnik.nazwisko from zawodnik join pozycja on zawodnik.pozycja_id=pozycja.id where pozycja.nazwa="'.$pozycja.'";';

        $rek1= $pol->query($sql1);

        foreach($rek1 as $line)
        {
            echo "<li>{$line['imie']} {$line['nazwisko']}</li>";
        }
    }
    
    $sql2 = 'SELECT zespol, punkty, grupa from liga order by punkty desc';

    $rek2=$pol->query($sql2);

    foreach($rek2 as $line2)
    {
        echo "<h2>{$line2['zespol']}</h2>
        <h1>{$line2['punkty']}</h1>
        <p>grupa: {$line2['grupa']}</p>";
    }

    $pol=null;
    ?>
    </ol>
</body>
</html>

<!-- select zawodnik.imie, zawodnik.nazwisko from zawodnik join pozycja on zawodnik.pozycja_id=pozycja.id where pozycja.nazwa="Bramkarz";

select imie,nazwisko from zawodnik where pozycja_id=4

select zespol, punkty, grupa from liga order by punkty desc -->