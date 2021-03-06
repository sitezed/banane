<?php include_once('pdo.inc.php'); ?><!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Les drones</title>
    <link rel="stylesheet" href="styles/style.css" type="text/css">
</head>
<body style="height:5000px;">
<h1 data-id-article='10' id="titre">Les drones de plus en plus présents</h1>

<div class="article clearfix">
    <img src="photos/drone.jpg" alt="drone volant" id="images_toto"/>

    <p id="texte">Un drone (de l'anglais « faux-bourdon »), également appelé UAV (pour Unmanned Aerial Vehicle),
        ou encore RPAS (Remotely Piloted Aircraft Systems), est un aéronef sans personne à bord,
        télécommandé ou autonome, qui peut éventuellement emporter une charge utile,
        destinée à des missions (ex. : de surveillance, de renseignement, d'exploration,
        de combat, de transport, etc.). Les drones ont d'abord SALUT été utilisés au profit
        des forces armées ou de sécurité — police, douane, etc. — d'un État, mais ont aussi
        des applications civiles (Cinéma, télévision, agriculture, environnement) ou cinématographiques1.</p>
</div>

<div id="formulaire" class="rectangle_formulaire">
    <form method="POST" action="recherche">
        <div class="destination">
            <select name="departement" class="ville" data-language="fr" title="Département">
            <option class="option" value=""> Villes </option>
                <option value="Paris"> Drone </option>
                <option value="Marseille"> Danse </option>
                <option value="Lyon"> Foot </option>
                <option value="Bordeau"> Musique </option>
                <option value="Toulouse"> Pokemon </option>
            </select>
        </div>
    </form>
</div>

<button id="monBouton">Clic</button>

<div class="reaction">
    <p class="etiquette">3 commentaire(s) Laissez le vôtre ! :)</p>

    <form method="POST" action="">
        <div class="saisie">
            <div class="user clearfix">
                <div class="prenom">
                    <label for="prenom">Votre prénom</label>
                    <input id="prenom" type="text" />
                </div>
                <div class="email">
                    <label for="email">Votre email</label>
                    <input id="email" type="text" />
                </div>
            </div>
            <label for="commentaire">Commentaire</label>
            <textarea id="commentaire"></textarea>
        </div>
        <p class="etiquette">
            <button type="reset">EFFACER</button>
            <button type="submit">ENVOYER</button>
        </p>
    </form>
</div>
<div class="separation"></div>

    <div id="commentaire_1" class="commentaire">
        <p class="pseudo">Romain
            <span class="date">Publié le 17/02/2015 à 19:16</span></p>

        <p class="texte">Vivement la commercialisation de ces joujoux ! :p</p>
    </div>
    <div id="commentaire_2" class="commentaire">
        <p class="pseudo">Arnaud
            <span class="date">Publié le 19/02/2015 à 09:10</span></p>

        <p class="texte">Pff... Encore des espions à nos trousses !</p>
    </div>
    <div id="commentaire_3" class="commentaire">
        <p class="pseudo">Zakir
            <span class="date">Publié le 20/02/2015 à 14:00</span></p>

        <p class="texte">@Arnaud. Arrête d'être parano ! :)</p>
    </div>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js" ></script>
<script src="js/gestion_article.js"></script>



</body>
</html>