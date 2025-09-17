<?php
$link = new mysqli('localhost','root','','weterynarzWW');
$sql = "SELECT id, imie, wlasciciel
FROM Zwierzeta
WHERE rodzaj = 1";
$result = $link -> query($sql);
$dogs = $result -> fetch_all(1);

$sql = "SELECT id, imie, wlasciciel
FROM Zwierzeta
WHERE rodzaj = 2";
$result = $link -> query($sql);
$cats = $result -> fetch_all(1);

$sql = "SELECT imie, telefon, szczepienie, opis
FROM Zwierzeta";
$result = $link -> query($sql);
$animals = $result -> fetch_all(1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="weterynarz.css">
</head>
<body>
    <header>
        <h2>GABINET WETERYNARYJNY</h2>
    </header>

    <main>
        <section class="left">
            <h2>Psy</h2>
            <!-- skrypt1 -->
            <?php 
                foreach($dogs as $dog){
                    echo "{$dog['id']} {$dog['imie']} {$dog['wlasciciel']} <br>";
                }
            ?>
            <!-- id imie wlasciciel <br> -->
            <h2>Koty</h2>
            <?php
                foreach($cats as $cat){
                    echo "{$cat['id']} {$cat['imie']} {$cat['wlasciciel']} <br>";
                }
            ?>
            <!-- skrypt2 -->
        </section>
        <section class="middle">
            <h2>SZCZEGÓŁOWA INFORMACJA O ZWIERZĘTACH</h2>
            <!-- Pacjent: <imie> <br>
            Telefon właściciela: <telefon>, ostatnie szczepienie: <szczepienie>, informacje: <opis> <hr> -->
            <!-- skrypt3 -->
            <?php
            foreach($animals as $animal){
                echo "Pacjent: {$animal['imie']} <br>Telefon właściciela: {$animal['telefon']}, {$animal['szczepienie']}, informacje: {$animal['opis']} <hr>";
            }
            ?>
            
        </section>
        <section class="right">
        <h2>WETERYNARZ</h2>
        <a href="rys.png"><img src="rys-mini.png" alt="ladny piesek" srcset=""></a>
        <p>Krzysztof Nowakowski, lekarz weterynarii</p>
        <h2>GODZINY PRZYJĘĆ</h2>
        <table>
            <tr>
                <td>Poniedziałek</td>
                <td>15:00 - 19:00</td>
            </tr>
            <tr>
                <td>Wtorek</td>
                <td>15:00 - 19:00</td>
            </tr>
        </table>
        </section>
    </main>
</body>
</html>

<?php
$link -> close();
?>