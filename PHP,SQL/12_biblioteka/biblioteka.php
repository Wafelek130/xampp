<?php
$link = new mysqli('localhost','root','','biblio');
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteka miejska</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <!-- skrypt1 -->
        <?php
            for($i=0; $i < 20; $i++){
                echo "<img src='obraz.png'>";
            }
        ?>
        
    </header>
    <main>
    <section class="first">
        <h2>Liryka</h2>
        <form action="" method="post">
            <select name="liryka" id="liryka">
                <!-- skrypt2 -->
                <?php
                    $sql1 = "SELECT id, tytul
                            FROM ksiazka
                            WHERE gatunek = 'liryka'";
                    $result1 = $link -> query($sql1);
                    $wyniki1 = $result1 -> fetch_all(1);
                    foreach($wyniki1 as $wynik1){
                        echo "<option value='{$wynik1['id']}'>{$wynik1['tytul']}</option>";
                    }
                ?>
            </select>
            <button>Rezerwuj</button>
            <?php
                $liryka = $_POST['liryka'] ?? null;       
                $sql2 = "SELECT tytul
                        FROM ksiazka
                        WHERE id = $liryka";
                $result2 = $link -> query($sql2);
                $rezerwacja_liryka = $result2 -> fetch_array();
                echo "<p>Książka {$rezerwacja_liryka['tytul']} została zarezerwowana</p>";
                $sql3 = "UPDATE ksiazka
                        SET rezerwacja = 1
                        WHERE id = $liryka";
                $result3 = $link -> query($sql3);
            ?>
            <!-- skrypt3 -->
        </form>
    </section>
    <section class="second">
        <h2>Epika</h2>
        <form action="" method="post">
            <select name="epika" id="epika">
                <!-- skrypt 2 -->
                 <?php
                    $sql4 = "SELECT id, tytul
                            FROM ksiazka
                            WHERE gatunek = 'Epika'";
                    $result4 = $link -> query($sql4);
                    $wyniki2 = $result4 -> fetch_all(1);
                    foreach($wyniki2 as $wynik2){
                        echo "<option value='{$wynik2['id']}'>{$wynik2['tytul']}</option>";
                    }
                ?>
            </select>
            <button>Rezerwuj</button>
            <?php
                $epika = $_POST['epika'] ?? null;       
                $sql5 = "SELECT tytul
                        FROM ksiazka
                        WHERE id = $epika";
                $result5 = $link -> query($sql5);
                $rezerwacja_epika = $result5 -> fetch_array();
                echo "<p>Książka {$rezerwacja_epika['tytul']} została zarezerwowana</p>";
                $sql6 = "UPDATE ksiazka
                        SET rezerwacja = 1
                        WHERE id = $epika";
                $result6 = $link -> query($sql6);
            ?>
            <!-- skrypt3 -->
        </form>
    </section>
    <section class="third">
        <h2>Dramat</h2>
        <form action="" method="post">
            <select name="dramat" id="dramat">
                <!-- skrypt2 -->
                 <?php
                    $sql7 = "SELECT id, tytul
                            FROM ksiazka
                            WHERE gatunek = 'dramat'";
                    $result = $link -> query($sql7);
                    $wyniki3 = $result -> fetch_all(1);
                    foreach($wyniki3 as $wynik3){
                        echo "<option value='{$wynik3['id']}'>{$wynik3['tytul']}</option>";
                    }
                ?>
            </select>
            <button>Rezerwuj</button>
        </form>
        
        <!-- skrypt3 -->
    </section>
    <section class="fourth">
        <h2>Zaległe książki</h2>
        <ul>
            <!-- skrypt4 -->
        </ul>
    </section>
    </main>
    <footer>
        <p>
            <strong>Autor: olek cweloń</strong>
        </p>
    </footer>
</body>
</html>


<?php
$link -> close();
?>