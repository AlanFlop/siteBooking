<?php
session_start(); // Démarrez la session au début du script

// Vérifie si l'utilisateur est connecté et s'il a le rôle de super-administrateur ou d'administrateur
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true && ($_SESSION['role'] === 'super_admin' || $_SESSION['role'] === 'admin')) {
    // Connexion à la base de données
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "ma_base_de_donnees";
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Vérification de la connexion à la base de données
    if ($conn->connect_error) {
        die("Échec de la connexion à la base de données: " . $conn->connect_error);
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des membres</title>
    <link rel="stylesheet" href="../css/navbar.css" />
    <link rel="stylesheet" href="../css/admin.css" />
</head>
<body>
<nav class="navbar">
    <a class="mainpage">Administration</a>
    <a href="../vue/moncompte.php">Mon compte</a>
    <a href="../vue/voyage.php">Voyages</a>
    <a href="../vue/cart.php">Panier</a>
</nav>
<div class="container">
    <h1>Liste des membres</h1>

    <?php
    if(isset($_SESSION['username'], $_SESSION['firstName'], $_SESSION['lastName'], $_SESSION['role'])) {
        echo "<p>Vous êtes connecté en tant que " . $_SESSION['firstName'] . " " . $_SESSION['lastName'] . ", nom d'utilisateur: " . $_SESSION['username'] . ", rôle: " . $_SESSION['role'] . "</p>";
    }
    ?>

    <?php
    // Requête SQL pour récupérer les membres et leurs droits (clients et administrateurs)
    $sql = "SELECT id, username, firstName, lastName, password, rights FROM users WHERE rights='client' OR rights='admin'";
    $result = $conn->query($sql);

    // Vérification des erreurs de requête SQL
    if (!$result) {
        die("Erreur dans la requête SQL: " . $conn->error);
    }

    if ($result->num_rows > 0) {
        // Afficher les données de chaque membre
        while($row = $result->fetch_assoc()) {
            echo "<div class='member'>";
            echo "<strong>Nom d'utilisateur:</strong> " . $row["username"]. "<br>";
            echo "<strong>Prénom:</strong> " . $row["firstName"]. "<br>";
            echo "<strong>Nom:</strong> " . $row["lastName"]. "<br>";
            echo "<strong>Mot de passe:</strong> " . $row["password"]. "<br>"; // Afficher le mot de passe
            echo "<strong>Droits:</strong> " . $row["rights"]. "<br>";
            // Ajout du bouton de modification des droits
            if ($_SESSION['role'] === 'super_admin') {
                echo "<form action='droit_super_admin.php' method='post'>";
                echo "<input type='hidden' name='user_id' value='" . $row["id"] . "'>";
                // Afficher le bouton pour passer de client à admin ou vice versa selon le rôle actuel
                if ($row["rights"] == "client") {
                    echo "<input type='submit' class='edit-button' value='Passer en tant qu&apos;admin'>";
                } elseif ($row["rights"] == "admin") {
                    echo "<input type='submit' class='edit-button2' value='Passer en tant que client'>";
                }
                echo "</form>";
            } elseif ($_SESSION['role'] === 'admin' && $row["rights"] == "client") {
                echo "<form action='droit_super_admin.php' method='post'>";
                echo "<input type='hidden' name='user_id' value='" . $row["id"] . "'>";
                echo "<input type='submit' class='edit-button' value='Passer en tant qu&apos;admin'>";
                echo "</form>";
            }
            echo "</div>";
        }
    } else {
        echo "<p>Aucun membre trouvé dans la base de données.</p>";
    }

    $conn->close();
    ?>
</div>

</body>
</html>
<?php
} else {
    echo "Vous n'êtes pas autorisé à accéder à cette page.";
}
?>
