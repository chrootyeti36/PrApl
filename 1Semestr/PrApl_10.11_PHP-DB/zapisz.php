<?php

    $pol = new PDO("mysql:host=localhost;dbname=mch_ogloszenia","root","");
    
    $imie = $_GET['imie'];
    $nazwisko = $_GET['nazwisko'];
    $telefon = $_GET['telefon'];
    $mail = $_GET['mail'];

    $sqladd = ("INSERT INTO `uzytkownik`(`imie`, `nazwisko`, `telefon`, `email`) VALUES ('$imie','$nazwisko','$telefon','$mail')");
    $pol->query($sqladd);

    $pol=null;

?>