<?php
$link = new mysqli('localhost','root','','5e_1_biuro');
$sql = "SELECT id, dataWyjazdu, cel, cena
        FROM wycieczki
        WHERE dostepna = 1";
$result = $link -> query($sql);
$trips = $result -> fetch_all(1);

$sql = "SELECT nazwaPliku, podpis
        FROM zdjecia
        ORDER BY podpis desc";
$result = $link -> query($sql);
$photos = $result -> fetch_all(1);
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wycieczki po Europie</title>
    <link rel="stylesheet" href="styl4.css">
</head>
<body>
    <header>
        <h1>BIURO TURYSTYCZNE</h1>
    </header>

    <main>
        <h3>Wycieczki, na które są wolne miejsca</h3>
        <ul>
        <!-- skrypt 1 -->
        <?php
            foreach($trips as $trip){
                echo "<li> {$trip['id']}. dnia {$trip['dataWyjazdu']} jedziemy do {$trip['cel']}, cena: {$trip['cena']} </li>";
            }
        ?>
        </ul>
    </main>

    <div class="flex">
        <section class="left">
            <h2>Bestselery</h2>
            <table>
                <tr>
                    <td>Wenecja</td>
                    <td>kwiecień</td>
                </tr>
                <tr>
                    <td>Londyn</td>
                    <td>lipiec</td>
                </tr>
                <tr>
                    <td>Rzym</td>
                    <td>wrzesień</td>
                </tr>
            </table>
        </section>
        <section class="middle">
            <h2>Nasze Zdjęcia</h2>
            <!-- skrypt 2 -->
            <?php
                foreach($photos as $photo){
                    echo "<img src={$photo['nazwaPliku']} alt={$photo['podpis']}>";
                    
                }
            ?>
        </section>
        <section class="right">
            <h2>Skontaktuj się</h2>
            <a href="mailto:turysta@wycieczki.pl">napisz do nas</a>
            <p>telefon: 111222333</p>
        </section>
    </div>
    <footer>
        <p>Stronę wykonał: olekkurwon</p>
    </footer>
</body>
</html>

<?php
$link -> close();
?>