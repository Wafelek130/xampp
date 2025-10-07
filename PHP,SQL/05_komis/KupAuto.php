<?php
$link = new mysqli('localhost','root','','5e_1_komis');

$brand_f = $_POST['brand'] ?? null;
var_dump($_POST);
if($brand_f){
    var_dump($brand_f);
    $sql = "SELECT model, cena, zdjecie
            FROM samochody
                JOIN marki on marki.id = samochody.marki_id
            WHERE nazwa = '$brand_f'";
    $result = $link -> query($sql);
    $selections = $result -> fetch_all(1);
}

$sql = "SELECT model, rocznik, przebieg, paliwo, cena, zdjecie
        FROM samochody
        WHERE id = 10";
$result = $link -> query($sql);
$featured = $result -> fetch_array();

$sql = "SELECT nazwa, model, rocznik, cena, zdjecie
        FROM samochody
            JOIN marki on samochody.marki_id = marki.id
        WHERE wyrozniony = 1
        LIMIT 4";
$result = $link -> query($sql);
$cars = $result -> fetch_all(1);

$sql = "SELECT nazwa
        FROM marki";
$result = $link -> query($sql);
$brands = $result -> fetch_all(1);
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komis aut</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <h1><em>KupAuto!</em> Internetowy Komis Samochodowy</h1>
    </header>
    <section class="first">
        <!-- skrypt1 -->
        <?php
            echo "<img src='{$featured['zdjecie']}' alt='oferta dnia'>
                    <h4>Oferta Dnia: Toyota {$featured['model']}</h4>
                    <p>Rocznik: {$featured['rocznik']}, przebieg: {$featured['przebieg']}, rodzaj paliwa: {$featured['paliwo']}</p>
                    <h4>Cena: {$featured['cena']}</h4>";
        ?>
    </section>

    <section class="second">
        <h2>Oferty Wyróżnione</h2>
        <div class="flex">
                <?php
                    foreach($cars as $car){
                        echo "<section class='offer'>
                            <img src='{$car['zdjecie']}' alt='model'>
                            <h4>{$car['nazwa']} {$car['model']}</h4>
                            <p>Rocznik: {$car['rocznik']}</p>
                            <h4>Cena: {$car['cena']}</h4>
                            </section>";
                    }
                ?>
        </div>
        <!-- skrypt2 -->
    </section>
    
    <section class="third">
        <h2>Wybierz markę</h2>
        <form action="" method="post">
            <select name="brand" id="brand">
                <!-- skrypt3 -->
                 
                <?php
                    foreach($brands as $brand){
                        echo "<option value='{$brand['nazwa']}'>{$brand['nazwa']}</option>";
                    }
                ?>
            </select>
            <button type="submit">Wyszukaj</button>
            <!-- skrypt4 -->
        </form>
            <?php
                if($brand_f){
                    foreach ($selections as $selection){
                        echo "<section class='offer'>
                        <img src='{$section['zdjecie']}' alt='{$section['model']}'>
                        <h4>$brand_f {$section['model']}</h4>
                        <h4>Cena: {$section['cena']}</h4>
                        </section>";
                        }
                    }
            ?>
        
    </section>
    <footer>
        <p>Stronę wykonał: olekcvyl</p>
        <p><a href="http://firmy.pl/komis">Znajdź nas także</a></p>
    </footer>
</body>
</html>


<?php
$link -> close();
?>