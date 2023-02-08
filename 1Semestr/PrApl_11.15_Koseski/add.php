<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Udało się przesłać formularz!</h1>
    <?php
    
        $conn = new PDO("mysql:host=localhost;dbname=mch_zadanie_koseski","root","");
        $rasa = $_GET['rasa'];
        $usluga = $_GET['usluga'];
        $email = $_GET['email'];
        $telefon = $_GET['telefon'];

        echo("
        Oto dane, które przyjęliśmy:<br>
        Rasa: $rasa<br>
        Usluga: $usluga<br>
        E-mail: $email<br>
        Telefon: $telefon<br>
        ");




        $sqladd = ("INSERT INTO `weterynarz`(`rasa`, `usluga`, `email`, `telefon`) VALUES ('$rasa','$usluga','$email','$telefon')");

        //$conn->query($sqladd);

        $conn=null;
?>
</body>
</html>