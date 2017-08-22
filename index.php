<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Explorateur de fichiers</title>

        <!-- libraries css-->
        <link type="text/css" rel="stylesheet" href="libraries/bootstrap/css/bootstrap.css">
        <link type="text/css" rel="stylesheet" href="libraries/font-awesome-4.7.0/css/font-awesome.css">
        <link type="text/css" rel="stylesheet" href="libraries/animate.css">
        <link type="text/css" rel="stylesheet" href="libraries/hover-min.css">

        <!-- libraries js -->  
        <script type="text/javascript" src="libraries/tether-1.3.3/dist/js/tether.js"></script>
        <script type="text/javascript" src="libraries/jquery-3.2.1.js"></script>     
        <script type="text/javascript" src="libraries/bootstrap/js/bootstrap.js"></script> 

        <!-- custom css  -->
        <link rel="stylesheet" href="style.css">

        <!-- custom js  -->
        <script type="text/javascript" src="script.js"></script>
    </head>
    <body onload="demander()">
        <div class="container">
            <header>
                <form>
                    <input class="animated fadeInDown" id ="retour" type="button" value="Retour" onclick="clickRetour()">
                    <input class="animated fadeInDown" type="button" value="ajout fichier" onclick="creation()">
                </form>
                <h1 class="animated fadeInDownBig">Votre explorateur de fichiers</h1>
            </header>
            <div>

                <div class="animated fadeInDown row">
                    <p class="col-2 home">/home/</p>
                    <input type="text" name="position" class="inputUn col-7 "/>
                    <input type="submit" class="col-2" value="envoyer" onclick="envoyer()">
                </div>
                <div id="repertoireCourant" class="animated fadeInDown chemin"></div>
                <div id="dossier" class="row">
                    <!--liste des fichiers/dossiers-->
                </div>

            </div>
        </div>
    </body>
</html>
