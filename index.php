<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Projet05 Exercice06</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid col-11 p-3 m-4 border border-warning rounded justify-content-center">
        <div class="row ">
            <h1 class="col-12 text-secondary text-center">PHP Projet05 Exercice06</h1>
            <h2 class="col-12 text-info text-center">Créez un lien avec les paramètres "langage", "serveur" dirigeant sur une autre page. 
            Vérifiez si les paramètres existent, si oui affichez les sinon affichez une un message d'erreur. 
            Vous devez empêchez l'inclusion de balises html dans les paramètres.</h2>
        </div>
        <div class="row border border-primary rounded p-3 m-4 text-secondary justify-content-center">
            <a href="index02.php?langage=PHP&amp;serveur=LAMP">cliquez pour être redirigé vers une page qui affiche les paramètre '\serveur'\ et '\langage'\ : </a>
        </div>
    </div>
</body>
</html>