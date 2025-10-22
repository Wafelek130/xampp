<?php
$link = new mysqli('localhost','root','','5e_1_firma');
$sql = "SELECT id_zadania, zadanie, data
        FROM zadania";
$result = $link -> query($sql);
$tasks = $result -> fetch_all(1);

$delete_id = $_GET['delete_id'] ?? null;
if($delete_id){
    $sql ="DELETE FROM zadania
            WHERE id_zadania=$delete_id";
            $result = $link -> query($sql);
}
?>


<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Firma Przewozowa</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Firma przewozowa Półdarmo</h1>
    </header>
    <nav>
        <a href="kw1.jpg">kwerenda1</a>
        <a href="kw2.jpg">kwerenda2</a>
        <a href="kw3.jpg">kwerenda3</a>
        <a href="kw4.jpg">kwerenda4</a>
    </nav>
    <main>
        <section class="left">
            <h2>Zadania do wykonania</h2>
            <table>
                <tr>
                    <th>Zadanie do wykonania</th>
                    <th>Data realizacji</th>
                    <th>Akcja</th>
                </tr>
                <?php
                    foreach($tasks as $task){
                        echo "<tr>
                                <td>{$task['zadanie']}</td>
                                <td>{$task['data']}</td>
                                <td><a href='?delete_id={$task['id_zadania']}'>Usuń</a></td>
                            </tr>";
                    }
                ?>
            </table>
            <form action="" method="post">
                <label for="task">Zadanie do wykonania:</label>
                <input type="text" name="task" id="task"><br>
                <label for="date">Data realizacji:</label>
                <input type="date" name="date" id="date">
                <button>Dodaj</button>
            </form>
        </section>
        <section class="right">
            <img src="auto.png" alt="auto firmowe">
            <h3>Nasza specjalność</h3>
            <ul>
                <li>Przeprowadzki</li>
                <li>Przewóz mebli</li>
                <li>Przesyłki gabarytowe</li>
                <li>Wynajem pojazdów</li>
                <li>Zakupy towarów</li>
            </ul>
        </section>
    </main>
    <footer>
        <p>Stronę wykonał: wojciech walkowiak</p>
    </footer>
</body>
</html>