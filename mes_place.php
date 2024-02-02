<!DOCTYPE html> 
<html lang="fr">
    <head>
      <!--code phpmyadmin : id root, mdp: ibFSU1ad2HEGB0Mu ;-->
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CyberGroove Festival</title>
        <link rel="stylesheet" type="text/css" href="main.css"/>
        <script type="text/javascript" src="script.js"></script>
        <link href="https://fonts.cdnfonts.com/css/manaspace" rel="stylesheet"> 
        <!--font-family: 'Manaspace', sans-serif;-->
        <link href="https://fonts.cdnfonts.com/css/disengaged" rel="stylesheet">
        <!--font-family: 'Disengaged', sans-serif;-->        
        <link href="https://fonts.cdnfonts.com/css/house-on-mars" rel="stylesheet">
        <!--font-family: 'House On Mars', sans-serif;-->  
        <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>              
    </head>
    <body>
    <div class="presentation"> 
        <a id="btn_acceuil" href="index.html"><h1>CYBER_GROOVE</h1></a>
    </div>
    <hr/>
    <nav>
        <a href="index.html">Acceuil</a>
        <a href="Formulaire.html">Formulaire</a>
        <a href="disponibilite.php">Place Disponible</a>
        <a href="mes_places.php">Mes reservations</a>
        <a href="#mail">Contact</a>
    </nav>
    <br/>
    <form id="reservation-form" action="mes_place.php" method="post">
        <label for="nom">Entré votre nom:</label>
        <input type="text" id="nom" name="nom" maxlength="64"required>
    </form>
<?php
include 'connect.php';

$nom_utilisateur = $_POST['nom'];

// Préparer la requête SQL
$sql = "SELECT * FROM reservations WHERE nom_reservation = '$nom_utilisateur'";

// Exécuter la requête et récupérer les résultats
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>Nom de réservation</th>
                <th>Type de passe</th>
                <th>Jour de réservation</th>
                <th>Quantité</th>
                <th>Commentaire</th>
            </tr>";

    // Afficher les réservations dans un tableau HTML
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['nom_reservation'] . "</td>";
        echo "<td>" . $row['type_pass'] . "</td>";
        echo "<td>" . $row['jour'] . "</td>";
        echo "<td>" . $row['quantite'] . "</td>";
        echo "<td>" . $row['commentaire'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Aucune réservation trouvée pour le nom d'utilisateur : $nom_utilisateur\n";
}

$conn->close();

?>

<br/> 
    </body>
    <footer>
      <hr/>
        <a href="mailto:julien.delplanque@etu.unilasalle.fr" ><img id="mail" src="./image/mail-black-envelope-symbol_icon-icons.com_56519.png"/></a>
        <a href="tel:0782666299"><img id="telephone" src="./image/telephone.png"/></a>
        <a href="https://twitter.com/JulienDelpq" target="_blank"><img id="twitter" src="./image/1690643591twitter-x-logo-png.webp"/></a>
        <a href="https://www.instagram.com/delplanque.julien/" target="_blank"><img id="insta" src="./image/insta.png"/></a>
    </footer>
</html>