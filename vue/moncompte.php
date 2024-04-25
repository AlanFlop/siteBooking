<?php
session_start(); // Démarrez la session au début du script
?>
<!DOCTYPE HTML5>
<html lang="fr">
  <head>
    <title>Accessibilité</title>
    <link rel="stylesheet" href="../css/moncompte.css" />
    <link rel="stylesheet" href="../css/navbar.css" />
    <meta charset="utf-8" />

    <style>/* Masquer l'onglet "Administration" par défaut */
.hide-admin a[href="controleur/administration.php"] {
  display: none;
}
</style>
  </head>
  <body>
  <nav class="navbar"> 
  <?php
        if(isset($_SESSION['role']) && ($_SESSION['role'] === 'admin' || $_SESSION['role'] === 'super_admin')) {
            echo "<a href='../controleur/admin.php' class='mainpage'>Administration</a>";
        }
        ?>
  <a class="mainpage">Mon compte</a>
  <a href="voyage.php">Voyages</a>
  <a href="cart.php">Panier</a>
  
</nav>



    <section class="background">
      <h1>Vos données</h1>
      <hr />
      <div class="border">
        <div class="userData" id="userData">
          <span class="username"></span>

          <span class="firstName"></span>

          <span class="lastName"></span>

          <span class="phoneNumber"></span>

          <span class="address"></span>

          <span class="postalCode"></span>
        </div>
      </div>
    </section>

    <script>
      function loadUserData() {
        var userDataContainer = document.getElementById("userData");

        var xhr = new XMLHttpRequest();
        xhr.open("GET", "../controleur/get_user_information.php", true);

        xhr.onreadystatechange = function () {
          if (xhr.readyState === 4 && xhr.status === 200) {
            var userData = JSON.parse(xhr.responseText);

            userDataContainer.innerHTML = `
              <span class="username">Pseudo: ${userData.username}</span> <br>
              <span class="firstName">Prénom: ${userData.firstName}</span> <br>
              <span class="lastName">Nom: ${userData.lastName}</span> <br>
              <span class="phoneNumber">Téléphone: ********${userData.phoneNumber.slice(
                -2
              )}</span> <br>
              <span class="address">Adresse: ${userData.address}</span> <br>
              <span class="postalCode">Code Postal: ${
                userData.postalCode
              }</span> <br>
            `;

            // Ajoutez les classes aux éléments générés
            userDataContainer
              .querySelector(".username")
              .classList.add("styled-username");
            userDataContainer
              .querySelector(".firstName")
              .classList.add("styled-firstName");
            // Ajoutez les autres classes au besoin
          }
        };

        xhr.send();
      }

      loadUserData();
    </script>
  </body>
</html>
