<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Ogloszeniowy</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        
        <h1> Portal Ogłoszeniowy</h1>
        
    </header>
    <section id="right">
        <br>
        <h2>Ogłoszenia kategori książki</h2>
        <br>
        <?php

            $pol = mysqli_connect('localhost','root','','egzamin', 3310) or die('spierdalaj');
                
            $zap1 = mysqli_query($pol, "select id, tytul, tresc from ogloszenie where kategoria = 1;");
            
            
            while($chuj = mysqli_fetch_array($zap1)){
                $zap2 = mysqli_query($pol, "select u.telefon from ogloszenie as o left join uzytkownik as u on o.uzytkownik_id = u.id where o.id = $chuj[0];");
                echo '<h3>';
                echo $chuj[0];
                echo $chuj[1];
                echo '<br>';
                echo '</h3>';
                echo '<p>';
                echo $chuj[2];
                echo '</p>';
                while ($penis = mysqli_fetch_array($zap2)){
                echo '<p>';
                echo $penis[0];
                echo '</p>';

                }
            }
            mysqli_close($pol);
        ?>
    </section>
    <section id="left">
        <br>
        <h2>Kategorie Ogłoszeń</h2>
        <br>
        <ol>
            <li>Książki</li>
            <li>Muzyka</li>
            <li>Filmy</li>
        </ol>
        <img src="ksiazki — kopia.jpg" alt="Kupie/ sprzedam książke">
        <table>
            <tr>
                <th>Liczba ogłoszeń</th>
                <th>cena ogłoszenia</th>
                <th>Cena</th>
            </tr>
            <tr>
                <td>1-10</td>
                <td>1 PLN</td>
                <td rowspan="3">Subskrypcja newslettera <br> to upust 0,20 PLN na <br> ogłoszenie</td>
            </tr>
            <tr>
                <td>11-50</td>
                <td>0,80 PLN</td>
            </tr>
            <tr>
                <td>51 i więcej</td>
                <td>0,60 PLN</td>
                
            </tr>
        </table>
    </section>
    <footer>
        Portal opracował: 00000000000
    </footer>
    
</body>
</html>
