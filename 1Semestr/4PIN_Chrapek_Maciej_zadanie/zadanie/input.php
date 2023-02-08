<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.jpg" type="image/x-icon">
    <title>Udało się!</title>
</head>
<body>
    <div class="main">
    <h1>Dziękujemy za zgłoszenie!</h1>
    <ul>
        <h2>Dane, które przyjęliśmy</h2>
        <?php
            echo "<li><b>Imię:</b> {$_GET['name']}</li>";
            echo "<li><b>Nazwisko:</b> {$_GET['surname']}</li>";
            echo "<li><b>Adres e-mail:</b> {$_GET['email']}</li>";

            $pass = $_GET['pass'];
            $rpass = $_GET['repass'];
            $date = date(DATE_RFC2822);

            if($pass==$rpass)
            {
                echo '<a href="registred.php">Lista założonych użytkowników</a>';
                $file = fopen("users.txt","a");
                fwrite($file,$date);
                fwrite($file,";");
                fwrite($file,$_GET['who']);
                fwrite($file,";");
                fwrite($file,$_GET['name']);
                fwrite($file,";");
                fwrite($file,$_GET['surname']);
                fwrite($file,";");
                fwrite($file,$_GET['email']);
                fwrite($file,";");
                fwrite($file,$_GET['pass']);
                fwrite($file,"\n");
                fclose($file);
            }
            else
            {
                echo '<p id="noperm">Niestety nie mogliśmy zapisać Twoich danych. Przyczyna:<br> <div id="niezgadza">NIEPRAWIDŁOWE HASŁA</div><br>';
                echo '<a href="index.html">Powrót do strony głównej</a></p>';
            }
        ?>
    </ul>
    </div>
</body>
</html>