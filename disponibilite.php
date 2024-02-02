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
        <a href="Choix.html">Login</a>
        <a href="#mail">Contact</a>
    </nav>
    <br/>
    <table>
        <tr>
            <th>Jours</th>
            <th>Place Maximale</th>
            <th>Place Restante</th>
        </tr>
        <tr>
            <td>Vendredi</td>
            <td>10000</td>
            <td>
                <?php
                include 'connect.php';
                $requete = "SELECT capacite FROM jours_festival WHERE jour = 'vendredi'";
                $resultat = $conn->query($requete);
                if ($resultat) {
                    $row = $resultat->fetch_assoc();
                    echo $row['capacite'];
                } else {
                    echo "Erreur lors de l'exécution de la requête : " . $conn->error;
                }
                $conn->close();
                ?>
            </td>
        </tr>
        <tr>
            <td>Samedi</td>
            <td>18000</td>
            <td>
                <?php
                include 'connect.php';
                $requete = "SELECT capacite FROM jours_festival WHERE jour = 'samedi'";
                $resultat = $conn->query($requete);
                if ($resultat) {
                    $row = $resultat->fetch_assoc();
                    echo $row['capacite'];
                } else {
                    echo "Erreur lors de l'exécution de la requête : " . $conn->error;
                }
                $conn->close();
                ?>
            </td>

        </tr>
        <tr>
            <td>Dimanche</td>
            <td>25000</td>
            <td>
                <?php
                include 'connect.php';
                $requete = "SELECT capacite FROM jours_festival WHERE jour = 'dimanche'";
                $resultat = $conn->query($requete);
                if ($resultat) {
                    $row = $resultat->fetch_assoc();
                    echo $row['capacite'];
                } else {
                    echo "Erreur lors de l'exécution de la requête : " . $conn->error;
                }
                $conn->close();
                ?>
            </td>

        </tr>
</table>


    <footer>
      <hr/>
        <a href="mailto:julien.delplanque@etu.unilasalle.fr" ><img id="mail" src="./image/mail-black-envelope-symbol_icon-icons.com_56519.png"/></a>
        <a href="tel:0782666299"><img id="telephone" src="./image/telephone.png"/></a>
        <a href="https://twitter.com/JulienDelpq" target="_blank"><img id="twitter" src="./image/1690643591twitter-x-logo-png.webp"/></a>
        <a href="https://www.instagram.com/delplanque.julien/" target="_blank"><img id="insta" src="./image/insta.png"/></a>
    </footer>
    </body>
</html>