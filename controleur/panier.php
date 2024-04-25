<?php
session_start();
$_SESSION['loggedin'] = true; // Set the session variable
$_SESSION['username'] = $loginUsername; // Store additional user information if needed


$flightId = $_POST['flightId'];
$userId = $row['userId']; // Assurez-vous d'avoir l'ID de l'utilisateur connecté

// Ajout de la réservation au panier (exemple)
$_SESSION['cart'][] = array('flightId' => $flightId, 'userId' => $userId);

// Redirection vers la page du panier
header("Location: ../vue/panier.php");
exit();
?>
