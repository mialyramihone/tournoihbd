<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tournoihbd";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("La connexion à la base de données a échoué: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $squadname = $_POST["squadname"];
    $player1 = $_POST["player1"];
    $player2 = $_POST["player2"];
    $player3 = $_POST["player3"];
    $player4 = $_POST["player4"];
    $adminEmail = $_POST["adminEmail"];

    $sql = "INSERT INTO inscriptions (squadname, player1, player2, player3, player4, adminEmail) 
            VALUES ('$squadname', '$player1', '$player2', '$player3', '$player4', '$adminEmail')";

    if ($conn->query($sql) === TRUE) {
        header("Location: confirmation.html");
        exit();
    } else {
        echo "Erreur d'insertion dans la base de données: " . $conn->error;
    }
}

$conn->close();
?>
