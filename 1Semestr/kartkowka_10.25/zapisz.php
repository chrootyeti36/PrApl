<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Udało się!</title>
</head>
<body>
    <h1>Udało się przesłać formularz!</h1>
    <?php

        //Grupa 1

        $plik = fopen("komentarze.txt","a");

        $linia = implode("#",$_GET)."\n";
        fwrite($plik,$linia);

        // fwrite($plik,$_GET['komentarz']);
        // fwrite($plik,"#");
        // fwrite($plik,$_GET['podpis']);
        // fwrite($plik,"\n");

        fclose($plik);

    ?>
</body>
</html>