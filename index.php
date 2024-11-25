<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator (Switch naredba)</title>
</head>
<body>
    <h1>Kalkulator (Switch naredba)</h1>
    <form method="post" action="">
        <label for="num1">Upiši prvi broj *</label>
        <input type="number" id="num1" name="num1" required>
        <br><br>
        <label for="num2">Upiši drugi broj *</label>
        <input type="number" id="num2" name="num2" required>
        <br><br>
        <label for="operation">Odaberite operaciju:</label>
        <select id="operation" name="operation" required>
            <option value="+">Zbrajanje (+)</option>
            <option value="-">Oduzimanje (-)</option>
            <option value="*">Množenje (*)</option>
            <option value="/">Dijeljenje (/)</option>
        </select>
        <br><br>
        <button type="submit">Izračunaj</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Preuzimanje podataka iz obrasca
        $num1 = (float) $_POST['num1'];
        $num2 = (float) $_POST['num2'];
        $operation = $_POST['operation'];
        $result = "";

        // Switch za odabranu operaciju
        switch ($operation) {
            case "+":
                $result = $num1 + $num2;
                break;
            case "-":
                $result = $num1 - $num2;
                break;
            case "*":
                $result = $num1 * $num2;
                break;
            case "/":
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = "Dijeljenje s nulom nije moguće!";
                }
                break;
            default:
                $result = "Nepoznata operacija.";
        }

        // Prikaz rezultata
        echo "<h2>Rezultat:</h2>";
        echo "<p>$result</p>";
    }
    ?>
</body>
</html>
