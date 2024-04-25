<?php
session_start();

if (isset($_SESSION['user_id'])) {
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "ma_base_de_donnees";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Échec de la connexion à la base de données: " . $conn->connect_error);
    }

    $userID = $_SESSION['user_id'];

    $sql = "SELECT * FROM users WHERE id = $userID";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $userData = $result->fetch_assoc();
        echo json_encode($userData);
    } else {
        echo json_encode(["error" => "Utilisateur non trouvé"]);
    }

    $conn->close();
} else {
    echo json_encode(["error" => "Utilisateur non connecté"]);
}
?>
