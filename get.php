<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET Formulier</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 20px;
        }

        h1 {
            color: #333;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 15px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin: 10px 0 5px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        h2 {
            color: #333;
            margin-top: 20px;
        }

        p {
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <h1>Vul het formulier</h1>
    <form action="" method="GET">
        <label for="naam">Naam:</label>
        <input type="text" name="naam" required><br>

        <label for="achternaam">Achternaam:</label>
        <input type="text" name="achternaam" required><br>

        <label for="leeftijd">Leeftijd:</label>
        <input type="number" name="leeftijd" required><br>

        <label for="adres">Adres:</label>
        <input type="text" name="adres" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <input type="submit" value="Verstuur">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET" && !empty($_GET)) {
        echo "<h2>Ingevoerde gegevens:</h2>";
        echo "<p>Naam: " . $_GET['naam'] . "</p>";
        echo "<p>Achternaam: " . $_GET['achternaam'] . "</p>";
        echo "<p>Leeftijd: " . $_GET['leeftijd'] . "</p>";
        echo "<p>Adres: " . $_GET['adres'] . "</p>";
        echo "<p>Email: " . $_GET['email'] . "</p>";
    }
    ?>
</body>
</html>
