<!DOCTYPE html>
<?php
    $connection = mysqli_connect('localhost', 'root', '', 'dane3');
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Video on Demand</title>
        <link rel="stylesheet" href="styl3.css">
    </head>

    <body>
        <header class="headLeft">
            <h1>Internetowa wypożyczalnia filmów</h1>
        </header>
        <header class="headRight">
            <table>
                <tr>
                    <tr>Kryminał</tr>
                    <tr>Horror</tr>
                    <tr>Przygodowy</tr>
                </tr>
                <tr>
                    <td>20</td>
                    <td>30</td>
                    <td>20</td>
                </tr>
            </table>
        </header>

        <!-- polecamy -->
        <section class="listaPolecamy">
            <h3> Polecamy </h3>
            <section class="wrapper">
            <?php
            //skrypt 1
            $sql = 'SELECT id, nazwa, opis, zdjecie FROM produkty WHERE id IN(18,22,23,25)';
            $query = mysqli_query($connection, $sql);

            while($row = mysqli_fetch_row($query)){
            ?>
                <section class="film">
                <h4><?php echo $row[0].'. '.$row[1] ?></h4>
                <img src=<?php echo $row[3] ?> alt="film">
                <p><?php echo $row[2] ?></p>
                </section>
            <?php
            }

            ?>
            </section>

        </section>


        
        <section class="listaFantastyczne">
            <h3> Filmy fantastyczne </h3>
            <section class="wrapper">
            <?php
            //skrypt 2
            $sql = 'SELECT id, nazwa, opis, zdjecie FROM produkty WHERE Rodzaje_id = 12';
            $query = mysqli_query($connection, $sql);

            while($row = mysqli_fetch_row($query)){
            ?>
                <section class="film">
                <h4><?php echo $row[0].'. '.$row[1] ?></h4>
                <img src=<?php echo $row[3] ?> alt="film">
                <p><?php echo $row[2] ?></p>
                </section>
            <?php
            }

            ?>
            </section>

        </section> 

        <footer>
            <form method="POST" action="./video.php">
                Usuń film nr.: 
                <input type="number" name="id">
                <input type="submit" value="Usuń film">
            </form>
            <br>
            Stronę wykonał: <a href="mailto:ja@poczta.pl"> Marcin Krasowski </a>
        </footer>

        <?php
        // skrypt 3
        if(isset($_POST['id'])){
            $id = $_POST['id'];

            // if(empty($id)){
            //     return;
            // }

            $sql = "DELETE FROM produkty WHERE id = '$id'";
            $query = mysqli_query($connection, $sql);

        }
        ?>
    </body>

    <?php
    mysqli_close($connection);
    ?>
</html>