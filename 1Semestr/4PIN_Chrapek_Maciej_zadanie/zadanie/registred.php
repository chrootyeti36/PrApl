<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.jpg" type="image/x-icon">
    <title>Użytkownicy zarejestrowani</title>
    <style>
        body{
            font-family: Raleway, sans-serif;
            font-size:16px;
        }
        table{
        width: 100%;
        border-collapse: collapse;
        }
        td,tr{
            border: 2px solid black;
            background-color: white;
        }

        .registred{
            background-color: white;
        }
        header{
        text-align: center;
        }   
    </style>
</head>
<body>
    <div id="registred">
        <header id="tableHeader">Lista zarejestrowanych użytkowników</header>
        <table id="regphp">
                <?php
                    // function tline($a)
                    // {
                    //     $line = "<tr><td>".str_replace(';','</td><td>',$a)."</td></tr>\n";
                    //     return $line;
                    // }

                    // $reg = fopen("users.txt","r");
                    // while(!feof($reg))
                    // {
                    //     $line = fgets($reg);
                    //     if(!empty($line))
                    //     {
                    //         echo tline($line);
                    //     }
                    // }
                    // fclose($reg);
                    $reg = fopen("users.txt","r");
                    while(!feof($reg))
                    {
                        $line = fgets($reg);
                        $pieces = explode(";",$line);
                        unset($pieces[5]);
                        if(!empty($line))
                            {
                                echo '<tr>';
                                for($a=0;$a<5;$a++)
                                {
                                    echo "<td>".$pieces[$a]."</td>";
                                }
                                echo '</tr>';
                            }
                    }
                    fclose($reg); 
                ?>
        </table>
    </div>
</body>
</html>