<?php
// połączenie z bazą danych
$connection = mysqli_connect('localhost', 'root', '', 'egzamin');

// PHP ZADANIE 2
session_start();

setcookie("first", "1", time() + 3600);
$_COOKIE["first"] = 1;
if(@$_SESSION['notFirst'] == "true"){
    $_COOKIE["first"] = 0;
}
?>

<html>
    <head> 
    <meta charset="utf-8"></meta>
    <title>Odloty samolotów</title>
    <link rel="stylesheet" href="styl6.css">
    </head>
    </head>
    <body>
        <header class="leftHeader"> <h2>Odloty z lotniska</h2></header>
        <header class="rightHeader">
            <img src="zad6.png" alt="logotyp"/>
        </header>

        <section class="main">
            <h4>Tabela odlotów</h4>
            <?php
            // PHP ZADANIE 1
            $sql = "SELECT id, nr_rejsu, czas, kierunek, status_lotu from odloty ORDER BY czas DESC";
            $query = mysqli_query($connection, $sql);

            echo "<table>";
            echo "<tr>
            <th>LP.</th>
            <th>NUMER REJSU</th>
            <th>CZAS</th>
            <th>KIERUNEK</th>
            <th>STATUS</th>
            </tr>";
            while($result = mysqli_fetch_array($query)){
                echo "<tr>";
                echo "<td>".$result['id']."</td>";
                echo "<td>".$result['nr_rejsu']."</td>";
                echo "<td>".$result['czas']."</td>";
                echo "<td>".$result['kierunek']."</td>";
                echo "<td>".$result['status_lotu']."</td>";
                echo "</tr>";
            }
            echo "</table>";
            ?>
        </section>

        <footer class="leftFooter"><a href="kw1.jpg"> Pobierz obraz</a></footer>
        <center>
        <footer class="midFooter">
            <?php
            // zadanie 2
            if(isset($_COOKIE["first"])){
                if($_COOKIE["first"] == "1"){
                    echo "<p> <i> Dzień dobry! Sprawdź regulamin naszej strony </i> </p>";
                    $_SESSION['notFirst'] = "true";
                }else{
                    echo "<p> <b> Miło nam, że nas znowu odwiedziłeś </b> </p>";
                }
            }
            ?>
        </footer>
        </center>
        <footer class="rightFooter">Autor: XXXXXXXXXXX(PESEL)</footer>
    
        



</body>
</html>

