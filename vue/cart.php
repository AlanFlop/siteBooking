<?php
session_start(); // Démarrez la session au début du script
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/cart.css" rel="stylesheet" />
    <link href="../css/navbar.css" rel="stylesheet" />
    <title>Panier</title>
</head>
<body>
<nav class="navbar">
<?php
    if(isset($_SESSION['role']) && ($_SESSION['role'] === 'admin' || $_SESSION['role'] === 'super_admin')) {
        echo "<a href='../controleur/admin.php' class='mainpage'>Administration</a>";
    }
    ?>
    <a href="moncompte.php">Mon compte</a>
    <a href="voyage.php">Voyages</a>
    <a href="#" class="mainpage">Panier</a>
</nav>

<h1 class="panier">Récapitulatif de votre panier</h1>
<section class="resume"></section>
<aside>
    <div class="tarification"></div>
</aside>

<div class="reservationDetails" id="reservationDetails">
    <p id="destinationElement" class="destination"></p>
    <label class="quantite" for="nombreBillets">Quantité:</label>
    <select class="quantite" id="nombreBillets" onchange="calculerPrix()">
        <!-- Options du menu pour le nombre de billets -->
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select>
    <!-- Ajoutez l'élément pour afficher le prix total -->
    <p id="prixTotalElement" class="prixTotal"></p>
</div>
<button onclick="ajouterAuPanier()">Valider le panier</button>

<script>
    // Récupérez le vol sélectionné depuis le stockage local
    var volSelectionne = JSON.parse(localStorage.getItem("volSelectionne")) || {};

    // Vérifiez si les données du vol sont présentes et non vides
    if (!volSelectionne || Object.keys(volSelectionne).length === 0) {
        console.error("Aucune donnée de vol sélectionnée.");
        // Ajoutez ici une logique pour rediriger l'utilisateur ou gérer l'absence de données
    } else {
        // Obtenez l'élément DOM où vous voulez afficher les détails de la réservation
        var destinationElement = document.getElementById("destinationElement");
        var prixTotalElement = document.querySelector(".prixTotal");

        // Ajoutez les détails du vol à la page
        destinationElement.textContent =
            "✈️ Destination: Départ Lycée Turgot vers " +
            (volSelectionne.destination || ""); // Ajoutez une vérification ici

        // Appelez la fonction pour calculer le prix total par défaut
        calculerPrix();
    }

    function calculerPrix() {
        var nombreBillets = parseInt(document.getElementById("nombreBillets").value);
        var prixTotalElement = document.getElementById("prixTotalElement");
        var prixTotal = nombreBillets * parseFloat(volSelectionne.prix);
        prixTotalElement.textContent = "Total: " + prixTotal.toFixed(2) + "€";

        var tarificationElement = document.querySelector(".tarification");
        var sousTotal = nombreBillets * parseFloat(volSelectionne.prix);
        var tva = 0.2 * sousTotal;
        var charge = 30;

        tarificationElement.innerHTML = `
      <p>${nombreBillets} billet(s) : ${sousTotal.toFixed(2)}€</p>
      <p>20% TVA : ${tva.toFixed(2)}€</p>
      <p>Charge : ${charge.toFixed(2)}€</p>
      <hr>
      <p>Sous-total : ${(sousTotal + tva + charge).toFixed(2)}€</p>
    `;
    }

    function ajouterAuPanier() {
        var panier = JSON.parse(localStorage.getItem("panier")) || [];
        var nombreBillets = parseInt(document.getElementById("nombreBillets").value);
        var prixTotal = nombreBillets * parseFloat(volSelectionne.prix);

        panier.push({
            destination: volSelectionne.destination,
            prix: prixTotal,
            nombreBillets: nombreBillets,
        });

        // Ajout de messages de console pour déboguer
        console.log("Réservation ajoutée au panier :", panier);

        try {
            localStorage.setItem("panier", JSON.stringify(panier));
            console.log(
                "Panier sauvegardé dans localStorage :",
                localStorage.getItem("panier")
            );

            window.location.href = "cart.php";
        } catch (error) {
            console.error(
                "Erreur lors de la sauvegarde dans localStorage :",
                error
            );
        }
    }
</script>
</body>
</html>
