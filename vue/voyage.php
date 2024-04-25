<?php
session_start(); // Démarrez la session au début du script
?>
<!DOCTYPE HTML5>
<html lang="fr">
  <head>
    <title>Accessibilité</title>
    <link rel="stylesheet" href="../css/voyage.css" />
    <link rel="stylesheet" href="../css/navbar.css" />
    <meta charset="utf-8" />

    <style>
        footer {
            margin-top: 20px;
            padding-top: 20px;
            background-color: #ddd;
            text-align: center;
        }
        iframe {
            width: 100%;
            border: none;
            overflow: hidden;
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
        <a href="moncompte.php">Mon compte</a>
        <a class="mainpage">Voyages</a>
        <a href="cart.php">Panier</a>
 

      </nav>
    <section class="Choix_utilisateur">
        <p class="prout">Partez dans des destinations à couper le souffle dans tout l'univers</p>
    
        <div class="row">
            <div class="column">
                <img src="../images/pays1.jpg" alt="France" class="pays" />
                <p class="nom_pays">France</p>
            </div>

            <div class="column">
                <img src="../images/pays3.jpg" alt="Maroc" class="pays" />
                <p class="nom_pays">Maroc</p>
            </div>

            <div class="column">
                <img src="../images/pays2.jpg" alt="Italie" class="pays" />
                <p class="nom_pays">Italie</p>
            </div>

            <div class="column">
                <img src="../images/pays4.jpg" alt="Croatie" class="pays" />
                <p class="nom_pays">Croatie</p>
            </div>
            <div class="column">
                <img src="../images/pays5.jpg" alt="Thaïlande" class="pays" />
                <p class="nom_pays">Thaïlande</p>
            </div>
            <div class="column">
                <img src="../images/pays6.jpg" alt="États-Unis" class="pays" />
                <p class="nom_pays">États-Unis</p>
            </div>
        </div>
    
        <div class="row">
            <div class="column">
                <img src="../images/pays7.jpg" alt="Grèce" class="pays" />
                <p class="nom_pays">Grèce</p>
            </div>
            <div class="column">
                <img src="../images/pays8.jpg" alt="Mexique" class="pays" />
                <p class="nom_pays">Mexique</p>
            </div>
            <div class="column">
                <img src="../images/pays9.jpg" alt="Japon" class="pays" />
                <p class="nom_pays">Japon</p>
            </div>
            <div class="column">
                <img src="../images/pays10.jpg" alt="Nouvelle-Zélande" class="pays" />
                <p class="nom_pays">Nouvelle-Zélande</p>
            </div>
            <div class="column">
                <img src="../images/pays11.jpg" alt="Islande" class="pays" />
                <p class="nom_pays">Islande</p>
            </div>
            <div class="column">
                <img src="../images/pays12.jpg" alt="Système solaire" class="pays" />
                <p class="nom_pays">Système solaire</p>
            </div>
        </div>
    </section>
    

    <section class="France" id="France">
        <h1>France</h1>
        <div style="margin-top: 20px;"></div>
    <div class="description">
      <div class="Ville">
        <p class="titre">Paris - Voyagez vers la capitale</p>
        <div class="gallery">
          <img src="../images/paris_2.png" alt="Paris de jour" />
          <img src="../images/paris.jpeg" alt="Paris de nuit" />
        </div>
        <p class="text_ville_1">
          Bienvenue dans la ville lumière, la capitale de la mode, de la culture
          et du romantisme - Paris. Chez Alan Industry, nous vous invitons à
          plonger dans l'essence même de cette métropole exceptionnelle, où
          l'histoire rencontre la modernité et l'élégance se mêle à la passion .
        </p>

        <p class="text_ville_2">
          Paris, la ville lumière, vous attend avec ses rues pavées, ses
          monuments emblématiques et son ambiance romantique. Des Champs-Élysées
          à la Tour Eiffel, chaque coin de Paris respire l'histoire et
          l'élégance. Découvrez les musées renommés tels que le Louvre, dégustez
          une délicieuse pâtisserie dans une charmante brasserie parisienne.
        </p>

        <p class="text_ville_3">
          Chez Alan Industry, nous comprenons l'importance de chaque voyage.
          C'est pourquoi nous mettons tout en œuvre pour rendre votre expérience
          de réservation aussi agréable que votre séjour à Paris. Notre équipe
          dévouée vous garantit des vols confortables, des tarifs compétitifs et
          un service personnalisé tout au long de votre voyage.
        </p>
        <button
          id="reserverVolBtn"
          onclick="ouvrirPageReservation('Paris', 150.00)"
        >
          <span>Réserver un vol</span>
        </button>
      </div>
    </div>

    <!-- Ajoutez un espace de 10 pixels entre les cartes -->
    <div style="margin-top: 10px"></div>

    <div class="description">
      <div class="Ville">
        <p class="titre">Lyon - Découvrez la ville des lumières</p>
        <div class="gallery">
          <img src="../images/lyon1.jpg" alt="Lyon de jour" />
          <img src="../images/lyon2.jpg" alt="Lyon de nuit" />
        </div>
        <p class="text_ville_1">
          Bienvenue dans la ville des lumières, Lyon, réputée pour sa
          gastronomie, son architecture unique et son ambiance chaleureuse. Chez
          Alan Industry, nous vous invitons à explorer les ruelles de cette
          ville pleine de charme, où la tradition se mêle à l'innovation.
        </p>

        <p class="text_ville_2">
          Lyon, la ville des lumières, vous offre des expériences uniques, des
          traboules mystérieuses aux délicieux bouchons lyonnais. Des quais de
          la Saône à la colline de Fourvière, découvrez une cité riche en
          histoire et en saveurs.
        </p>

        <p class="text_ville_3">
          Chez Alan Industry, nous comprenons l'importance de chaque voyage.
          C'est pourquoi nous mettons tout en œuvre pour rendre votre expérience
          de réservation aussi agréable que votre séjour à Lyon. Notre équipe
          dévouée vous garantit des vols confortables, des tarifs compétitifs et
          un service personnalisé tout au long de votre voyage.
        </p>
        <button
          id="reserverVolBtn"
          onclick="ouvrirPageReservation('Lyon', 120.00)"
        >
          <span>Réserver un vol</span>
        </button>
      </div>
      <div style="margin-top: 10px;"></div>

      
      </div>
  
      <!-- Ajoutez un espace de 10 pixels entre les cartes -->
      <div style="margin-top: 10px;"></div>
  
      <div class="description">
        <div class="Ville">
          <p class="titre">Marseille - Explorez la cité phocéenne</p>
          <div class="gallery">
            <img src="../images/marseille1.jpg" alt="Marseille de jour" />
            <img src="../images/marseille2.jpg" alt="Marseille de nuit" />
          </div>
          <p class="text_ville_1">
            Bienvenue à Marseille, la perle de la Méditerranée, où l'histoire ancienne se marie harmonieusement avec la vie moderne. Chez Alan Industry, nous vous invitons à plonger dans l'effervescence de cette ville portuaire, baignée de lumière et d'une énergie méditerranéenne incomparable.
          </p>
  
          <p class="text_ville_2">
            Marseille, avec ses marchés animés, ses ruelles pittoresques du Vieux-Port et ses vues spectaculaires depuis la basilique Notre-Dame de la Garde, vous offre une expérience unique. Découvrez une gastronomie méditerranéenne délicieuse, explorez les calanques préservées et laissez-vous séduire par la convivialité chaleureuse des habitants.
          </p>
  
          <p class="text_ville_3">
            Chez Alan Industry, nous comprenons l'importance de chaque voyage. C'est pourquoi nous mettons tout en œuvre pour rendre votre expérience de réservation aussi agréable que votre séjour à Marseille. Notre équipe dévouée vous garantit des vols confortables, des tarifs compétitifs et un service personnalisé tout au long de votre voyage.
          </p>
          <button id="reserverVolBtn" onclick="ouvrirPageReservation('Marseille', 130.00)">
            <span>Réserver un vol</span>
          </button>
        </div>
      </div>
  
      <!-- Ajoutez un espace de 10 pixels entre les cartes -->
      <div style="margin-top: 10px;"></div>
  
      <div class="description">
        <div class="Ville">
          <p class="titre">Strasbourg - Découvrez la capitale européenne</p>
          <div class="gallery">
            <img src="../images/strasbourg1.jpg" alt="Strasbourg de jour" />
            <img src="../images/strasbourg2.jpg" alt="Strasbourg de nuit" />
          </div>
          <p class="text_ville_1">
            Bienvenue à Strasbourg, où l'histoire et la culture alsaciennes prennent vie au cœur de l'Europe. Chez Alan Industry, nous vous invitons à vous immerger dans la richesse de cette ville, où les façades à colombages, les canaux pittoresques et l'esprit festif créent une ambiance unique.</p>
      <p class="text_ville_2">
        Strasbourg, avec sa cathédrale emblématique, ses marchés de Noël enchantés et ses institutions européennes, offre une expérience culturelle incomparable. Explorez les quartiers authentiques, dégustez les spécialités alsaciennes dans les winstubs traditionnelles et laissez-vous émerveiller par la beauté de cette ville dynamique. </p>
  
      <p class="text_ville_3">
        Chez Alan Industry, nous célébrons avec enthousiasme la riche diversité des destinations qui composent notre carte aérienne. Nous mettons à votre disposition une expérience de voyage inégalée, alliant le confort supérieur de nos vols, des tarifs compétitifs qui s'adaptent à toutes les bourses, et un service personnalisé pour un séjour mémorable. </p> 
        <button id="reserverVolBtn" onclick="ouvrirPageReservation('Strasbourg', 140.00)">
        <span>Réserver un vol</span>
      </button>
            <!-- Ajoutez un espace de 10 pixels entre les cartes -->
            <div style="margin-top: 10px;"></div>

  </div>
</div>

</section>

<div style="margin-top: 20px;"></div>

<section class="Morocco" id="Maroc">
    <div style="margin-top: 20px;"></div>
    <h1>Morocco</h1>
    <div style="margin-top: 20px;"></div>
    <div class="description">
        <div class="Ville">
            <p class="titre">Agadir - Découvrez la perle du sud</p>
            <div class="gallery">
                <img src="../images/agadir1.jpg" alt="Agadir de jour" />
                <img src="../images/agadir2.jpg" alt="Agadir de nuit" />
            </div>
            <p class="text_ville_1">
                Bienvenue à Agadir, la perle du sud du Maroc, où le soleil, les plages de sable fin et la culture berbère créent une harmonie envoûtante. Chez Alan Industry, plongez dans la douceur de vivre de cette station balnéaire exceptionnelle, alliant détente et découverte.
            </p>

            <p class="text_ville_2">
                Agadir, avec son littoral spectaculaire, ses marchés animés et ses jardins luxuriants, vous invite à une expérience balnéaire authentique. Explorez la médina, savourez la cuisine marocaine dans les souks, et laissez-vous emporter par la chaleur de l'hospitalité marocaine.
            </p>

            <p class="text_ville_3">
                Chez Alan Industry, nous comprenons l'importance de chaque voyage. C'est pourquoi nous mettons tout en œuvre pour rendre votre expérience de réservation aussi agréable que votre séjour à Agadir. Notre équipe dévouée vous garantit des vols confortables, des tarifs compétitifs et un service personnalisé tout au long de votre voyage.
            </p>
            <button id="reserverVolBtn" onclick="ouvrirPageReservation('Agadir', 130.00)">
                <span>Réserver un vol</span>
            </button>
          </div>
        </div>

    <!-- Ajoutez un espace de 10 pixels entre les cartes -->
    <div style="margin-top: 10px;"></div>

    <div class="description">
        <div class="Ville">
            <p class="titre">Rabat - Explorez la capitale du Maroc</p>
            <div class="gallery">
                <img src="../images/rabat1.jpg" alt="Rabat de jour" />
                <img src="../images/rabat2.jpg" alt="Rabat de nuit" />
            </div>
            <p class="text_ville_1">
                Bienvenue à Rabat, la capitale du Maroc, où l'histoire, la modernité et la culture se rencontrent avec élégance. Chez Alan Industry, découvrez l'effervescence de cette ville aux rues animées, aux jardins luxuriants et aux monuments emblématiques.
            </p>

            <p class="text_ville_2">
                Rabat, avec sa médina préservée, ses palais royaux et sa proximité avec l'océan Atlantique, offre une expérience marocaine authentique. Explorez la kasbah des Oudaias, déambulez dans les souks colorés et savourez la cuisine locale riche en saveurs.
            </p>

            <p class="text_ville_3">
                Chez Alan Industry, nous célébrons la diversité des destinations. Profitez de vols confortables, de tarifs compétitifs et d'un service personnalisé pour rendre votre séjour à Rabat mémorable.
            </p>
            <button id="reserverVolBtn" onclick="ouvrirPageReservation('Rabat', 120.00)">
                <span>Réserver un vol</span>
            </button>
        </div>
    </div>

    <!-- Ajoutez un espace de 10 pixels entre les cartes -->
    <div style="margin-top: 10px;"></div>

    <div class="description">
        <div class="Ville">
            <p class="titre">Marrakech - Plongez dans la cité rouge</p>
            <div class="gallery">
                <img src="../images/marrakech1.jpg" alt="Marrakech de jour" />
                <img src="../images/marrakech2.jpg" alt="Marrakech de nuit" />
            </div>
            <p class="text_ville_1">
                Bienvenue à Marrakech, la cité rouge du Maroc, où les traditions millénaires se mêlent à l'effervescence urbaine. Chez Alan Industry, plongez dans l'atmosphère enchanteresse de cette ville impériale, entre souks animés, palais somptueux et jardins luxuriants.
            </p>

            <p class="text_ville_2">
                Marrakech, avec sa médina classée à l'UNESCO, sa place Jemaa el-Fna vibrante et ses riads traditionnels, offre une expérience sensorielle unique. Découvrez l'art de la négociation dans les souks, dégustez la cuisine locale épicée et ressentez la magie de la place animée.
            </p>

            <p class="text_ville_3">
                Chez Alan Industry, nous met tout en œuvre pour rendre votre expérience de réservation aussi agréable que votre séjour à Marrakech. Notre équipe dévouée vous garantit des vols confortables, des tarifs compétitifs et un service personnalisé tout au long de votre voyage.
            </p>
            <button id="reserverVolBtn" onclick="ouvrirPageReservation('Marrakech', 140.00)">
                <span>Réserver un vol</span>
            </button>
        </div>
    </div>

    <!-- Ajoutez un espace de 10 pixels entre les cartes -->
    <div style="margin-top: 10px;"></div>

    <div class="description">
        <div class="Ville">
            <p class="titre">Tanger - Explorez la porte du Maroc</p>
            <div class="gallery">
                <img src="../images/tanger1.jpg" alt="Tanger de jour" />
                <img src="../images/tanger2.jpg" alt="Tanger de nuit" />
            </div>
            <p class="text_ville_1">
                Bienvenue à Tanger, la porte du Maroc, où l'histoire, la mer Méditerranée et la culture se rencontrent dans une harmonie envoûtante. Chez Alan Industry, découvrez la beauté de cette ville côtière, entre médina animée, plages dorées et falaises majestueuses.
            </p>

            <p class="text_ville_2">
                Tanger, avec son mélange unique d'influences arabes, africaines et européennes, offre une expérience marocaine distinctive. Explorez la kasbah, déambulez dans les souks, et admirez la vue panoramique depuis le cap Spartel. Laissez-vous séduire par l'atmosphère cosmopolite de cette ville emblématique.
            </p>

            <p class="text_ville_3">
                Chez Alan Industry, nous célébrons avec enthousiasme la riche diversité des destinations qui composent notre carte aérienne. Nous mettons à votre disposition une expérience de voyage inégalée, alliant le confort supérieur de nos vols, des tarifs compétitifs qui s'adaptent à toutes les bourses, et un service personnalisé pour un séjour mémorable.
            </p>
            <button id="reserverVolBtn" onclick="ouvrirPageReservation('Tanger', 130.00)">
                <span>Réserver un vol</span>
            </button>
        </div>
    </div>
</section>

<section class="Italie" id="Italie">
    <div style="margin-top: 20px;"></div>
    <h1>Italie</h1>
    <div style="margin-top: 20px;"></div>
    <div class="description">
        <div class="Ville">
            <p class="titre">Rome - Découvrez la Ville Éternelle</p>
            <div class="gallery">
                <img src="../images/rome1.jpg" alt="Rome de jour" />
                <img src="../images/rome2.jpg" alt="Rome de nuit" />
            </div>
            <p class="text_ville_1">
                Bienvenue à Rome, la Ville Éternelle, où l'histoire ancienne, l'art et la culture vous transportent à travers les siècles. Chez Alan Industry, plongez dans l'atmosphère unique de la capitale italienne, entre le Colisée imposant, le Forum romain et les ruelles pittoresques.
            </p>

            <p class="text_ville_2">
                Rome, avec ses célèbres fontaines, ses églises majestueuses et ses places animées, offre une expérience italienne incomparable. Explorez le Vatican, dégustez une délicieuse cuisine italienne et laissez-vous inspirer par l'art et l'architecture exceptionnels de la ville.
            </p>

            <p class="text_ville_3">
                Chez Alan Industry, nous célébrons avec enthousiasme la riche diversité des destinations qui composent notre carte aérienne. Nous mettons à votre disposition une expérience de voyage inégalée, alliant le confort supérieur de nos vols, des tarifs compétitifs qui s'adaptent à toutes les bourses, et un service personnalisé pour un séjour mémorable.
            </p>
            <button id="reserverVolBtn" onclick="ouvrirPageReservation('Rome', 160.00)">
                <span>Réserver un vol</span>
            </button>
        </div>
    </div>

    <!-- Ajoutez un espace de 10 pixels entre les cartes -->
    <div style="margin-top: 10px;"></div>

    <div class="description">
        <div class="Ville">
            <p class="titre">Venise - Explorez la Cité des Canaux</p>
            <div class="gallery">
                <img src="../images/venise1.jpg" alt="Venise de jour" />
                <img src="../images/venise2.jpg" alt="Venise de nuit" />
            </div>
            <p class="text_ville_1">
                Bienvenue à Venise, la Cité des Canaux, où la romance flotte dans l'air à chaque coin de rue. Chez Alan Industry, découvrez l'élégance intemporelle de cette ville lacustre, entre les canaux sinueux, les palais vénitiens et les places emblématiques.
            </p>

            <p class="text_ville_2">
                Venise, avec ses gondoles pittoresques, ses masques vénitiens et son histoire fascinante, offre une expérience unique en son genre. Traversez le Pont du Rialto, visitez la Place Saint-Marc et dégustez des spécialités italiennes dans les trattorias traditionnelles.
            </p>

            <p class="text_ville_3">
                Chez Alan Industry, nous mettons tout en œuvre pour rendre votre expérience de réservation aussi agréable que votre séjour à Venise. Notre équipe dévouée vous garantit des vols confortables, des tarifs compétitifs et un service personnalisé tout au long de votre voyage.
            </p>
            <button id="reserverVolBtn" onclick="ouvrirPageReservation('Venise', 180.00)">
                <span>Réserver un vol</span>
            </button>
        </div>
    </div>

    <!-- Ajoutez un espace de 10 pixels entre les cartes -->
    <div style="margin-top: 10px;"></div>

    <div class="description">
        <div class="Ville">
            <p class="titre">Pompéi - Voyagez dans le Temps</p>
            <div class="gallery">
                <img src="../images/pompei1.jpg" alt="Pompéi de jour" />
                <img src="../images/pompei2.jpg" alt="Pompéi de nuit" />
            </div>
            <p class="text_ville_1">
                Bienvenue à Pompéi, où les vestiges de l'Antiquité romaine prennent vie. Chez Alan Industry, explorez cette ville figée dans le temps, entre les ruines fascinantes, les fresques préservées et l'histoire captivante du mont Vésuve.
            </p>

            <p class="text_ville_2">
                Pompéi, avec son amphithéâtre bien conservé, ses thermes anciens et ses rues pavées, offre une plongée unique dans le passé. Marchez sur les traces des anciens Romains, découvrez les mystères de la cité ensevelie et revivez l'éclat de cette ville antique.
            </p>

            <p class="text_ville_3">
                Chez Alan Industry, nous comprenons l'importance de chaque voyage. C'est pourquoi nous mettons tout en œuvre pour rendre votre expérience de réservation aussi agréable que votre séjour à Pompéi. Notre équipe dévouée vous garantit des vols confortables, des tarifs compétitifs et un service personnalisé tout au long de votre voyage.
            </p>
            <button id="reserverVolBtn" onclick="ouvrirPageReservation('Pompéi', 150.00)">
                <span>Réserver un vol</span>
            </button>
        </div>
    </div>

    <!-- Ajoutez un espace de 10 pixels entre les cartes -->
    <div style="margin-top: 10px;"></div>

    <div class="description">
        <div class="Ville">
            <p class="titre">Florence - Plongez dans la Renaissance</p>
            <div class="gallery">
                <img src="../images/florence1.jpg" alt="Florence de jour" />
                <img src="../images/florence2.jpg" alt="Florence de nuit" />
            </div>
            <p class="text_ville_1">
                Bienvenue à Florence, le berceau de la Renaissance, où l'art, la culture et l'architecture célèbrent l'esprit créatif. Chez Alan Industry, plongez dans l'atmosphère artistique de cette ville toscane, entre les chefs-d'œuvre de la Galerie des Offices, le Ponte Vecchio et la majestueuse cathédrale.
            </p>

            <p
           class="text_ville_2">
                Florence, avec ses musées renommés, ses places élégantes et ses jardins pittoresques, offre une immersion totale dans l'ère de la Renaissance. Admirez les sculptures de Michel-Ange, déambulez dans les ruelles historiques et dégustez une cuisine toscane délicieuse.
        </p>

            <p class="text_ville_3">
                Chez Alan Industry, nous mettons tout en œuvre pour rendre votre expérience de réservation aussi agréable que votre séjour à Florence. Notre équipe dévouée vous garantit des vols confortables, des tarifs compétitifs et un service personnalisé tout au long de votre voyage.
            </p>
            <button id="reserverVolBtn" onclick="ouvrirPageReservation('Florence', 170.00)">
                <span>Réserver un vol</span>
            </button>
        </div>
    </div>

    <!-- Ajoutez un espace de 10 pixels entre les cartes -->
    <div style="margin-top: 10px;"></div>

</section>

<section class="Croatie" id="Croatie">
    <div style="margin-top: 20px;"></div>
    <h1>Croatie</h1>
    <div style="margin-top: 20px;"></div>
    <div class="description">
        <div class="Ville">
            <p class="titre">Dubrovnik - Explorez la Perle de l'Adriatique</p>
            <div class="gallery">
                <img src="../images/dubrovnik1.jpg" alt="Dubrovnik de jour" />
                <img src="../images/dubrovnik2.jpg" alt="Dubrovnik de nuit" />
            </div>
            <p class="text_ville_1">
                Bienvenue à Dubrovnik, la Perle de l'Adriatique, où les remparts médiévaux rencontrent les eaux azur de la mer Adriatique. Chez Alan Industry, nous vous invitons à vous promener dans les rues bien préservées de ce site classé au patrimoine mondial de l'UNESCO, où l'histoire et la beauté s'entremêlent.
            </p>

            <p class="text_ville_2">
                Dubrovnik, avec ses superbes remparts de la ville et son centre historique, offre un mélange captivant de culture et de beauté naturelle. Explorez le charmant Stradun, profitez de vues panoramiques depuis les remparts de la ville et plongez-vous dans la riche histoire maritime de cette perle côtière.
            </p>

            <p class="text_ville_3">
                Chez Alan Industry, nous comprenons l'importance de chaque voyage. Nous nous efforçons de rendre votre expérience de réservation aussi agréable que votre séjour à Dubrovnik. Notre équipe dévouée assure des vols confortables, des tarifs compétitifs et un service personnalisé tout au long de votre voyage.
            </p>
            <button id="reserverVolBtn" onclick="ouvrirPageReservation('Dubrovnik', 160.00)">
                <span>Réserver un vol</span>
            </button>
        </div>
    </div>

    <!-- Ajoutez un espace de 10 pixels entre les cartes -->
    <div style="margin-top: 10px;"></div>

    <div class="description">
        <div class="Ville">
            <p class="titre">Split - Découvrez la Beauté Côtière</p>
            <div class="gallery">
                <img src="../images/split1.jpg" alt="Split de jour" />
                <img src="../images/split2.jpg" alt="Split de nuit" />
            </div>
            <p class="text_ville_1">
                Bienvenue à Split, un paradis côtier où l'histoire ancienne rencontre la vie méditerranéenne vibrante. Alan Industry vous invite à explorer le palais de Dioclétien, à vous promener le long de la promenade Riva et à vous délecter du mélange unique de tradition et de modernité.
            </p>

            <p class="text_ville_2">
                Split, avec sa vieille ville charmante et ses vues imprenables sur la mer, offre une escapade parfaite pour ceux qui recherchent la richesse culturelle et les merveilles naturelles. Découvrez les marchés locaux, savourez la cuisine dalmate et ressentez la chaleur de l'hospitalité de Split.
            </p>

            <p class="text_ville_3">
                Chez Alan Industry, nous nous engageons à fournir une gamme diversifiée d'expériences de voyage. Votre voyage à Split est soigneusement conçu, assurant des vols confortables, des tarifs compétitifs et un service personnalisé pour un séjour mémorable.
            </p>
            <button id="reserverVolBtn" onclick="ouvrirPageReservation('Split', 140.00)">
                <span>Réserver un vol</span>
            </button>
        </div>
    </div>

    <!-- Ajoutez un espace de 10 pixels entre les cartes -->
    <div style="margin-top: 10px;"></div>

    <div class="description">
        <div class="Ville">
            <p class="titre">Zagreb - Explorez le Charme de la Capitale</p>
            <div class="gallery">
                <img src="../images/zagreb1.jpg" alt="Zagreb de jour" />
                <img src="../images/zagreb2.jpg" alt="Zagreb de nuit" />
            </div>
            <p class="text_ville_1">
                Bienvenue à Zagreb, la capitale dynamique de la Croatie, où l'architecture historique rencontre une scène culturelle animée. Alan Industry vous invite à vous promener dans les rues médiévales, à visiter des monuments historiques et à ressentir l'esprit dynamique de la ville.
            </p>

            <p class="text_ville_2">
                Zagreb, avec ses places charmantes et ses événements culturels, offre un mélange délicieux de tradition et de modernité. Explorez la Vieille Ville, visitez des musées et des galeries, et profitez des cafés confortables qui contribuent à l'atmosphère unique de Zagreb.
            </p>

            <p class="text_ville_3">
                Chez Alan Industry, nous célébrons la riche diversité des destinations. Profitez de vols confortables, de tarifs compétitifs et d'un service personnalisé pour rendre votre séjour à Zagreb aussi mémorable que possible. Réservez avec nous pour une expérience inoubliable.
            </p>
            <button id="reserverVolBtn" onclick="ouvrirPageReservation('Zagreb', 130.00)">
                <span>Réserver un vol</span>
            </button>
        </div>
    </div>
    </div>
</section>
<section class="Thailande" id="Thaïlande">

    <div style="margin-top: 20px;"></div>
    <h1>Thaïlande</h1>
    <div style="margin-top: 20px;"></div>
    <div class="description">
        <div class="Ville">
            <p class="titre">Bangkok - Découvrez la Capitale Trépidante</p>
            <div class="gallery">
                <img src="../images/bangkok1.jpg" alt="Bangkok de jour" />
                <img src="../images/bangkok2.jpg" alt="Bangkok de nuit" />
            </div>
            <p class="text_ville_1">
                Bienvenue à Bangkok, la capitale trépidante de la Thaïlande, où l'ancien et le moderne s'entremêlent dans une symphonie vibrante. Chez Alan Industry, nous vous invitons à explorer les temples scintillants, à déguster la cuisine de rue épicée et à plonger dans la culture effervescente de la ville.
            </p>

            <p class="text_ville_2">
                Bangkok, avec ses gratte-ciel étincelants et ses marchés animés, offre une expérience captivante. Des temples majestueux comme le Wat Arun aux quartiers modernes de Sukhumvit, chaque coin de la ville raconte une histoire unique. Découvrez la vie nocturne animée et les canaux tranquilles de la Venise de l'Est.
            </p>

            <p class="text_ville_3">
                Chez Alan Industry, nous comprenons l'importance de chaque voyage. Nous vous garantissons des vols confortables, des tarifs compétitifs et un service personnalisé pour rendre votre séjour à Bangkok aussi enrichissant que la diversité de la ville elle-même.
            </p>
            <button id="reserverVolBtn" onclick="ouvrirPageReservation('Bangkok', 180.00)">
                <span>Réserver un vol</span>
            </button>
        </div>
    </div>

    <!-- Ajoutez un espace de 10 pixels entre les cartes -->
    <div style="margin-top: 10px;"></div>

    <div class="description">
        <div class="Ville">
            <p class="titre">Chiang Mai - Explorez la Perle du Nord</p>
            <div class="gallery">
                <img src="../images/chiangmai1.jpg" alt="Chiang Mai de jour" />
                <img src="../images/chiangmai2.jpg" alt="Chiang Mai de nuit" />
            </div>
            <p class="text_ville_1">
                Bienvenue à Chiang Mai, la perle du Nord de la Thaïlande, où la tradition rencontre la nature dans une harmonie parfaite. Alan Industry vous invite à découvrir les temples anciens, à explorer la campagne luxuriante.
            </p>

            <p class="text_ville_2">
                Chiang Mai, entourée de montagnes majestueuses, offre une évasion paisible. Des marchés nocturnes colorés aux temples bouddhistes emblématiques tels que le Wat Phra Singh, chaque moment à Chiang Mai est imprégné de charme. Découvrez l'artisanat local.
            </p>

            <p class="text_ville_3">
                Chez Alan Industry, nous nous engageons à rendre votre expérience de réservation aussi agréable que votre séjour à Chiang Mai. Profitez de vols confortables, de tarifs compétitifs.
            </p>
            <button id="reserverVolBtn" onclick="ouvrirPageReservation('Chiang Mai', 160.00)">
                <span>Réserver un vol</span>
            </button>
        </div>
    </div>

    <!-- Ajoutez un espace de 10 pixels entre les cartes -->
    <div style="margin-top: 10px;"></div>

    <div class="description">
        <div class="Ville">
            <p class="titre">Ayutthaya - Plongez dans l'Histoire Ancienne</p>
            <div class="gallery">
                <img src="../images/aytthaya1.jpg" alt="Ayutthaya de jour" />
                <img src="../images/aytthaya2.jpg" alt="Ayutthaya de nuit" />
            </div>
            <p class="text_ville_1">
               Bienvenue à Ayutthaya, une fenêtre sur l'histoire ancienne de la Thaïlande, où les ruines majestueuses témoignent de la grandeur passée. Chez Alan Industry, nous vous invitons à plonger dans cette ancienne capitale, inscrite au patrimoine mondial de l'UNESCO.
            <p class="text_ville_2">
Ayutthaya, avec son mélange unique de culture thaïlandaise, khmère et birmane, offre une expérience immersive. Explorez les temples fascinants tels que Wat Mahathat et Wat Phra Si Sanphet, promenez-vous à vélo à travers les vestiges historiques et ressentez la magie de cette cité antique.
</p>

<p class="text_ville_3">
Chez Alan Industry, nous mettons tout en œuvre pour rendre votre voyage à Ayutthaya aussi captivant que possible. Profitez de vols confortables, de tarifs compétitifs et d'un service personnalisé pour une exploration sans souci de cette perle historique.
</p>
<button id="reserverVolBtn" onclick="ouvrirPageReservation('Ayutthaya', 140.00)">
    <span>Réserver un vol</span>
</button>
</div>
</div>

<!-- Ajoutez un espace de 10 pixels entre les cartes -->
<div style="margin-top: 10px;"></div>

<div class="description">
    <div class="Ville">
        <p class="titre">Phuket - Détente et Aventure sur l'Île Paradisiaque</p>
        <div class="gallery">
            <img src="../images/phuket1.jpg" alt="Phuket de jour" />
            <img src="../images/phuket2.jpg" alt="Phuket de nuit" />
        </div>
        <p class="text_ville_1">
            Bienvenue à Phuket, l'île paradisiaque du sud de la Thaïlande, où les plages de sable blanc, les eaux cristallines et la vie nocturne animée créent une destination idyllique. Chez Alan Industry, nous vous invitons à vous détendre sur les plages pittoresques, à explorer les îles voisines et à découvrir l'énergie vibrante de Patong.
        </p>

        <p class="text_ville_2">
            Phuket, avec ses stations balnéaires de classe mondiale et ses activités nautiques passionnantes, offre une escapade parfaite. Découvrez la culture locale au Vieux-Phuket, plongez dans la vie marine colorée lors d'une excursion de plongée et savourez une cuisine thaïlandaise délicieuse sur la plage.

        </p>

        <p class="text_ville_3">
            Chez Alan Industry, nous nous engageons à rendre votre expérience de réservation aussi agréable que votre séjour à Phuket. Profitez de vols confortables, de tarifs compétitifs et d'un service personnalisé pour une escapade tropicale inoubliable.
        </p>
        <button id="reserverVolBtn" onclick="ouvrirPageReservation('Phuket', 200.00)">
            <span>Réserver un vol</span>
        </button>
    </div>
</div>

<!-- Ajoutez un espace de 10 pixels entre les cartes -->
<div style="margin-top: 10px;"></div>
</section>

<section class="EtatsUnis" id="États-Unis">
    <div style="margin-top: 20px;"></div>
    <h1>États-Unis</h1>
    <div style="margin-top: 20px;"></div>
    <div class="description">
        <div class="Ville">
            <p class="titre">New York - La Ville Qui Ne Dort Jamais</p>
            <div class="gallery">
                <img src="../images/newyork1.jpg" alt="New York de jour" />
                <img src="../images/newyork2.jpg" alt="New York de nuit" />
            </div>
            <p class="text_ville_1">
                Bienvenue à New York, la ville emblématique qui définit l'énergie urbaine et la diversité culturelle. Chez Alan Industry, nous vous invitons à explorer les gratte-ciel majestueux, à flâner dans Central Park et à ressentir le pouls incessant de Times Square.
            </p>

            <p class="text_ville_2">
                New York, avec ses quartiers uniques, ses théâtres de Broadway et sa cuisine mondiale, offre une expérience inoubliable. Découvrez la Statue de la Liberté, parcourez les galeries d'art de Chelsea et vivez la magie de cette métropole dynamique.
            </p>

            <p class="text_ville_3">
                Chez Alan Industry, nous nous engageons à rendre votre voyage à New York aussi passionnant que la ville elle-même. Profitez de vols confortables, de tarifs compétitifs et d'un service personnalisé pour une immersion totale dans la Grosse Pomme.
            </p>
            <button id="reserverVolBtn" onclick="ouvrirPageReservation('New York', 300.00)">
                <span>Réserver un vol</span>
            </button>
        </div>
    </div>

    <!-- Ajoutez un espace de 10 pixels entre les cartes -->
    <div style="margin-top: 10px;"></div>

    <div class="description">
        <div class="Ville">
            <p class="titre">Las Vegas - L'Éclat des Lumières et des Casinos</p>
            <div class="gallery">
                <img src="../images/lasvegas1.jpg" alt="Las Vegas de jour" />
                <img src="../images/lasvegas2.jpg" alt="Las Vegas de nuit" />
            </div>
            <p class="text_ville_1">
                Bienvenue à Las Vegas, la capitale mondiale du divertissement, où les lumières éblouissantes, les spectacles grandioses et les casinos emblématiques créent une atmosphère unique. Chez Alan Industry, plongez dans le glamour de la Strip, tentez votre chance dans les célèbres casinos et assistez à des spectacles sensationnels.
            </p>

            <p class="text_ville_2">
                Las Vegas, avec ses hôtels extravagants, ses piscines somptueuses et ses restaurants de renommée mondiale, offre une expérience excitante. Explorez le désert environnant, découvrez les spectacles de renommée mondiale et vivez une aventure sans pareille au cœur de l'Amérique du divertissement.
            </p>

            <p class="text_ville_3">
                Chez Alan Industry, nous sommes déterminés à rendre votre séjour à Las Vegas aussi brillant que les néons du Strip. Profitez de vols confortables, de tarifs compétitifs et d'un service personnalisé pour une expérience inoubliable dans la capitale mondiale du jeu.
            </p>
            <button id="reserverVolBtn" onclick="ouvrirPageReservation('Las Vegas', 400.00)">
                <span>Réserver un vol</span>
            </button>
        </div>
    </div>

    <!-- Ajoutez un espace de 10 pixels entre les cartes -->
    <div style="margin-top: 10px;"></div>

    <div class="description">
        <div class="Ville">
            <p class="titre">Los Angeles - La Cité des Anges et du Divertissement</p>
            <div class="gallery">
                <img src="../images/losangeles1.jpg" alt="Los Angeles de jour" />
                <img src="../images/losangeles2.jpg" alt="Los Angeles de nuit" />
            </div>
            <p class="text_ville_1">
                Bienvenue à Los Angeles, la Cité des Anges, où le glamour hollywoodien, les plages ensoleillées et la culture artistique se rencontrent. Chez Alan Industry, découvrez la magie de Hollywood, détendez-vous sur les plages emblématiques et explorez les quartiers dynamiques de la ville.
            </p>

            <p class="text_ville_2">
                Los Angeles, avec ses studios de cinéma légendaires, ses parcs d'attractions renommés et sa scène artistique florissante, offre une expérience diversifiée. Visitez le Walk of Fame, parcourez les musées de renom, et plongez-vous dans la créativité qui définit cette métropole captivante.
            </p>

            <p class="text_ville_3">
                Chez Alan Industry, nous nous engageons à rendre votre séjour à Los Angeles aussi captivant que le paysage varié de la ville. Profitez de vols confortables, de tarifs compétitifs et d'un service personnalisé pour une exploration sans souci de la Cité des Anges.
            </p>
            <button id="reserverVolBtn" onclick="ouvrirPageReservation('Los Angeles', 350.00)">
                <span>Réserver un vol</span>
            </button>
        </div>
    </div>

    <!-- Ajoutez un espace de 10 pixels entre les cartes -->
    <div style="margin-top: 10px;"></div>

    <div class="description">
        <div class="Ville">
            <p class="titre">Washington - Capitale Politique et Culturelle</p>
            <div class="gallery">
                <img src="../images/washington1.jpg" alt="Washington de jour" />
                <img src="../images/washington2.jpg" alt="Washington de nuit" />
            </div>
            <p class="text_ville_1">
                Bienvenue à Washington, D.C., la capitale des États-Unis, où l'histoire politique, les monuments emblématiques et les musées exceptionnels créent une toile de fond impressionnante. Chez Alan Industry, explorez le National Mall, visitez les musées Smithsonian et découvrez le cœur du pays.
            </p>

            <p class="text_ville_2">
                Washington, avec ses bâtiments gouvernementaux majestueux, ses quartiers historiques et ses quartiers historiques et ses événements culturels, offre une expérience enrichissante. Admirez la Maison Blanche, parcourez les mémoriaux dédiés aux grands leaders et plongez-vous dans la scène artistique florissante de la ville.

<p class="text_ville_3">
    Chez Alan Industry, nous nous engageons à rendre votre visite à Washington aussi éducative que passionnante. Profitez de vols confortables, de tarifs compétitifs et d'un service personnalisé pour une exploration immersive de la capitale politique et culturelle des États-Unis.
</p>
<button id="reserverVolBtn" onclick="ouvrirPageReservation('Washington', 250.00)">
    <span>Réserver un vol</span>
</button>
</div>
</div>
</section>

<section class="Grece" id="Grèce">
    <div style="margin-top: 20px;"></div>
    <h1>Grèce</h1>
    <div style="margin-top: 20px;"></div>
    <div class="description">
        <div class="Ville">
            <p class="titre">Athènes - Découvrez la cité antique</p>
            <div class="gallery">
                <img src="../images/athenes1.jpg" alt="Athènes de jour" />
                <img src="../images/athenes2.jpg" alt="Athènes de nuit" />
            </div>
            <p class="text_ville_1">
                Bienvenue à Athènes, berceau de la civilisation occidentale, où l'histoire antique rencontre la vie moderne. Chez Alan Industry, plongez dans la richesse culturelle de cette cité pleine de temples majestueux et d'histoires mythologiques.
            </p>

            <p class="text_ville_2">
                Athènes, avec son Acropole emblématique et son Agora antique, vous transporte à une époque où la philosophie, l'art et la démocratie ont prospéré. Explorez les rues animées de Plaka, goûtez aux saveurs méditerranéennes et laissez-vous imprégner de la magie de cette ville fascinante.
            </p>

            <p class="text_ville_3">
                Chez Alan Industry, nous vous offrons une expérience unique à Athènes. Profitez de vols confortables, de tarifs compétitifs et d'un service personnalisé pour rendre votre voyage aussi mémorable que les vestiges de l'Antiquité.
            </p>
            <button id="reserverVolBtn" onclick="ouvrirPageReservation('Athènes', 180.00)">
                <span>Réserver un vol</span>
            </button>
        </div>
    </div>

    <!-- Ajoutez un espace de 10 pixels entre les cartes -->
    <div style="margin-top: 10px;"></div>

    <div class="description">
        <div class="Ville">
            <p class="titre">Corinthe - Explorez l'histoire et la mer</p>
            <div class="gallery">
                <img src="../images/corinthe1.jpg" alt="Corinthe de jour" />
                <img src="../images/corinthe2.jpg" alt="Corinthe de nuit" />
            </div>
            <p class="text_ville_1">
                Bienvenue à Corinthe, cité historique entre terre et mer, où les vestiges antiques racontent des récits fascinants. Chez Alan Industry, découvrez cette destination chargée d'histoire, offrant une vue magnifique sur le golfe de Corinthe.
            </p>

            <p class="text_ville_2">
                Corinthe, avec son canal impressionnant, ses ruines antiques et ses plages idylliques, vous transporte dans un voyage à travers le temps. Explorez les sites archéologiques, dégustez une cuisine locale authentique et laissez-vous envoûter par l'atmosphère unique de cette cité grecque.
            </p>

            <p class="text_ville_3">
                Chez Alan Industry, nous vous promettons une expérience immersive à Corinthe. Bénéficiez de vols confortables, de tarifs compétitifs et d'un service exceptionnel pour rendre votre séjour aussi captivant que les légendes qui entourent cette région.
            </p>
            <button id="reserverVolBtn" onclick="ouvrirPageReservation('Corinthe', 160.00)">
                <span>Réserver un vol</span>
            </button>
        </div>
    </div>

    <!-- Ajoutez un espace de 10 pixels entre les cartes -->
    <div style="margin-top: 10px;"></div>

    <div class="description">
        <div class="Ville">
            <p class="titre">Cyclades - Explorez les îles grecques envoûtantes</p>
            <div class="gallery">
                <img src="../images/cyclades1.jpg" alt="Cyclades de jour" />
                <img src="../images/cyclades2.jpg" alt="Cyclades de nuit" />
            </div>
            <p class="text_ville_1">
                Bienvenue dans les Cyclades, archipel grec aux îles enchanteresses, où le bleu de la mer Égée se marie à l'éclat du ciel. Chez Alan Industry, plongez dans la beauté pittoresque de ces îles emblématiques.
            </p>

            <p class="text_ville_2">
                Les Cyclades, avec leurs villages blancs, leurs plages cristallines et leurs couchers de soleil spectaculaires, offrent une escapade idyllique. Explorez les ruelles étroites, goûtez aux saveurs méditerranéennes et ressentez la quiétude de ces îles uniques.
            </p>

            <p class="text_ville_3">
                Chez Alan Industry, nous vous promettons une expérience inoubliable dans les Cyclades. Profitez de vols confortables, de tarifs compétitifs et d'un service attentionné pour un séjour sous le signe de la détente et de la découverte.
            </p>
            <button id="reserverVolBtn" onclick="ouvrirPageReservation('Cyclades', 200.00)">
                <span>Réserver un vol</span>
            </button>
        </div>
    </div>

    <!-- Ajoutez un espace de 10 pixels entre les cartes -->
    <div style="margin-top: 10px;"></div>

    <div class="description">
        <div class="Ville">
            <p class="titre">Santorin - Vivez une expérience unique dans les îles grecques</p>
            <div class="gallery">
                <img src="../images/santorin1.jpg" alt="Santorin de jour" />
                <img src="../images/santorin2.jpg" alt="Santorin de nuit" />
            </div>
            <p class="text_ville_1">
                Bienvenue à Santorin, joyau des Cyclades, où les maisons blanchies à la chaux se perchent sur des falaises volcaniques avec une vue à couper le souffle. Chez Alan Industry, plongez dans l'élégance et l'authenticité de cette île envoûtante.
            </p>

            <p class="text_ville_2">
                Santorin, avec ses panoramas à couper le souffle, ses eaux cristallines et ses couchers de soleil inoubliables, offre une expérience romantique. Explorez les villages pittoresques, dégustez                une cuisine locale raffinée et laissez-vous emporter par la magie de Santorin.
            </p>

            <p class="text_ville_3">
                Chez Alan Industry, nous vous offrons une expérience exceptionnelle à Santorin. Profitez de vols confortables, de tarifs compétitifs et d'un service personnalisé pour rendre votre séjour aussi captivant que les panoramas spectaculaires de cette île grecque.
            </p>
            <button id="reserverVolBtn" onclick="ouvrirPageReservation('Santorin', 220.00)">
                <span>Réserver un vol</span>
            </button>
        </div>
    </div>
</section>

<section class="Mexique" id="Mexique">
    <div style="margin-top: 20px;"></div>
    <h1>Mexique</h1>
    <div style="margin-top: 20px;"></div>
    <div class="description">
        <div class="Ville">
            <p class="titre">Cancún - Découvrez la perle des Caraïbes</p>
            <div class="gallery">
                <img src="../images/cancun1.jpg" alt="Cancún de jour" />
                <img src="../images/cancun2.jpg" alt="Cancún de nuit" />
            </div>
            <p class="text_ville_1">
                Bienvenue à Cancún, la perle des Caraïbes, où les plages de sable blanc rencontrent les eaux cristallines. Chez Alan Industry, nous vous invitons à plonger dans la beauté tropicale de cette destination paradisiaque, où détente et aventures vous attendent.
            </p>

            <p class="text_ville_2">
                Cancún, avec ses complexes hôteliers luxueux, ses sites archéologiques mayas et sa vie nocturne animée, vous offre une expérience inoubliable. Explorez les récifs coralliens, détendez-vous sur les plages idylliques et laissez-vous emporter par l'atmosphère enchanteresse de cette ville balnéaire.
            </p>

            <p class="text_ville_3">
                Chez Alan Industry, nous sommes ravis de vous accompagner dans cette aventure à Cancún. Profitez de vols confortables, de tarifs compétitifs et d'un service personnalisé pour rendre votre séjour aussi exceptionnel que les couchers de soleil sur la mer des Caraïbes.
            </p>
            <button id="reserverVolBtn" onclick="ouvrirPageReservation('Cancun', 180.00)">
                <span>Réserver un vol</span>
            </button>
        </div>
    </div>

    <!-- Ajoutez un espace de 10 pixels entre les cartes -->
    <div style="margin-top: 10px;"></div>

    <div class="description">
        <div class="Ville">
            <p class="titre">Mexico - Explorez la capitale vibrante</p>
            <div class="gallery">
                <img src="../images/mexico1.jpg" alt="Mexico de jour" />
                <img src="../images/mexico2.jpg" alt="Mexico de nuit" />
            </div>
            <p class="text_ville_1">
                Bienvenue à Mexico, une capitale vibrante où l'histoire, la culture et la modernité se rencontrent. Chez Alan Industry, nous vous invitons à explorer les trésors de cette métropole fascinante, des pyramides anciennes aux quartiers animés.
            </p>

            <p class="text_ville_2">
                Mexico, avec ses musées exceptionnels, ses marchés colorés et sa scène artistique dynamique, vous offre une plongée dans la riche diversité mexicaine. Découvrez la cuisine savoureuse, admirez l'architecture coloniale et plongez dans l'effervescence de cette ville cosmopolite.
            </p>

            <p class="text_ville_3">
                Chez Alan Industry, nous sommes fiers de vous offrir une expérience unique à Mexico. Profitez de vols confortables, de tarifs compétitifs et d'un service personnalisé pour rendre votre séjour aussi captivant que les ruelles de la Zona Rosa.
            </p>
            <button id="reserverVolBtn" onclick="ouvrirPageReservation('Mexico', 160.00)">
                <span>Réserver un vol</span>
            </button>
        </div>
    </div>

    <!-- Ajoutez un espace de 10 pixels entre les cartes -->
    <div style="margin-top: 10px;"></div>

    <div class="description">
        <div class="Ville">
            <p class="titre">Campeche - Plongez dans le charme colonial</p>
            <div class="gallery">
                <img src="../images/campeche1.jpg" alt="Campeche de jour" />
                <img src="../images/campeche2.jpg" alt="Campeche de nuit" />
            </div>
            <p class="text_ville_1">
                Bienvenue à Campeche, une ville au charme colonial préservé, où les façades colorées et les remparts racontent une histoire fascinante. Chez Alan Industry, nous vous invitons à plonger dans l'atmosphère authentique de cette perle méconnue.
            </p>

            <p class="text_ville_2">
                Campeche, avec ses rues pavées, ses forts historiques et ses festivals animés, vous transporte dans le passé du Mexique. Explorez les marchés locaux, savourez la cuisine traditionnelle et laissez-vous séduire par l'accueil chaleureux des habitants.
            </p>

            <p class="text_ville_3">
                Chez Alan Industry, nous sommes ravis de vous faire découvrir la beauté de Campeche. Profitez de vols confortables, de tarifs compétitifs et d'un service personnalisé pour rendre votre séjour aussi authentique que les murs de la vieille ville.
            </p>
            <button id="reserverVolBtn" onclick="ouvrirPageReservation('Campeche', 140.00)">
                <span>Réserver un vol</span>
            </button>
        </div>
    </div>

    <!-- Ajoutez un espace de 10 pixels entre les cartes -->
    <div style="margin-top: 10px;"></div>

    <div class="description">
        <div class="Ville">
            <p class="titre">Valladolid - Explorez le cœur de la péninsule</p>
            <div class="gallery">
                <img src="../images/valladolid1.jpg" alt="Valladolid de jour" />
                <img src="../images/valladolid2.jpg" alt="Valladolid de nuit" />
            </div>
            <p class="text_ville_1">
                Bienvenue à Valladolid, un trésor au cœur de la péninsule du Yucatán, où l'histoire maya et la culture coloniale se rencontrent. Chez Alan Industry, nous vous invitons à explorer cette ville charmante, entre cenotes et églises centenaires.
            </p>

            <p class="text_ville_2">
                Valladolid, avec ses places pittoresques, ses marchés animés et ses cénotes cristallines, vous offre une expérience authentique dans la péninsule du Yucatán. Découvrez la richesse culturelle, dégustez les spécialités locales et plongez dans l'at
  <p class="text_ville_3">
            Chez Alan Industry, nous sommes enchantés de vous guider à Valladolid. Profitez de vols confortables, de tarifs compétitifs et d'un service personnalisé pour rendre votre séjour aussi captivant que la découverte des sites archéologiques mayas voisins.
        </p>
        <button id="reserverVolBtn" onclick="ouvrirPageReservation('Valladolid', 150.00)">
            <span>Réserver un vol</span>
        </button>
    </div>
</div>
</section>

<section class="Japon" id="Japon">
    <div style="margin-top: 20px;"></div>
    <h1>Japon</h1>
    <div style="margin-top: 20px;"></div>
    <div style="margin-top: 20px;"></div>
    <div class="description">
        <div class="Ville">
            <p class="titre">Tokyo - Découvrez la capitale vibrante</p>
            <div class="gallery">
                <img src="../images/tokyo1.jpg" alt="Tokyo de jour" />
                <img src="../images/tokyo2.jpg" alt="Tokyo de nuit" />
            </div>
            <p class="text_ville_1">
                Bienvenue à Tokyo, la métropole effervescente où la tradition rencontre la modernité. Chez Alan Industry, plongez dans l'atmosphère électrique de cette ville cosmopolite, où les gratte-ciel scintillants coexistent avec des temples anciens.
            </p>

            <p class="text_ville_2">
                Tokyo, avec ses quartiers dynamiques comme Shibuya et ses jardins tranquilles comme Shinjuku Gyoen, offre une expérience unique. Des délices culinaires aux innovations technologiques, découvrez une ville où chaque coin raconte une histoire fascinante.
            </p>

            <p class="text_ville_3">
                Chez Alan Industry, nous vous invitons à explorer Tokyo avec le confort de nos vols, des tarifs compétitifs et un service dévoué. Profitez pleinement de votre séjour dans cette métropole qui allie l'ancien et le nouveau de manière harmonieuse.
            </p>
            <button id="reserverVolBtn" onclick="ouvrirPageReservation('Tokyo', 160.00)">
                <span>Réserver un vol</span>
            </button>
        </div>
    </div>

    <!-- Ajoutez un espace de 10 pixels entre les cartes -->
    <div style="margin-top: 10px;"></div>

    <div class="description">
        <div class="Ville">
            <p class="titre">Kyoto - Explorez la beauté traditionnelle</p>
            <div class="gallery">
                <img src="../images/kyoto1.jpg" alt="Kyoto de jour" />
                <img src="../images/kyoto2.jpg" alt="Kyoto de nuit" />
            </div>
            <p class="text_ville_1">
                Bienvenue à Kyoto, la ville des geishas et des temples majestueux. Chez Alan Industry, plongez dans l'élégance intemporelle de cette ancienne capitale, où chaque rue raconte une histoire vieille de plusieurs siècles.
            </p>

            <p class="text_ville_2">
                Kyoto, avec ses jardins de mousse, ses temples dorés et ses ruelles préservées, offre une expérience unique au cœur de la culture japonaise. Découvrez l'art du thé, les festivals traditionnels et la sérénité qui règne dans cette ville empreinte d'histoire.
            </p>

            <p class="text_ville_3">
                Chez Alan Industry, nous vous invitons à vivre l'authenticité de Kyoto. Profitez de nos vols vers cette destination unique, avec des tarifs compétitifs et un service personnalisé pour rendre votre séjour aussi mémorable que les cerisiers en fleurs au printemps.
            </p>
            <button id="reserverVolBtn" onclick="ouvrirPageReservation('Kyoto', 170.00)">
                <span>Réserver un vol</span>
            </button>
        </div>
    </div>

    <!-- Ajoutez un espace de 10 pixels entre les cartes -->
    <div style="margin-top: 10px;"></div>

    <div class="description">
        <div class="Ville">
            <p class="titre">Osaka - Vivez l'effervescence urbaine</p>
            <div class="gallery">
                <img src="../images/osaka1.jpg" alt="Osaka de jour" />
                <img src="../images/osaka2.jpg" alt="Osaka de nuit" />
            </div>
            <p class="text_ville_1">
                Bienvenue à Osaka, la ville dynamique où la gastronomie exceptionnelle et le divertissement abondent. Chez Alan Industry, plongez dans l'effervescence de cette métropole japonaise, où la modernité s'associe à une atmosphère conviviale.
            </p>

            <p class="text_ville_2">
                Osaka, avec son château imposant, ses quartiers commerçants animés et ses délices culinaires comme le takoyaki, offre une expérience unique. Découvrez le contraste entre les gratte-ciel illuminés et les sanctuaires traditionnels dans cette ville pleine de surprises.
            </p>

            <p class="text_ville_3">
                Chez Alan Industry, nous vous proposons des vols vers Osaka pour que vous puissiez découvrir cette ville animée. Profitez de tarifs compétitifs, d'un service de qualité et plongez dans l'énergie vibrante d'Osaka lors de votre séjour inoubliable.
            </p>
            <button id="reserverVolBtn" onclick="ouvrirPageReservation('Osaka', 180.00)">
                <span>Réserver un vol</span>
            </button>
        </div>
    </div>

    <!-- Ajoutez un espace de 10 pixels entre les cartes -->
    <div style="margin-top: 10px;"></div>

    <div class="description">
        <div class="Ville">
            <p class="titre">Karuizawa - Échappez à la sérénité des montagnes</p>
            <div class="gallery">
                <img src="../images/karuizawa1.jpg" alt="Karuizawa de jour" />
                <img src="../images/karuizawa2.jpg" alt="Karuizawa de nuit" />
            </div>
            <p class="text_ville_1">
                Bienvenue à Karuizawa, une retraite paisible nichée dans les montagnes verdoyantes. Chez Alan Industry, échappez à l'agitation urbaine et découvrez cette destination japonaise où la nature rencontre l'élégance décontractée.
            </p>

            <p class="text_ville_2">
                Karuizawa, avec ses onsens relaxants, ses sentiers de randonnée pittoresques et ses boutiques élégantes, offre une expérience unique loin du tumulte des grandes villes. Profitez d'une escapade relaxante dans cette destination prisée des Japonais.
            </p>

            <p class="text_ville_3">
                Chez Alan Industry, nous vous invitons à découvrir Karuizawa. Profitez de nos vols pour cette destination apaisante, avec des tarifs compét                Chez Alan Industry, nous vous invitons à découvrir Karuizawa. Profitez de nos vols pour cette destination apaisante, avec des tarifs compétitifs et un service attentif pour rendre votre séjour aussi relaxant que les sources chaudes de la région.
            </p>
            <button id="reserverVolBtn" onclick="ouvrirPageReservation('Karuizawa', 190.00)">
                <span>Réserver un vol</span>
            </button>
        </div>
    </div>
</section>
<section class="Nouvelle-Zelande" id="Nouvelle-Zélande">
    <div style="margin-top: 20px;"></div>
    <h1>Nouvelle-Zélande</h1>
    <div style="margin-top: 20px;"></div>
    <div class="description">
        <div class="Ville">
            <p class="titre">Mount Maunganui - Découvrez la beauté côtière</p>
            <div class="gallery">
                <img src="../images/mount_maunganui_1.jpg" alt="Mount Maunganui plage" />
                <img src="../images/mount_maunganui_2.jpg" alt="Vue panoramique de Mount Maunganui" />
            </div>
            <p class="text_ville_1">
                Bienvenue à Mount Maunganui, où les plages de sable blanc s'étendent à perte de vue. Chez Alan Industry, nous vous invitons à explorer cette destination côtière paradisiaque, où l'océan Pacifique rencontre une ambiance décontractée.
            </p>
            <p class="text_ville_2">
                Mount Maunganui offre des vues panoramiques depuis son sommet, des activités nautiques passionnantes et une atmosphère détendue. Découvrez la beauté naturelle préservée de cette région, entre plage et montagne.
            </p>
            <p class="text_ville_3">
                Chez Alan Industry, nous mettons tout en œuvre pour rendre votre expérience de réservation aussi agréable que votre séjour à Mount Maunganui. Profitez de vols confortables, de tarifs compétitifs et d'un service personnalisé tout au long de votre voyage.
            </p>
            <button id="reserverVolBtn" onclick="ouvrirPageReservation('Mount Maunganui', 180.00)">
                <span>Réserver un vol</span>
            </button>
        </div>
    </div>

    <!-- Ajoutez un espace de 10 pixels entre les cartes -->
    <div style="margin-top: 10px"></div>

    <div class="description">
        <div class="Ville">
            <p class="titre">Nelson - Explorez la région des vins et de l'art</p>
            <div class="gallery">
                <img src="../images/nelson_1.jpg" alt="Vignobles de Nelson" />
                <img src="../images/nelson_2.jpg" alt="Art dans la région de Nelson" />
            </div>
            <p class="text_ville_1">
                Bienvenue à Nelson, où les vignobles rencontrent une scène artistique florissante. Chez Alan Industry, nous vous invitons à découvrir cette région riche en culture, en art et en délices vinicoles.
            </p>
            <p class="text_ville_2">
                Nelson offre des paysages pittoresques, des galeries d'art captivantes et des vins primés. Explorez les marchés locaux, visitez les ateliers d'artistes et goûtez aux saveurs uniques de cette destination néo-zélandaise.
            </p>
            <p class="text_ville_3">
                Chez Alan Industry, nous comprenons l'importance de chaque voyage. C'est pourquoi nous mettons tout en œuvre pour rendre votre expérience de réservation aussi agréable que votre séjour à Nelson. Notre équipe dévouée vous garantit des vols confortables, des tarifs compétitifs et un service personnalisé.
            </p>
            <button id="reserverVolBtn" onclick="ouvrirPageReservation('Nelson', 170.00)">
                <span>Réserver un vol</span>
            </button>
        </div>
    </div>

    <!-- Ajoutez un espace de 10 pixels entre les cartes -->
    <div style="margin-top: 10px"></div>

    <div class="description">
        <div class="Ville">
            <p class="titre">Wakanda - Vivez l'aventure au cœur des montagnes</p>
            <div class="gallery">
                <img src="../images/wanaka_1.jpg" alt="Wakanda lac et montagnes" />
                <img src="../images/wanaka_2.jpg" alt="Aventure à Wakanda" />
            </div>
            <p class="text_ville_1">
                Bienvenue au Wakanda, où les lacs scintillants entourent des sommets majestueux. Chez Alan Industry, nous vous invitons à vivre une aventure au cœur des montagnes, entre paysages époustouflants et activités palpitantes.
            </p>
            <p class="text_ville_2">
                Le Wankanda offre des possibilités infinies pour les amateurs de plein air, du ski en hiver à la randonnée en été. Détendez-vous au bord du lac, explorez les sentiers de montagne et découvrez la magie de cette destination néo-zélandaise.
            </p>
            <p class="text_ville_3">
                Chez Alan Industry, nous célébrons la diversité des destinations. Profitez de vols confortables, de tarifs compétitifs et d'un service personnalisé pour rendre votre séjour au Wakanda mémorable.
            </p>
            <button id="reserverVolBtn" onclick="ouvrirPageReservation('Wakanda', 109980970.00)">
                <span>Réserver un vol</span>
            </button>
        </div>
    </div>

    <!-- Ajoutez un espace de 10 pixels entre les cartes -->
    <div style="margin-top: 10px"></div>

    <div class="description">
        <div class="Ville">
            <p class="titre">Napier - Plongez dans l'histoire et le vin</p>
            <div class="gallery">
                <img src="../images/napier_1.jpg" alt="Napier architecture art déco" />
                <img src="../images/napier_2.jpg" alt="Dégustation de vin à Napier" />
            </div>
            <p class="text_ville_1">
                Bienvenue à Napier, où l'architecture Art déco rencontre les vignobles luxuriants. Chez Alan Industry, nous vous invitons à plonger dans l'histoire fascinante de cette ville et à déguster des vins exceptionnels dans un cadre pittoresque.
            </p>
            <p class="text_ville_2">
                Napier offre une atmosphère élégante avec ses bâtiments Art déco bien préservés. Explorez les vignobles environnants, dégustez des vins primés et découvrez la richesse culturelle de cette charmante destination néo-zélandaise.
            </p>
            <p class="text_ville_3">
                Chez Alan Industry, nous mettons tout en œuvre pour rendre votre expérience de réservation aussi agréable que votre séjour à Napier. Notre équipe dévouée vous garantit des vols confortables, des tarifs compétitifs et un service personnalisé pour que votre voyage soit mémorable.
            </p>
            <button id="reserverVolBtn" onclick="ouvrirPageReservation('Napier', 175.00)">
                <span>Réserver un vol</span>
            </button>
        </div>
    </div>
</section>
<section class="Islande" id="Islande">
    <div style="margin-top: 20px;"></div>
    <h1>Islande</h1>
    <div style="margin-top: 20px;"></div>
    <div class="description">
        <div class="Ville">
            <p class="titre">Reykjavik - Découvrez la capitale islandaise</p>
            <div class="gallery">
                <img src="../images/islande1.jpg" alt="Reykjavik de jour" />
                <img src="../images/islande2.jpg" alt="Reykjavik de nuit" />
            </div>
            <p class="text_ville_1">
                Bienvenue à Reykjavik, la capitale islandaise, où la nature rencontre la culture nordique moderne. Chez Alan Industry, nous vous invitons à explorer cette ville dynamique située entre mer et montagnes, offrant une expérience unique.
            </p>

            <p class="text_ville_2">
                Reykjavik, avec son architecture moderne et ses bains géothermiques, est le point de départ idéal pour découvrir les merveilles naturelles de l'Islande. Des aurores boréales aux geysers, en passant par les cascades majestueuses, chaque coin de l'Islande raconte une histoire fascinante.
            </p>

            <p class="text_ville_3">
                Chez Alan Industry, nous sommes fiers de vous offrir des vols vers l'Islande qui combinent confort, tarifs compétitifs et un service attentionné. Préparez-vous à vivre une aventure islandaise inoubliable.
            </p>
            <button id="reserverVolBtn" onclick="ouvrirPageReservation('Reykjavik', 200.00)">
                <span>Réserver un vol</span>
            </button>
        </div>
    </div>

    <!-- Ajoutez un espace de 10 pixels entre les cartes -->
    <div style="margin-top: 10px"></div>

    <!-- Akureyri -->
    <div class="description">
        <div class="Ville">
            <p class="titre">Akureyri - Explorez la perle du Nord</p>
            <div class="gallery">
                <img src="../images/islande3.jpg" alt="Akureyri de jour" />
                <img src="../images/islande4.jpg" alt="Akureyri de nuit" />
            </div>
            <p class="text_ville_1">
                Bienvenue à Akureyri, la perle du Nord, où les fjords majestueux rencontrent une atmosphère tranquille. Chez Alan Industry, nous vous invitons à découvrir le charme de cette ville pittoresque, porte d'entrée vers les paysages époustouflants de l'Islande septentrionale.
            </p>

            <p class="text_ville_2">
                Akureyri, avec ses jardins botaniques, ses églises historiques et ses festivals animés, offre une expérience relaxante au cœur de la nature islandaise. Explorez les environs, des montagnes aux sources chaudes, et laissez-vous imprégner par l'atmosphère unique de l'Islande.
            </p>

            <p class="text_ville_3">
                Chez Alan Industry, nous vous promettons un voyage vers Akureyri qui allie commodité, accessibilité et une immersion totale dans la beauté naturelle islandaise. Réservez votre vol dès maintenant et préparez-vous à vivre des moments magiques dans la perle du Nord.
            </p>
            <button id="reserverVolBtn" onclick="ouvrirPageReservation('Akureyri', 180.00)">
                <span>Réserver un vol</span>
            </button>
        </div>
    </div>

    <!-- Ajoutez un espace de 10 pixels entre les cartes -->
    <div style="margin-top: 10px"></div>

    <!-- Ville 3 -->
    <div class="description">
        <div class="Ville">
            <p class="titre">Ville 3 - Nom de la ville</p>
            <div class="gallery">
                <img src="../images/islande5.jpg" alt="Image de jour" />
                <img src="../images/islande6.jpg" alt="Image de nuit" />
            </div>
            <p class="text_ville_1">
                Description de la ville 3 - Bienvenue à Ville 3, où...
            </p>

            <p class="text_ville_2">
                Ville 3, avec ses caractéristiques uniques et ses attractions remarquables, offre une expérience inoubliable. Explorez les environs, des lieux emblématiques aux trésors cachés, et plongez-vous dans l'histoire captivante de cette ville.
            </p>

            <p class="text_ville_3">
                Chez Alan Industry, nous nous engageons à rendre votre voyage à Ville 3 aussi exceptionnel que possible. Profitez de nos vols confortables, de tarifs compétitifs et d'un service personnalisé pour une expérience de voyage incomparable.
            </p>
            <button id="reserverVolBtn" onclick="ouvrirPageReservation('Ville3', 170.00)">
                <span>Réserver un vol</span>
            </button>
        </div>
    </div>

    <!-- Ajoutez un espace de 10 pixels entre les cartes -->
    <div style="margin-top: 10px"></div>

    <!-- Ville 4 -->
    <div class="description">
        <div class="Ville">
            <p class="titre">Ville 4 - Nom de la ville</p>
            <div class="gallery">
                <img src="../images/islande7.jpg" alt="Image de jour" />
                <img src="../images/islande8.jpg" alt="Image de nuit" />
            </div>
            <p class="text_ville_1">
                Description de la ville 4 - Bienvenue à Ville 4, où...
            </p>

            <p class="text_ville_2">
                Ville 4, avec ses caractéristiques uniques et ses attractions remarquables, offre une expérience inoubliable. Explorez les environs, des lieux emblématiques aux trésors cachés, et plongez-vous dans l'histoire captivante de cette ville.
            </p>

            <p class="text_ville_3">
                Chez Alan Industry, nous nous engageons à rendre votre voyage à Ville 4 aussi exceptionnel que possible. Profitez de nos vols confortables, de tarifs compétitifs et d'un service personnalisé pour une expérience de voyage incomparable.
            </p>
            <button id="reserverVolBtn" onclick="ouvrirPageReservation('Ville4', 160.00)">
                <span>Réserver un vol</span>
            </button>
        </div>
    </div>

</section>

<section class="SystemeSolaire" id="Système solaire">
    <div style="margin-top: 20px;"></div>
    <h1>Système Solaire</h1>
    <div style="margin-top: 20px;"></div>
    <div class="description">
        <div class="Ville">
            <p class="titre">Jupiter - La géante gazeuse</p>
            <div class="gallery">
                <img src="../images/planete1.jpg" alt="Jupiter" />
                <img src="../images/planete2.jpg" alt="Jupiter" />
            </div>
            <p class="text_ville_1">
                Bienvenue sur Jupiter, la plus grande planète de notre système solaire, une géante gazeuse aux tourbillons mystérieux et aux tempêtes tumultueuses. Chez Alan Industry, nous vous invitons à explorer les secrets de cette planète majestueuse.
            </p>

            <p class="text_ville_2">
                Jupiter, avec son atmosphère dense et ses anneaux sublimes, offre un spectacle céleste incomparable. Découvrez les lunes fascinantes qui orbient autour de cette géante gazeuse et laissez-vous émerveiller par la grandeur de Jupiter.
            </p>

            <p class="text_ville_3">
                Chez Alan Industry, nous vous promettons un voyage interplanétaire exceptionnel. Profitez de nos vols spatiaux confortables, des tarifs compétitifs et d'un service personnalisé pour une exploration planétaire inoubliable.
            </p>
            <button id="reserverVolBtn" onclick="ouvrirPageReservation('Jupiter', 200.00)">
                <span>Réserver un vol</span>
            </button>
        </div>
    </div>

    <!-- Ajoutez un espace de 10 pixels entre les planètes -->
    <div style="margin-top: 10px;"></div>

    <div class="description">
        <div class="Ville">
            <p class="titre">Neptune - La mystérieuse géante glacée</p>
            <div class="gallery">
                <img src="../images/planete3.jpg" alt="Neptune" />
                <img src="../images/planete4.jpg" alt="Neptune" />
            </div>
            <p class="text_ville_1">
                Bienvenue sur Neptune, la mystérieuse géante glacée du système solaire, où des vents violents soufflent à travers son atmosphère bleue. Chez Alan Industry, plongez-vous dans l'exploration de cette planète lointaine et fascinante.
            </p>

            <p class="text_ville_2">
                Neptune, avec ses anneaux délicats et ses lunes énigmatiques, offre un spectacle céleste captivant. Découvrez les secrets de cette planète glacée, où l'obscurité de l'espace contraste avec la beauté hypnotique de Neptune.
            </p>

            <p class="text_ville_3">
                Chez Alan Industry, nous vous offrons une expérience spatiale unique. Embarquez pour un voyage vers Neptune avec nos vols spatiaux de pointe, des tarifs compétitifs et un service personnalisé pour une aventure interstellaire inoubliable.
            </p>
            <button id="reserverVolBtn" onclick="ouvrirPageReservation('Neptune', 180.00)">
                <span>Réserver un vol</span>
            </button>
        </div>
    </div>

    <!-- Ajoutez un espace de 10 pixels entre les planètes -->
    <div style="margin-top: 10px;"></div>

    <div class="description">
        <div class="Ville">
            <p class="titre">Mars - La planète rouge</p>
            <div class="gallery">
                <img src="../images/planete5.jpg" alt="Mars" />
                <img src="../images/planete6.jpg" alt="Mars" />
            </div>
            <p class="text_ville_1">
                Bienvenue sur Mars, la fascinante planète rouge, symbole de l'exploration planétaire humaine. Chez Alan Industry, plongez-vous dans les mystères de cette planète, connue pour ses déserts martiens et ses montagnes majestueuses.
            </p>

            <p class="text_ville_2">
                Mars, avec ses canyons profonds et ses calottes polaires, offre un terrain d'exploration unique. Découvrez les rovers qui parcourent la surface de Mars et imaginez-vous marchant sur cette planète rouge au cours de notre aventure spatiale.
            </p>

            <p class="text_ville_3">
                Chez Alan Industry, nous vous invitons à vivre l'exploration de Mars avec nos vols spatiaux exceptionnels, des tarifs compétitifs et un service personnalisé pour une aventure cosmique inoubliable.
            </p>
            <button id="reserverVolBtn" onclick="ouvrirPageReservation('Mars', 170.00)">
                <span>Réserver un vol</span>
            </button>
        </div>
    </div>

    <!-- Ajoutez un espace de 10 pixels entre les planètes -->
    <div style="margin-top: 10px;"></div>

    <div class="description">
        <div class="Ville">
            <p class="titre">Saturne - L'élégante aux anneaux</p>
            <div class="gallery">
                <img src="../images/planete7.jpg" alt="Saturne" />
                <img src="../images/planete8.jpg" alt="Saturne" />
            </div>
            <p class="text_ville_1">
                Bienvenue sur Saturne, la magnifique géante aux anneaux, une planète célèbre pour sa beauté spectaculaire. Chez Alan Industry, explorez l'élégance de cette planète, où des anneaux majestueux encerclent son atmosphère dorée.
            </p>

            <p class="text_ville_2">
                Saturne, avec ses lunes intrigantes et ses tempêtes tourbillonnantes, offre un spectacle céleste unique. Découvrez la complexité de ses anneaux et imaginez-vous flottant au milieu de cette merveille cosmique.
            </p>

            <p class="text_ville_3">
Chez Alan Industry, nous vous offrons une expérience exceptionnelle d'exploration de Saturne. Embarquez pour un voyage interplanétaire avec nos vols spatiaux de pointe, des tarifs compétitifs et un service personnalisé pour une aventure cosmique mémorable.
</p>
<button id="reserverVolBtn" onclick="ouvrirPageReservation('Saturne', 190.00)">
<span>Réserver un vol</span>
</button>

</div>
</div>
</section>

<script>
    function ouvrirPageReservation(destination, prix) {
      // Créez un objet pour stocker les détails du vol
      var volSelectionne = {
        destination: destination,
        prix: prix,
      };
  
      // Stockez les détails du vol dans le stockage local
      localStorage.setItem("volSelectionne", JSON.stringify(volSelectionne));
  
      // Redirigez l'utilisateur vers la page de panier
      window.location.href = "cart.php";
    }
  
    /* JS QUI DESCEND DE FOU LÀ */
  
    document.querySelectorAll('.pays').forEach(image => {
      image.addEventListener('click', () => {
  
        const targetId = image.alt;
  
        document.getElementById(targetId).scrollIntoView({
          behavior: 'smooth'
        });
      });
    });
  </script>
  

</body>
<footer>
    <iframe id="mentionFrame" src="mention.html" frameborder="0" scrolling="no" height="600px"></iframe>
</footer>
</html>