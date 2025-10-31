<?php
$link = new mysqli('localhost','root','','rzeki');

?>


<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poziomy rzek</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <section class="header_left">
            <img src="obraz1.png" alt="Mapa Polski">
        </section>
        <section class="header_right">
            <h1>Rzeki w województwie dolnośląskim</h1>
        </section>
    </header>
    <menu>
        <form action="" method="post">
            <input type="radio" name="selection" id="all">
            <label for="all">Wszystkie</label>
            <input type="radio" name="selection" id="warning">
            <label for="warning">Ponad stan ostrzegawczy</label>
            <input type="radio" name="selection" id="alarming">
            <label for="alarming">Ponad stan alarmowy</label>           
            <button>Pokaż</button>
        </form>
    </menu>
    <main>
        <section class="left">
            <h3>Stany na dzień 2022-05-05</h3>
            <table>
                <tr>
                    <th>Wodomierz</th>
                    <th>Rzeka</th>
                    <th>Ostrzegawczy</th>
                    <th>Alarmowy</th>
                    <th>Akutalny</th>
                </tr>
                <!-- skrypt -->
            </table>
        </section>
        <section class="right">
            <h3>Informacje</h3>
            <ul>
                <li>Brak ostrzeżeń o burzach z gradem</li>
                <li>Smog w mieście Wrocław</li>
                <li>Silny wiatr w Karkonoszach</li>
            </ul>
            <h3>Średnie stany wód</h3>
            <!-- skrypt 2 -->
            <a href="https://komunikaty.pl">Dowiedz się więcej</a>
            <img src="obraz2.jpg" alt="rzeka" id="second_picture">
        </section>
    </main>
    <footer>
        <p>Stronę wykonał: Wojciech Walkowiak</p>
    </footer>
</body>
</html>