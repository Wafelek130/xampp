<?php
$link = new mysqli('localhost','root','','komis');
$sql = "SELECT id, marka, model 
        FROM Samochody";
$result = $link -> query($sql);
$cars = $result -> fetch_all(1);

$sql = "SELECT Samochody_id, Klient
        FROM zamowienia";
$result = $link -> query($sql);
$orders = $result -> fetch_all(1);

$sql = "SELECT *
    FROM Samochody
    WHERE marka LIKE 'Fiat'";
$result = $link -> query($sql);
$fiats = $result -> fetch_all(1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komis Samochodowy</title>
    <link rel="stylesheet" href="auto.css">
</head>
<body>
    <header>
        <h1>SAMOCHODY</h1>
    </header>

    <section class="left">
        <h2>Wykaz samochodów</h2>
            <!-- skrypt 1 -->
            <ul>
                <?php
                    foreach($cars as $car){
                        echo "<li>{$car['id']} {$car['marka']} {$car['model']}</li>";
                    }
                ?>
            </ul>
        <h2>Zamówienia</h2>
         <!-- skrypt 2 -->
        <ul>
            <?php
                foreach($orders as $order){
                    echo "<li>{$order['Samochody_id']} {$order['Klient']}</li>";
                }
            ?>
        </ul>              
    </section>

    <section class="right">
        <h2>Pełne dane: Fiat</h2>
            <!-- skrypt 3 -->
            <?php
                foreach($fiats as $fiat){
                    echo "{$fiat['id']} / {$fiat['marka']} / {$fiat['model']} / {$fiat['rocznik']} / {$fiat['kolor']} / {$fiat['stan']} <br>";
                }
            ?>
    </section>

    <footer>
        <table>
            <td>
                <th><a href="kwerendy.txt">Kwerendy</a></th>
                <th>PESEL: OlekToCwel</th>
                <th><img src="auto.png" alt="komis samochodowy"></th>
            </td>
        </table>
    </footer>
</body>
</html>


<?php
$link -> close();
?>