<?php
include 'connect.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
$login = $_POST["login"];
$mot_de_passe = $_POST["mot_de_passe"];

$mdp_chiffré = md5($mot_de_passe);

$requete= "SELECT nom, login FROM autentification WHERE login = '$login' AND mot_de_passe ='$mdp_chiffré'";
$resultat_requete = $conn->query($requete);

if ($resultat_requete->num_rows == 1){
    $user = $resultat_requete->fetch_assoc();
    $_SESSION['nom'] = $user['nom'];
    $_SESSION['login'] = $user['login'];
}
else{
    echo "Erreur lors de la connexion : " . $conn->connect_error;
    $conn->close();
    header("Location: index.html");
}

$conn->close();

header("Location: mes_place.php");


}
?>