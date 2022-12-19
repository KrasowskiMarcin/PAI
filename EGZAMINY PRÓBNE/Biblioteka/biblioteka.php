<?php
    $connection = mysqli_connect('localhost', 'root','','biblioteka');
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Biblioteka publiczna</title>
</head>
<body>
    <header> <h2> Miejska Biblioteka Publiczna w Książkowicach </h2> </header>

    <section class="left"> 
        <h2>Dodaj czytelnika</h2> 
        <form method="POST">
        imie: <input type="text" name="imie">
        <br>
        nazwisko: <input type="text" name="nazwisko">
        <br>
        rok urodzenia: <input type="number" name="rok">
        <br>
        <input type="submit" value="DODAJ" name="submit">
        </form>
        <?php
        if(isset($_POST['submit'])){
            $imie = $_POST['imie'];
            $nazwisko = $_POST['nazwisko'];
            $rok = $_POST['rok'];

            $kod = strtolower(substr($imie, 0, 2).substr($rok, -2).substr($nazwisko, 0, 2));

            $sql="INSERT INTO czytelnicy (imie, nazwisko, kod) VALUES ('$imie', '$nazwisko', '$kod')";
            $query = mysqli_query($connection, $sql);

            echo "Czytelnik: $nazwisko został dodany do bazy danych";
        }
        ?>
    </section>

    <section class="right"> 
        <h3> Nasi czytelnicy: </h3>
        <ul>
        <?php 
        $sql = "SELECT imie, nazwisko FROM czytelnicy";
        $query = mysqli_query($connection, $sql);
        while($row = mysqli_fetch_row($query)){
            echo '<li>'.$row['0'].' '.$row['1'].'</li>';
        }
        ?>
        </ul>
    </section>

    <section class="mid"> 
    <img src="biblioteka.png" alt="biblioteka"> 
        <h4> „ul. Czytelnicza 25 <br> 12-120 Książkowice <br> tel.: 123123123 <br> 
        e-mail: <a href="biuro@bib.pl"> biuro@bib.pl <a> </h4>
    </section>



    <footer> <p> Projekt witryny: XXXXXXXXXX </p> </footer>
    
</body>
</html>

<?php
    mysqli_close($connection);
?>