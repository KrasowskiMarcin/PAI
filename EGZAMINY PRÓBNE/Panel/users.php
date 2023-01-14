<!DOCTYPE HTML>
<?php
    $connection = mysqli_connect('localhost', 'root', '', 'dane4');
?>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <title>Panel administratora</title>
        <link rel="stylesheet" href="styl4.css">
    </head>
    <body>
        <header> <h3>Portal Społecznościowy - panel administratora</h3> </header>

        <section id="left"> 
            <h4>Użytkownicy</h4> 
            <?php
                $sql = "SELECT id, imie, nazwisko, rok_urodzenia, zdjecie FROM osoby LIMIT 30";
                $query = mysqli_query($connection, $sql);
                while($result = mysqli_fetch_row($query)){
                    $wiek = (2023 - $result[3]);
                    echo $result[0].'. '.$result[1].' '.$result[2].", ".$wiek.' lat';
                    echo "<br>";
                }
            ?>
            <a href="settings.html">Inne ustawienia</a>
        </section>

        <section id="right">
            <h4>Podaj id użytkownika</h4>

            <form method="POST" action="users.php">
                <input type="number" name="id">
                <input type="submit" name="submit" class="submitButton">
                <hr>
                <?php
                    if(isset($_POST['submit'])){
                        $id = $_POST['id'];
                        $sql = "SELECT osoby.imie, osoby.nazwisko, osoby.rok_urodzenia, osoby.opis, osoby.zdjecie, hobby.nazwa FROM osoby INNER JOIN hobby ON hobby.id = osoby.Hobby_id WHERE osoby.id = $id;";
                        $query = mysqli_query($connection, $sql);

                        while($result = mysqli_fetch_row($query)){
                            echo "<h2>";
                            echo $id.'. '.$result[0].' '.$result[1];
                            echo "</h2>";
                            echo "<br>";
                            echo "<img src=$result[4] alt=$id>";
                            echo "<br>";
                            echo "<p> Rok urodzenia: $result[2] </p>";
                            echo "<p> Opis: $result[3] </p>";
                            echo "<p> Hobby: $result[5] </p>";
                        }
                    }
                ?>
            </form>
        </section>

        <footer> Stronę wykonał: Marcin Krasowski </footer>
    </body>
</html>

<?php
    mysqli_close($connection);
?>