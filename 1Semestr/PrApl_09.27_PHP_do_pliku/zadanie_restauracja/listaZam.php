<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista zaówień</title>
</head>
<body>
    <h1>Lista zamówień</h1>

    <?php

    //wyświetlenie zawartości pliku

    /*function wiersz($l)
    {
        $linia = "<tr><td>".str_replace(';','<td></td>',$l)."</td></tr>";
        return $linia;
    }*/

        $zam = fopen("zamowienie.txt",'r');
        while (!feof($zam))//funkcja !feof - spradza czy nie jesteś na końcu pliku
        {
            $linia = fgets($zam);
            if(!empty($linia))//czytamy jeśli nie jest pusta
            {
                echo $linia;
            }
        }
        fclose($zam);
    ?>
</body>
</html>