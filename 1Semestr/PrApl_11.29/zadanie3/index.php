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

    $pol=new PDO('mysql:dbhost=localhost;dbname=mch_biblioteka','root','');

    // $plik = fopen("zapytanie.txt",'r');

    // $zapytanie = fgets($plik);
    
    $sql1='SELECT imie, nazwisko from autorzy';

    $rek1=$pol->query($sql1);

    foreach($rek1 as $line1)
    {
        echo "<li>{$line1['imie']} {$line1['nazwisko']}</li>";
    }

    $pol=null;

    ?>
    </ol>

    <form method="post">
        <label for="imie">imię: <input type="text" name="imie" ></label><br>
        <label for="">nazwisko: <input type="text" name="nazwisko" ></label><br>
        <label for="">rok urodzenia: <input type="number" name="rok"></label><br>
        <input type="submit" value="DODAJ">
    </form>

    <?php

        $pol2=new PDO('mysql:dbhost=localhost;dbname=mch_biblioteka','root','');

        

        if(isset($_POST['imie']) && isset($_POST['nazwisko']) && isset($_POST['rok']))
        {
            $imie=$_POST['imie'];
            $nazwisko=$_POST['nazwisko'];
            $rok=$_POST['rok'];

            $inimie = strtoupper(substr($imie,0,2)); // dwa znaki z początku
            $innazwisko = strtoupper(substr($nazwisko,0,2)); //dwa znaki z początku
            $inrok = substr($rok,-2); // dwa znaki od końca

            $inrekord=$inimie.$innazwisko.$inrok; //połączenie stringów

            //print($rekord);
            
            $sql2="INSERT INTO `czytelnicy`(`imie`, `nazwisko`,`kod`) VALUES ('$imie','$nazwisko','$inrekord')";
            if($imie!="" && $nazwisko!="" && $rok!="" ){
                $rek2=$pol2->query($sql2);
                echo "Czytelnik: $imie $nazwisko został dodany do bazy danych";
            }

        }

        $pol=null;
    ?>


</body>
</html>