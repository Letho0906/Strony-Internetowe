<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hurtownia</title>
    <link rel="stylesheet" href="styl1.css">
</head>
<body>
    <section id="ltop">
        <img src="zad1.png" alt="Hurtownia komputerowa">
    </section>
    <section id="mtop">
        <ul>
            <li>Sprzęt</li>
            <ol>
                <li>Procesory</li>
                <li>Pamieci RAM</li>
                <li>Monitory</li>
                <li>Obudowy</li>
                <li>Karty graficzne</li>
                <li>Dyski twarde</li>
            </ol>
            <li>Oprogramowanie</li>
        </ul>
    </section>
    <section id="rtop">
        <h1>Hurtownia komputerowa</h1>
        <form method="post" action="index.php">
            <input type="number" name="liczba">
            <button type="submit">SPRAWDŹ</button>
        </form>
    </section>
    <section id="mid">
        <h1>Podzespoły we wskazanej kategorii</h1>
        <?php
            $pol = mysqli_connect('localhost','root','','sklep',3310) or die('spierdalaj');
            $number = $_POST['liczba'];
    
            if($number < 1 || $number > 6){
                echo "czesc";
            }
            $que1 = mysqli_query($pol, "select nazwa, opis, cena from podzespoly where typy_id = $number");
            while($help = mysqli_fetch_row($que1)){
                echo "<p>";
                echo $help[0];
                echo $help[1];
                echo "CENA:";
                echo $help[2];
                echo "</p>";
                
            }
            
            mysqli_close($pol);
        ?>
    </section>
    <section id="footer">
        <h3>Hurtownia działa od poniedziałku do soboty w godzinach 7<sup>00</sup>-16<sup>00</sup></h3>
        <br>
        <a href="mailto: bok@hurtownia.pl" >Napisz do nas</a>
        Partnerzy:
        <a href="http://intel.pl" target="_blank" >Intel</a>
        <a href="http://amd.pl" target="_blank" >Amd</a>
        <br>
        <br>
        <p>Stronę wykonał: 00000000000</p>
    </section>
    
</body>
</html>
