<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       // Skrypt 2
        $pol=new PDO('mysql:dbhost=localhost;dbname=szkola','root','');
        if((isset($_POST['imie']))&&(isset($_POST['nazwisko']))&&(isset($_POST['dataur']))&&(isset($_POST['uwagi'])))
        {
            $imie=$_POST['imie'];
            $nazwisko=$_POST['nazwisko'];
            $dataur=$_POST['dataur'];
            $uwagi=$_POST['uwagi'];
            echo "Uczeń: $imie $nazwisko został zapisany w bazie danych";
            $email=strtolower($imie.'-'.substr($nazwisko,0,1).'@zs1mm.edu.pl');
            $pol->query("INSERT INTO `uczniowie`(`imie`, `nazwisko`, `dataur`, `uwagi`, `email`) VALUES ('$imie','$nazwisko','$dataur','$uwagi','$email')");
        }
        $pol=null;
    ?>
    <form method="post">
        imię: <input type="text" name="imie"><br>
        nazwisko: <input type="text" name="nazwisko"><br>
        data urodzenia: <input type="date" name="dataur"><br>
        uwagi: <input type="text" name="uwagi"><br>
        <input type="submit" value="wyślij">
    </form>
    
    <?php
        // Skrypt 1
        $pol=new PDO('mysql:dbhost=localhost;dbname=szkola','root','');
        $php1=$pol->query('SELECT id, imie, nazwisko, dataur from uczniowie');
        foreach($php1 as $rek)
        {
            echo "
            <h4>{$rek['imie']} {$rek['nazwisko']}</h4>
            <p>{$rek['dataur']}  <a href=\"szkola.php?delid=$id\">Usuń</a></p>
            ";
        }
        $pol=null;
    ?>

    <?php   
        // Skrypt na 6

            if(isset($_GET['delid']))
            {
                echo "{$_GET['delid']}";
            }

        /* $pol=new PDO('mysql:dbhost=localhost;dbname=szkola','root','');
         $php1=$pol->query('SELECT id, imie, nazwisko, dataur from uczniowie');
         $a=0;
         foreach($php1 as $rek)
         {
             $id=$a;
             echo "
             <h4>{$rek['imie']} {$rek['nazwisko']}".'<form action="post"><input type="submit" value="usuń" name="'.$id.'"></form>'."</h4>
             <p>{$rek['dataur']}</p>
             ";
             $a++;
         }
         Szczerze mówiąc, myślę, że należy w tym wypadku wykonać jakiś button który uruchamiałby skrypt usuwający dane. Tylko, że ten skrypt musi wiedzieć, jaki rekord usunąć.
         jeszce jest opcja, żeby pobierać id z bazy, następnie przypisywać je do rekordów i zrobić po prostu skrypt, który usuwałby określony rekord. Jestem w stanie to zrobić, 
         ale niestety nie wyrobię się w czasie dzisiejszych zajęć (07.02). Udanych ferii!
         
         $pol=null; */

        

    ?>
</body>
</html>