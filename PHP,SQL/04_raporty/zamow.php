<?php
$link = new mysqli('localhost','root','','obuwie');
$model = $_POST['model'] ?? NULL;
$rozmiar = $_POST['rozmiar'] ?? NULL;
$liczba = $_POST['liczba'] ?? NULL;

if($model && $liczba){
    $sql ="SELECT nazwa, cena, kolor, kod_produktu, material, nazwa_pliku 
            FROM buty
            JOIN produkt ON produkt.model = buty.model
            WHERE produkt.model = '$model'";

    $result = $link -> query($sql);
    $shoe = $result -> fetch_array();
}

?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obuwie</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Obuwie męskie</h1>
    </header>
    <main>
        <h2>Zamówienie</h2>
        <!-- skrypt3 -->
        <?php
            echo "<img src='{$shoe['nazwa_pliku']}' alt='but męski'>
                    <h2>{$shoe['nazwa']}</h2>
                    <p>Cena za $liczba par: ".$liczba*$shoe['cena']." zł</p>
                    <p>Szczegóły produktu: {$shoe['kolor']}, {$shoe['material']}</p>
                    <p>Rozmiar: $rozmiar</p>";
        ?>
        <a href="index.php">Strona Główna</a>
    </main>
    <footer>
        <p>Autor strony: olekcvyl</p>
    </footer>
</body>
</html>