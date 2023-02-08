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
        var_dump($_GET);
        echo "<br>Twoje zamówienie do na dotarło!";
        echo "<li>".$_GET["zupa"]."</li>";//zapis z kropkami
        echo "<li>{$_GET['dan_g']}</li>";//zapis z {}
        echo "<li>".$_GET["napoj"]."</li>";
        echo "<li>"."Numer kontaktowy".$_GET["telefon"]."</li>";
        echo "<li>"."Na wynos? ".$_GET["wynos"]."</li>";
    ?>
    </ol>
</body>
</html>