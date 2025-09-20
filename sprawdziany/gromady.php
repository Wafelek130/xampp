<?php
$link = new mysqli('localhost','root','','baza2');
$sql = "SELECT zwierzeta.id,Gromady_id,gatunek,wystepowanie,nazwa
        FROM Zwierzeta
        JOIN gromady ON gromady.id = zwierzeta.Gromady_id
        WHERE Gromady_id BETWEEN 4 AND 5";
$result = $link -> query($sql);
$ssaks = $result -> fetch_all(1);

$sql = "SELECT gatunek, obraz
        FROM Zwierzeta
        WHERE Gromady_id = 4";
$result = $link -> query($sql);
$imgs = $result -> fetch_all(1);
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gromady kręgowców</title>
    <link rel="stylesheet" href="style12.css">
</head>
<body>
    <header>
        <section class="menu">
            <a href="gromada-ryby.html" id="podstrona">gromada ryb</a>
            <a href="gromada-ptaki.html" id="podstrona">gromada ptaków</a>
            <a href="gromada-ssaki.html" id="podstrona">gromada ssaków</a>
        </section>
        <section class="logo">
            <h2>GROMADY KRĘGOWCÓW</h2>
        </section>
    </header>
    <main>
        <section class="left">
            <!-- skrypt 1 -->
            <?php
                foreach($ssaks as $ssak){
                echo "<p>{$ssak['id']}. {$ssak['gatunek']}</p>
                    <p>Występowanie: {$ssak['wystepowanie']}, gromada {$ssak['nazwa']}</p>
                    <hr>";

                    // SELECT zwierzeta.id,Gromady_id,gatunek,wystepowanie,nazwa
                    // FROM Zwierzeta
                    // JOIN gromady ON gromady.id = zwierzeta.Gromady_id
                    // WHERE Gromady_id BETWEEN 4 AND 5"

                }
            ?>
        </section>
        <section class="right">
            <h1>PTAKI</h1>
            <ol>
                <?php
                    foreach($imgs as $img){
                        echo "<li><a href='{$img['obraz']}'>{$img['gatunek']}</a></li>";
                    }
                ?>
                    <!-- skrypt 2 -->
                    <a href=""></a>
            </ol>
            <img src="sroka.jpg" alt="Sroka zwyczajna, gromada ptaki">
        </section>
    </main>
    <footer>
        Stronę o kręgowcach przygotował: 00000000000
    </footer>
</body>
</html>


<?php
$link -> close();
?>