<!DOCTYPE html> 
<?php
    $connection = mysqli_connect('localhost','root','','dane');        
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lista przyjaciół</title>
        <link rel="stylesheet" href="styl.css">
    </head>
    <body>
        <header> 
            <h1> Portal Społecznościowy - moje konto</h1> 
        </header>

        <section class="main">
            <h2> Moje zainteresowania </h2>
            <ul>
                <li>muzyka</li>
                <li>film</li>
                <li>komputery</li>
            </ul>
            <h2> Moi znajomi </h2>

            <!-- PHP -->
            <?php
                $sql = "SELECT imie, nazwisko, opis, zdjecie from osoby WHERE Hobby_id IN(1,2,6)";
                $query = mysqli_query($connection, $sql);

                while($row = mysqli_fetch_row($query)){
            ?>
                <section class="osoba">

                    <!-- blok zdj -->
                    <section class="zdj">
                        <?php
                        echo '<img src='.$row[3].' alt="przyjaciel">';
                        ?>
                    </section>

                    <!-- blok opis -->
                    <section class="opis"> 
                    <h3>
                        <?php
                        echo $row[0].' '.$row[1];
                        ?>
                    </h3>
                    <p>
                        Ostatni wpis: <?php echo $row[2]; ?>
                    </p>
                    </section>

                </section>
                
                <section class="linia">
                    </section>

            <?php
                }
            ?>



                
           
        </section>

        <footer class="footerLeft"> Stronę wykonał: Marcin Krasowski</footer>
        <footer class="footerRight"> <a href="mailto:ja@portal.pl">napisz do mnie</a> </footer>

    </body>
</html


