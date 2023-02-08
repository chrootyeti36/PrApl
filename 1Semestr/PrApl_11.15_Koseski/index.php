<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weterynarz</title>
</head>
<body>
    <h1>Podaj dane swojego pupila!</h1>
    <div class="main">
        <form method="get" action="add.php">
            <label for="rasa">
                Wybierz rasę:<br>
                <select name="rasa">
                    <option value="Staffordshire Bull Terrier">Staffordshire Bull Terrier</option>
                    <option value="Buldog francuski">Buldog francuski</option>
                    <option value="Dalmatyńczyk">Dalmatyńczyk</option>
                    <option value="Boston Terrier">Boston Terrier</option>
                    <option value="Hart">Hart</option>
                </select>
            </label>
            <label for="usluga">
                <br>Wybierz rodzaj usługi<br>
                <input type="radio" name="usluga" value="Strzyżenie">Strzyżenie<br>
                <input type="radio" name="usluga" value="Odrobaczenie">Odrobaczenie<br>
                <input type="radio" name="usluga" value="Kontrola">Kontrola<br>
            </label>
                
            Podaj email:<br><input type="email" name="email"><br>
            Podaj numer telefonu:<br><input type="text" name="telefon" maxlength="9"><br>
            <br><input type="submit" value="Umów wizytę!">
            <p>
                
            </p>
        </form>
        
    </div>
</body>
</html>