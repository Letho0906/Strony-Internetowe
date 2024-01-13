<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum o psach</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Forum wielbicieli psów</h1>
    </header>
    <section class="mid" id="rtop">
        <br>
        <h2>Zapisz się</h2>
        <br>
        <form method="post" action="">
            login:
            <input type="text" name="login"> <br>
            haslo:
            <input type="password" name="haslo"> <br>
            powtorz haslo
            <input type="password" name="haslo2"> <br>
            <button type="submit">Zapisz</button>
         

        </form>
        <br>
        <p>
                <?php
                    $pol = new mysqli('localhost','root','','psy', 3310) or die('spierdalaj');
                    $login = $_POST['login'];
                    $haslo = $_POST['haslo'];
                    $haslo2 = $_POST['haslo2'];
                    $error = false;

                    if ($login == "" || $haslo == "" || $haslo2 == "")
                    {
                        echo "Wypełnij wszystkie pola";
                        $error = true;
                    }
                    

                    $zap1 = mysqli_query($pol, "Select login from uzytkownicy;");

                    

                    while($li = mysqli_fetch_row($zap1))
                    {
                    if($login == $li[0])
                    {
                        echo "login występuje w bazie danych, konto nie zostało dodane";
                        $error = true;
                        break;
                    }
                    }
                    if($haslo != $haslo2){
                        echo "„hasła nie są takie same, konto nie zostało dodane";
                        $error = true;
                    }


                    $chuj = sha1($haslo);

                    if($error == false)
                    {
                    mysqli_query($pol, "insert into uzytkownicy values(default, '$login','$chuj')");
                    echo "Konto zostało dodane";
                    }


                    mysqli_close($pol)
                ?>
            </p>

    </section>
    <section class="mid" id="rbottom">
        <h2>Zapraszmy wszystkich</h2>
        <br><br>
        <ol>
            <li>wlaścicieli psów</li>
            <li>weterynarzy</li>
            <li>tych, co lubią kupić psa</li>
            <li>tych, co lubią psy</li>
        </ol>
<br>
        <a href="REGULAMIN.HTML">Przeczytaj regulamin forum</a>
    </section>
    <section class="mid" id="left">
        <img src="obraz.jpg" alt="foksterier">
    </section>
    <footer>
        Stronę wykonał: 00000000000
    </footer>
    
</body>
</html>
