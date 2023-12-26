<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Document</title>
</head>
<body>
    
<div id = "Top">

 Witamy w restauracji "Wszystkie smaki"
</div>

<div class="Middle" id = "Right">
TU MA BYĆ ZDJĘCIE
</div>
<div class="Middle" id = "Left">
<b>U nas dobrze zjesz!</b> 
<ol>
    <li>Obiady od 40 zł</li>
    <li>Przekąski do 10 zł</li>
    <li>Kolacje od 20 zł</li>
</ol>
</div>
<div id="bottom">
<h1>Zarezerwuj stolik on-line</h1>
<form method = "POST">
    <label for="date">Data (format rrrr-mm-dd):</label><br>
    <input type="text" id="date" name="date"><br>
    <label for="pn">Ile osób?:</label><br>
    <input type="number" id="pn" name="pn"><br>
    <label for="phone">Twój numer telefonu:</label><br>
    <input type="text" id="phone" name="phone"><br>
    <input type="checkbox"> ZGADZASZ SIĘ NA DANE OSOBOWE WARIACIE? <br>
    <button type="reset">WYCZYŚĆ</button> <button type="submit">ZAREZERWUJ</button>
</form>
<?php
$pol = new mysqli('localhost','root','','rest', 3310) or die('No nie da się');

mysqli_set_charset($pol, "utf8");

$date =$_POST['date'];
$pn =$_POST['pn'];
$phone =$_POST['phone'];

$polec = "insert into rest values('default','$date','$pn','$phone')";

$zap=$pol->query($polec);
if($zap == true)
    print 'rekord dodany';
else
    print 'blad';
$pol->close();

?>

</div>
<footer>
    Strone wykonał: 0000000000000
</footer>

</body>
</html>
