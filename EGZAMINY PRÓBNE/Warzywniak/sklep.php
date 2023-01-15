<!DOCTYPE html>
<?php
    $connection = mysqli_connect('localhost', 'root', '', 'dane2');
?>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <title>Warzywniak</title>
        <link rel="stylesheet" href="styl2.css">
    </head>
    <body>
        <header id="headLewy">
            <h1>Internetowy sklep z eko-warzywami</h1>
        </header>
        <header id="headPrawy">
            <ol>
                <li>warzywa</li>
                <li>owoce</li>
                <li><a href="https://terapiasokami.pl/" target="_blank">soki</a></li>
            </ol>
        </header>
        <section id="main">
            <?php
                $sql = "SELECT nazwa, ilosc, opis, cena, zdjecie FROM produkty WHERE Rodzaje_id IN(1,2)";
                $query = mysqli_query($connection, $sql);

                while($row = mysqli_fetch_row($query)){
                    echo "<section class='produkt'>";
                    echo "<img src=$row[4] alt='warzywniak'>";
                    echo "<h5>".$row[0]."</h5>";
                    echo "<p>".$row[2]."</p>";
                    echo "<p> Na stanie: ".$row[1]."</p>";
                    echo "<h2>".$row[3]." zł </h2>";
                    echo "</section>";
                }
            ?>
        </section>
        <footer>
            <form method="POST" action="sklep.php">
                Nazwa: <input type="text" name="nazwa">
                Cena: <input type="number" name="cena">
                <input type="submit" name="submit" value="Dodaj produkt">
            </form>

            Stronę wykonał: Marcin Krasowski
        </footer>
        <?php
            if(isset($_POST['submit'])){
                $nazwa = $_POST['nazwa'];
                $cena =  $_POST['cena'];
                $sql = "INSERT INTO produkty(`id`, `Rodzaje_id`, `Producenci_id`, `nazwa`, `ilosc`, `opis`, `cena`, `zdjecie`) VALUES(NULL,1,4,'$nazwa',10,'',$cena,'owoce.jpg')";
                $query = mysqli_query($connection, $sql);
            }
        ?>
    </body>
</html>
<?php
    mysqli_close($connection);
?>