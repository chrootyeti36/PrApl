<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Witaj świecie!</title>
</head>
<body>
    <ol>
        <?php
            for($i=1; $i<=10; $i++)
            {
                $sqrt = $i * $i;
                echo "<li>do kwadratu = $sqrt</li>";
            }
        ?>
    </ol>
</body>
</html>