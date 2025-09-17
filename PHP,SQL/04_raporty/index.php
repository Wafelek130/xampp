<?php
$link = new mysqli('localhost','root','','obuwie');
$sql = "SELECT model 
        FROM produkt";
$result = $link -> query($sql);
$shoes = $result -> fetch_all(1);

$sql = "SELECT buty.model, nazwa, cena, nazwa_pliku
        FROM buty
        JOIN produkt ON produkt.model = buty.model";
$result = $link -> query($sql);
$options = $result -> fetch_all(1);
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
        <form action="zamow.php" method="post">
            <label for="model">Model: </label>
            <select name="model" id="model" class="kontrolki">
                <!-- skrypt1 -->
                <?php
                    foreach($shoes as $shoe){
                        echo "<option value='{$shoe['model']}'>{$shoe['model']}</option>";
                    }
                ?>
            </select>

            <label for="rozmiar">Rozmiar: </label>
            <select name="rozmiar" id="rozmiar" class="kontrolki">
                <option value="40">40</option>
                <option value="41">41</option>
                <option value="42">42</option>
                <option value="43">43</option>
            </select>

            <label for="liczba">Liczba par: </label>
            <input type="number" name="liczba" id="liczba" class="kontrolki">
            
            <button type="submit" class="kontrolki">Zamów</button>
        </form>
        <!-- skrypt2 -->
        <?php
            foreach($options as $option){
                echo " <section class='buty'>
                            <img src='{$option['nazwa_pliku']}' alt='but męski'>
                            <h2>{$option['nazwa']}</h2>
                            <h5>Model: {$option['model']}</h5>
                            <h4>Cena: {$option['cena']}</h4>
                        </section>";
            }
        ?>
    </main>
    <footer>
        <p>Autor strony: olekcvyl</p>
    </footer>
</body>
</html>

<?php

$link -> close();
?>