<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "winkel";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connected to database ($dbname)";

    
    $stmt = $conn->query("SELECT * FROM Producten");

    $results =$stmt->fetchAll();
    foreach ($results as $row) {
        echo "<br>";
        echo "Product Code: " . $row['product_code'] . "<br>";
        echo "Product Naam: " . $row['product_naam'] . "<br>";
        echo "Prijs per Stuk: " . $row['prijs_per_stuk'] . "<br>";
        echo "Omschrijving: " . $row['omschrijving'] . "<br>";
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
