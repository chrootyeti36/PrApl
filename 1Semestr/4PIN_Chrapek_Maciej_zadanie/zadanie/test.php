<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
    <?php
        $reg = fopen("users.txt","r");
        while(!feof($reg))
        {
            $line = fgets($reg);
            $pieces = explode(";",$line);
            unset($pieces[5]);
            if(!empty($line))
                {
                    echo '<tr><td>';
                    for($a=0;$a<5;$a++)
                    {
                        echo $pieces[$a]."</td><td>";
                    }
                    echo '</td></tr>';
                }
        }
        fclose($reg);          
    ?>
    </table>
</body>
</html>