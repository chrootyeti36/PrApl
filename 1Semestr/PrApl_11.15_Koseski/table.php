<?php

    $conn = new PDO("mysql:host=localhost;dbname=mch_zadanie_koseski","root","");

    $sqltable = ("SELECT * FROM weterynarz");

    $table = $conn->query($sqltable);


    $conn=null;
?>