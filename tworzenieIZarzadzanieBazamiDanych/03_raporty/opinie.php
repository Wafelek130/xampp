<?php
$link = new mysqli('localhost','root','','5e_1_hurtownia');
$sql = "SELECT zdjecie, imie, opinia
        FROM klienci
        JOIN opinie on opinie.Klienci_id = klienci.id
        WHERE Typy_id IN (2,3)";
$result = $link -> query($sql);
$revievs = $result -> fetch_all(1);

$sql = "SELECT imie, nazwisko, punkty
        FROM Klienci
        ORDER BY punkty DESC
        LIMIT 3";
$result = $link -> query($sql);
$tops = $result -> fetch_all(1);
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opinie klientów</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <header>
        <h1>Hurtownia spożywcza</h1>
    </header>
    <main>
        <h2>Opinie naszych klientów</h2>
        <!-- skrypt 1 -->
        <?php
            foreach($revievs as $reviev){
                echo "<section>
                        <img src={$reviev['zdjecie']} alt='klient'>
                        <blockquote>{$reviev['opinia']}</blockquote>
                        <h4>{$reviev['imie']}</h4>
                    </section>";
            }
        ?>
    </main>
    <footer>
        <section>
            <h3>Współpracują z nami</h3>
            <a href="http://sklep.pl">Sklep 1</a>
        </section>
        <section>
            <h3>Nasi top klienci</h3>
            <ol>
                <!-- skrypt2 -->
                <?php
                    foreach($tops as $top){
                        echo "<li>{$top['imie']} {$top['nazwisko']}, {$top['punkty']} pkt.</li>";
                    }
                ?>
            </ol>
        </section>
        <section>
            <h3>Skontaktuj się</h3>
            <p>telefon: 111222333</p>
        </section>
        <section>
            <h3>Autor: 0000000000000</h3>
        </section>
    </footer>
</body>
</html>


<?php
$link -> close();
?>