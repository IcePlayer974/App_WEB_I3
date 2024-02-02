<?php
include 'connect.php';

$login = $_POST["login"];
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$mot_de_passe = $_POST["mot_de_passe"];

$mdp_chiffré = md5($mot_de_passe);

$requete = "INSERT INTO autentification (login, nom, prenom, mot_de_passe) VALUES ('$login', '$nom', '$prenom', '$mdp_chiffré') ";

$requete = rtrim($requete, ', ');
if ($conn->query($requete) === true) {
    }
else{
    echo "Erreur lors de l'inscription : " . $conn->connect_error;
    header("Location: index.html");
}

$conn->close();

header("Location: inscription=ok.html");
exit();
?>