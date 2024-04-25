<?php
// Vérification si la méthode POST a été utilisée pour soumettre le formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérification si l'identifiant de l'utilisateur a été passé
    if (isset($_POST['user_id'])) {
        // Récupération de l'identifiant de l'utilisateur à partir du formulaire
        $user_id = $_POST['user_id'];
        
        // Vérification si l'utilisateur est un super utilisateur
        session_start();
        if ($_SESSION['role'] == 'super_admin') {
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
            
            // Requête SQL préparée pour mettre à jour les droits de l'utilisateur
            $sql = "UPDATE users SET rights='client' WHERE id=?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $user_id); // "i" indique que $user_id est un entier
            
            if ($stmt->execute()) {
                echo "Les droits de l'utilisateur ont été mis à jour avec succès.";
            } else {
                echo "Erreur lors de la mise à jour des droits de l'utilisateur: " . $conn->error;
            }
            
            // Fermeture de la connexion et du statement
            $stmt->close();
            $conn->close();
        } else {
            echo "Vous n'avez pas les autorisations nécessaires pour effectuer cette action.";
        }
    } else {
        echo "Identifiant de l'utilisateur non trouvé.";
    }
} else {
    echo "Accès refusé.";
}
?>
