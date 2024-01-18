<?php
$data = json_decode(file_get_contents("php://input"), true);

$adminEmail = $data['adminEmail'];

$message = "Squad Name: " . $data['squadname'] . "\n";
$message .= "Player 1: " . $data['player1'] . "\n";
$message .= "Player 2: " . $data['player2'] . "\n";
$message .= "Player 3: " . $data['player3'] . "\n";
$message .= "Player 4: " . $data['player4'] . "\n";

mail($adminEmail, 'Nouvelle Inscription Tournoi', $message);

$response = array('message' => 'Inscription réussie !');
echo json_encode($response);
?>
