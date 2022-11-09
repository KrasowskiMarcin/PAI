<?php
    $connection = mysqli_connect('localhost','root','','bd');

    $sql = "SELECT * FROM klient";
    $query = mysqli_query($connection, $sql);

    while($row = mysqli_fetch_row($query)){
        echo $row[0].' '.$row[1].' '.$row[2].' '.$row[3].' '.$row[4];
        echo "<br>";
    }

    $sql = "INSERT INTO `klient`(`id`, `Imie`, `Nazwisko`, `Adres_email`, `remember`) 
    VALUES (NULL, 'Jakub', 'Piskorowski', 'jakub@gmail.com', 500)";

    $query = mysqli_query($connection, $sql);
?>