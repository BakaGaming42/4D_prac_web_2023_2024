<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prognoza pogody wrocław</title>
    <link rel="stylesheet" href="styl2.css">
</head>
<body>
<header>
    <section class="headL"> 
        <img src="pliki2/logo.png" alt="meteo">
    </section>
    <section class="headM">
        <h1>Prognoza dla Wrocławia</h1>
    </section>
    <section class="headR">
        <p>Maj,2019</p>
    </section>
</header>

<main>

<table>
<tr class="tbh">
<td>DATA</td>
<td>TEMPERATURA W NOCY</td>
<td>TEMPERATURA W DZIEŃ</td>
<td>OPADY[mm/h]</td>
<td>CIŚNIENIE[hPa]</td>
</tr>
<?php
$host = "localhost";
$user ="root";
$pass = "";
$db = "prognoza";
$polaczenie = mysqli_connect($host, $user, $pass, $db);
$zapytanie = "SELECT * FROM `pogoda` WHERE `miasta_id` = 1 ORDER BY `data_prognozy`;";
$wynik = mysqli_query($polaczenie, $zapytanie);
while($row = mysqli_fetch_row($wynik))
{
echo"<tr>";
echo "<td>$row[2]</td>";
echo "<td>$row[3]</td>";
echo "<td>$row[4]</td>";
echo "<td>$row[5]</td>";
echo "<td>$row[6]</td>";
echo "</tr>";
}
?>
</table>

</main>

<section>
    <section class="secL">
        <img src="pliki2/obraz.jpg" alt="Polska, Wrocław">
    </section>
    <section class="secR">
        <a href="kwerendy.txt">Pobierz kwerendy</a>
    </section>
</section>

<footer>
    <p>Strone wykonał 00000000000</p>
</footer>
</body>
</html>