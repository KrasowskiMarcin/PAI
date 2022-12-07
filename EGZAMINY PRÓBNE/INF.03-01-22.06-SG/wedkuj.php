<?php
    $connection = mysqli_connect('localhost','root','','wedkowanie');

    // Zapytanie 1: wybierające jedynie pola id, nazwa i wystepowanie z tabeli Ryby dla ryb drapieżnych
    $sql1 = "SELECT id, nazwa, wystepowanie FROM ryby WHERE styl_zycia = 1";

    // Zapytanie 3: wybierające jedynie pole nazwa z tabeli Ryby oraz odpowiadające tej nazwie
    // pola akwen i wojewodztwo z tabeli Lowisko dla łowisk, które są rzekami. Zapytanie
    // wykorzystuje relację
    $sql2 = "SELECT ryby.nazwa, lowisko.akwen, lowisko.wojewodztwo FROM ryby, lowisko WHERE lowisko.rodzaj = 3 AND ryby.id = lowisko.Ryby_id";
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Wędkowanie</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <header><h1> Portal dla wędkarzy</h1></header>
    <section class="right">
        <img src="ryba1.jpg" alt="sum"/>
        <center><a href ="kwerendy.txt"> Pobierz kwerendy </a></center>
    </section>
    <section class="leftup">
        <h3>Ryby zamieszukjące rzeki</h3>
        <?php
            $query = mysqli_query($connection, $sql2);
            while($row = mysqli_fetch_row($query)){
                echo "<li>";
                echo $row[0].'  pływa w rzece '.$row[1].', '.$row[2];
                echo "</li>";
            }
        ?>
    </section>
    <section class="leftdown">
        <h3>Ryby drapieżne naszych wód</h3>
        <table>
            <tr>
                <th>L.p.</th>
                <th>Gatunek</th>
                <th>Występowanie</th>
            </tr>
            <?php
                $query = mysqli_query($connection, $sql1);
                while($row = mysqli_fetch_row($query)){
                echo 
                "<tr>
                    <th>$row[0]</th>
                    <th>$row[1]</th>
                    <th>$row[2]</th>
                </tr>";
                }
            ?>
        </table>
    </section>
    <footer><p>„Stronę wykonał: Marcin Krasowski"</p></footer>
</body>
</html>

<!-- echo '<tr>'.'<th>'.$row[0].'</th>'.'</tr>'; -->

<?php
mysqli_close($connection);
?>