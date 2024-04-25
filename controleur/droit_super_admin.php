<?php
session_start(); // Démarrez la session au début du script

// Vérification si l'utilisateur est connecté et s'il a le rôle de super-administrateur ou d'administrateur
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true && ($_SESSION['role'] === 'super_admin' || $_SESSION['role'] === 'admin')) {
    // Vérifie si la méthode POST a été utilisée pour soumettre le formulaire
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Vérifie si l'identifiant de l'utilisateur a été passé
        if (isset($_POST['user_id'])) {
            // Connexion à la base de données
            $servername = "localhost";
            $username = "root";
            $password = "root";
            $dbname = "ma_base_de_donnees";
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Vérification de la connexion
            if ($conn->connect_error) {
                die("Échec de la connexion à la base de données: " . $conn->connect_error);
            }

            // Récupération de l'ID de l'utilisateur à modifier depuis le formulaire POST
            $user_id = $_POST['user_id'];

            // Vérification du rôle de l'utilisateur actuel
            if ($_SESSION['role'] === 'super_admin') {
                // Si le rôle est super-administrateur, met à jour les droits de l'utilisateur
                $sql = "UPDATE users SET rights = CASE
                        WHEN rights = 'client' THEN 'admin'
                        WHEN rights = 'admin' THEN 'client'
                        ELSE rights
                        END
                        WHERE id = $user_id";

                if ($conn->query($sql) === TRUE) {
                    echo "Les droits de l'utilisateur ont été mis à jour avec succès.";
                } else {
                    echo "Erreur lors de la mise à jour des droits de l'utilisateur: " . $conn->error;
                }
            } elseif ($_SESSION['role'] === 'admin') {
                // Si le rôle est administrateur, vérifie si l'utilisateur à modifier est un client
                $sql = "SELECT rights FROM users WHERE id = $user_id";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $rights = $row['rights'];
                    if ($rights === 'client') {
                        // Si l'utilisateur à modifier est un client, le promeut en admin
                        $sql = "UPDATE users SET rights = 'admin' WHERE id = $user_id";
                        if ($conn->query($sql) === TRUE) {
                            echo "L'utilisateur a été promu au rang d'administrateur avec succès.";
                        } else {
                            echo "Erreur lors de la promotion de l'utilisateur au rang d'administrateur: " . $conn->error;
                        }
                    } else {
                        echo "Les administrateurs ne peuvent pas être modifiés par d'autres administrateurs.";
                    }
                } else {
                    echo "Utilisateur non trouvé.";
                }
            }

            $conn->close();
        } else {
            echo "Identifiant de l'utilisateur non trouvé.";
        }
    } else {
        echo "Méthode non autorisée.";
    }
} else {
    echo "Vous n'êtes pas autorisé à accéder à cette page.";
}
?>
