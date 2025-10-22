<?php
$link = new mysqli('localhost','root','','5e_1_dane3');
$delete = $_POST['delete'] ?? null;
if ($delete){
    $sql = "DELETE FROM produkty
            WHERE id = $delete";
$result = $link -> query($sql);
}


$sql = "SELECT id, nazwa, opis, zdjecie
        FROM produkty
        WHERE id = 18 OR id = 22 OR id = 23 OR id = 25";
$result = $link -> query($sql);
$films = $result -> fetch_all(1);

$sql = "SELECT id, nazwa, opis, zdjecie
        FROM produkty
        WHERE Rodzaje_id = 12";
$result = $link -> query($sql);
$movies = $result -> fetch_all(1);



?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video On Demand</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <header>
        <section class="left">
            <h1>Internetowa wypożyczalnia filmów</h1>
        </section>
        <section class="right">
            <table>
                <tr>
                    <td>Kryminał</td>
                    <td>Horror</td>
                    <td>Przygodowy</td>
                </tr>
                <tr>
                    <td>20</td>
                    <td>30</td>
                    <td>20</td>
                </tr>
            </table>
        </section>
    </header>
    <main>
        <section class="recomended">
            <h3>Polecamy</h3>
            <!-- skrypt1 -->
            <section class="divy">
            <?php
                foreach($films as $film){
                    echo "<div class='filmy'>
                                <h4>{$film['id']}. {$film['nazwa']}</h4>
                                <img src='{$film['zdjecie']}' alt='film'>
                                <p>{$film['opis']}</p>
                        </div>";
                }
            ?>
            </section>
        </section>
        <section class="fantasy">
            <h3>Filmy fantastyczne</h3>
            <!-- skrypt2 -->
            <section class="divy">
                <?php
                    foreach($movies as $movie){
                        echo "<div class='filmy'>
                                <h4>{$movie['id']}. {$movie['nazwa']}</h4>
                                <img src='{$movie['zdjecie']}' alt='film'>
                                <p>{$movie['opis']}</p>
                            </div>";
                    }
                ?>
            </section>
        </section>
    </main>
    <footer>
        <form action="" method="post">
            <label for="delete">Usuń film nr.:</label>
            <input type="number" name="delete" id="delete">
            <button>Usuń film</button>
            <!-- skrypt3 -->
        </form>
        Stronę wykonał: Wojciech Walkowiak
        <a href="mailto:ja@poczta.com">00000000000</a>
    </footer>
</body>
</html>


<?php
$link -> close();
?>