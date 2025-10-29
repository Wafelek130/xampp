<?php
$link = new mysqli('localhost','root','','5e_1_sklep_sprawdzian');
$sql = "SELECT nazwa, cena
        FROM towary
        LIMIT 4";
$result = $link -> query($sql);
$prices = $result -> fetch_all(1);

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hurtownia szkolna</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <h1>Hurtownia z najlepszymi cenami</h1>
    </header>
    <main>
        <section class="left">
            <h2>Nasze ceny</h2>
            <table>
                <?php
                    foreach($prices as $price){
                        echo "<tr>
                                <td>{$price['nazwa']}</td>
                                <td>{$price['cena']}</td>
                            </tr>";
                    }
                ?>
                <!-- skrypt 1 -->
            </table>
        </section>
        <section class="middle">
            <h2>Koszt zakupów</h2>
            <form action="" method="post">
                <label for="product">wybierz artykuł:</label>
                <select name="product" id="product">
                    <option value="Zeszyt 60 kartek">Zeszyt 60 kartek</option>
                    <option value="Zeszyt 32 kartki">Zeszyt 32 kartki</option>
                    <option value="Cyrkiel">Cyrkiel</option>
                    <option value="Linijka 30 cm">Linijka 30 cm</option>
                </select><br>
                <label for="count">liczba sztuk:</label>
                <input type="number" name="count" id="count"><br>
                <button>OBLICZ</button><br>
                <?php
                    $product = $_POST['product'] ?? null;
                    $count = $_POST['count'] ?? null;
                    $sql = "SELECT cena
                            FROM towary
                            WHERE nazwa = '$product'";
                    $result = $link -> query($sql);
                    $wynik = $result -> fetch_array();
                    $oblicz = $wynik['cena'] * $count;
                    echo "wartość zakupów: $oblicz";                    
                ?>
                <!-- skrypt 2 -->
            </form>
        </section>
        <section class="right">
            <h2>Kontakt</h2>
            <img src="zakupy.png" alt="hurtownia">
            <p>e-mail: <a href="mailto:hurt@poczta2.pl">hurt@poczta2.pl</a></p>
        </section>
    </main>
    <footer>
        <h4>Witrynę wykonał: Wojciech Walkowiak</h4>
    </footer>
</body>
</html>

<?php
$link -> close();
?>