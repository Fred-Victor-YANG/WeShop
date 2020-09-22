<!-- **************************************** -->
<!-- Traitement du formulaire                 -->  
<?php
session_start();
$_SESSION["connection"] = "offline";
// la variable $affichage contiendra le contenu saisi dans le formulaire
$affichage = "";

// la variable $errormsg contiendra l'éventuel message d'erreur à afficher
$errormsg = "";

// initialisation des variables utilisées pour remplir le formulaire
$name = '';
$pswd = '';

// Connexion à la base cuicui du serveur localhost
$connection = @mysqli_connect("localhost", "root", "", "chat");

if ($connection) {
    // Changement du jeu de caractères pour utf-8    
    mysqli_set_charset($connection, "utf8");
} else {
    $errormsg .= "Erreur de connection<br>";
    $errormsg .= "  Erreur n° " . mysqli_connect_errno() . " : " . mysqli_connect_error() . "<br>";
}

if (isset($_POST['connection'])) {

    //***************************
    // Bouton "S'inscrire" de valeur name="inscrire"
    // Traitement du formulaire
    // 
    // Filtrage du contenu de $_POST et assignation à des variables locales
    // htmlspecialchars() : Convertit les caractères spéciaux en entités HTML
    // trim() : Supprime les espaces (ou d'autres caractères) en début et fin de chaîne
    // nl2br() : Insère un retour à la ligne HTML à chaque nouvelle ligne
    $name = trim(htmlspecialchars($_POST['name']));
    $pswd = trim(htmlspecialchars($_POST['password']));

    // Vérification de toutes les valeurs saisies

    if (empty($name)) {
        $errormsg .= "no name<br>\n";
    } elseif (strlen($name) > 100 || strlen($name) < 2) {
        $errormsg .= "change your name<br>\n";
    } elseif (!preg_match('/^([[:alpha:]]|-|[[:space:]]|\')*$/u', $nom)) {
        // [[:alpha:]] : caractères alphabétique
        // [[:space:]] : espace blanc
        $errormsg .= "    Le nom ne doit comporter que des lettres<br>\n";
    }

    if (empty($pswd)) {
        $errormsg .= "    Le mot de passe est obligatoire<br>\n";
    } elseif (strlen($pswd) < 6) {
        $errormsg .= "    Le mot de passe doit contenir au moins 8 caract�res<br>\n";
    } elseif (!preg_match('/^[[:graph:]]*$/u', $pswd)) {
        // [[:graph:]] : tous les caract�res imprimables sauf l'espace
        $errormsg .= "    Le mot de passe ne doit pas comporter d'espaces<br>\n";
    }


    // Si aucun message d'erreur
    if (empty($errormsg)) {
        //*******************************************
        // Saisie dans la table utilisateur
        // après verification que le pseudo et le mail n'existent 
        // pas déjà dans la table
        // 
        // Vérification que le pseudo n'existe pas dans la table


        $requete = "SELECT * FROM admin WHERE Name = '$name' and Password = '$pswd' ";
        $resultat = mysqli_query($connection, $requete);
        if (!$resultat) {
            $errormsg .= "Erreur de la requête $requete<br>";
            $errormsg .= "  Erreur n° " . mysqli_errno($connection) . " : " . mysqli_error($connection) . "<br>";
        } else {
            // Nombre de lignes du résultat de la requête
            $nbligne = mysqli_num_rows($resultat);

            // Si aucun message d'erreur
            if (empty($errormsg) & $nbligne != 0) {
                $_SESSION["connection"] = "online";
                echo '<script>console.log("session setted")</script>';
                //header("refresh:0;url=welcome.html"); //???????welcome.html??
            }
            
        }
    }

    // Si aucun message d'erreur
    if (empty($errormsg)) {
        // Affiche un message de confirmation ainsi que les valeurs saisies
        $affichage .= "    <p>Nous avons pris en compte votre connexion.</p>\n";
        $affichage .= "    Voici les données saisies :\n    <ul>\n";
        $affichage .= "      <li>Nom : " . $name . "</li>\n";
        $affichage .= "      <li>Mot de passe : " . $pswd . "</li>\n";
        if ($abo_newsletter == 1) {
            $affichage .= "Oui</li>\n";
        } else {
            $affichage .= "Non</li>\n";
        }
        $affichage .= "      <li>Commentaire : ";
        if (empty($commentaire)) {
            $affichage .= "Aucun</li>\n";
        } else {
            $affichage .= "<br>" . $commentaire . "</li>\n";
        }
        $affichage .= "    </ul>\n";
    }
}

// Déconnection
if ($connection) {
    $deconnection_reussie = mysqli_close($connection);
    if (!$deconnection_reussie) {
        $errormsg .= "Erreur de deconnection<br>";
    } else {
        $affichage .= "Déconnection réussie";
    }
}
?> 

<!-- **************************************** -->
<!-- Construction de la page HTML             -->  
<!DOCTYPE html>
<html>
    <head>
        <title>Inscription3</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="semantic.min.css">
        <style>
            .main.container {
                margin-top: 4em;
            }
        </style>
    </head>
    <body>
        <div class="ui inverted fixed menu">
            <div class="ui item">&nbsp;</div>  
            <div class="item right">&nbsp;</div>
        </div>
        <div class="ui main text container">

            <!-- **************************************** -->
            <!-- Messages éventuels de l'application      -->
            <?php
            if (!empty($errormsg) || !empty($affichage)) {
                ?>
                <div class="ui segment">
                    <h1 class="ui header"> Logs </h1>
                    <div id="logs">
                        <?php
                        if (!empty($errormsg)) {
                            echo '<div class="ui red message">' . $errormsg . '</div>';
                        }
                        if (!empty($affichage)) {
                            echo '<div class="ui green message">' . $affichage . '</div>';
                        }
                        ?>
                    </div>                
                </div>
                <script></script>
                <?php
            }
            ?>   
            <!-- **************************************** -->
            <!-- Affichage du formulaire                  -->
            <?php
// S'il y a eu des erreurs ou si aucun appui sur le bouton "S'incrire"
            if (!empty($errormsg) || !(isset($_POST['connection']))) {
                ?> 

            </div>
            <?php
        }
        echo "this value : ". $_SESSION["connection"] ." is the session now ";
        ?> 
    </body>
</html>