<!DOCTYPE html>
<html>
<head>
    <title>Prosta gra w zgadywanie liczby</title>
</head>
<body>
    <h1>Prosta gra w zgadywanie liczby</h1>

    <?php
    $targetNumber = rand(1, 100); // Losowanie liczby od 1 do 100
    $guess = null;

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $guess = $_POST["guess"];

        if (!empty($guess)) {
            if ($guess == $targetNumber) {
                echo "<p>Gratulacje! Zgadłeś liczbę $targetNumber!</p>";
            } elseif ($guess < $targetNumber) {
                echo "<p>Podana liczba jest za mała. Spróbuj jeszcze raz.</p>";
            } else {
                echo "<p>Podana liczba jest za duża. Spróbuj jeszcze raz.</p>";
            }
        } else {
            echo "<p>Podaj liczbę.</p>";
        }
    }
    ?>

    <form method="post" action="">
        <label for="guess">Zgadnij liczbę od 1 do 100:</label>
        <input type="number" name="guess" id="guess" min="1" max="100" required>
        <button type="submit">Sprawdź</button>
    </form>
</body>
</html>
