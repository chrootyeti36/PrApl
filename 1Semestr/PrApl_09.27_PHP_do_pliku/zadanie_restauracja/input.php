<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ol>
    <?php
        echo "Twoje zamówienie do na dotarło!";
        echo "<li>".$_GET["zupa"]."</li>";//zapis z kropkami
        echo "<li>{$_GET['dan_g']}</li>";//zapis z {}
        echo "<li>".$_GET["napoj"]."</li>";
        echo "<li>"."Numer kontaktowy: ".$_GET["telefon"]."</li>";
        

        //zapis do pliku!
        $plik = fopen("zamowienie.txt",'a');//parametr 'w' nadpisuje, paramtr 'a' dopisuje
        $linia = implode(";",$_GET)."\n";
        /*niżej dłuższa wersja - poprawna
        fwrite($plik,$_GET['zupa']);
        fwrite($plik,";");
        fwrite($plik,$_GET['dan_g']);
        fwrite($plik,";");
        fwrite($plik,$_GET['napoj']);
        fwrite($plik,";");
        fwrite($plik,$_GET['telefon']);
        fwrite($plik,"\n");*/

        fwrite($plik,$linia);
        fclose($plik);
        

    ?>
    </ol>
</body>
</html>