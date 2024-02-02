<?php

include 'connect.php';

$nom = $_POST["nom"];
$quantite = $_POST["quantite"];
$pass = $_POST["pass"];
$jours = $_POST["jour"];
$commentaire = $_POST["commentaire"];

$requete = "INSERT INTO reservations (nom_reservation, type_pass, jour, quantite, commentaire) VALUES ";

foreach ($jours as $jour) {
    $requete .= "('$nom', '$pass', '$jour', '$quantite', '$commentaire'), ";
}

$requete = rtrim($requete, ', ');
if ($conn->query($requete) === true) {
    foreach ($jours as $jour) {
        $update_quantite = "UPDATE jours_festival SET capacite = capacite - $quantite WHERE jour = '$jour'";
        $conn->query($update_quantite);
    }
    
}
else{
    echo "Erreur lors de l'enregistrement : " . $conn->connect_error;
}

$conn->close();

header("Location: ok.html");
exit();
?>