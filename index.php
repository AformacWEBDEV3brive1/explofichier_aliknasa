<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Explorateur de fichier</title>

        <!-- libaries css-->
        <link type="text/css" rel="stylesheet" href="libraries/bootstrap/css/bootstrap.css">
        <link type="text/css" rel="stylesheet" href="libraries/font-awesome-4.7.0/css/font-awesome.css">

        <!-- libraries js -->  
        <script type="text/javascript" src="libraries/tether-1.3.3/dist/js/tether.js"></script>
        <script type="text/javascript" src="libraries/jquery-3.2.1.js"></script>     
        <script type="text/javascript" src="libraries/bootstrap/js/bootstrap.js"></script> 

        <!-- custom css  -->
        <link rel="stylesheet" href="style.css">

        <!-- custom js  -->
        <script type="text/javascript" src="script.js"></script>
    </head>
    <body>
        <div class="container">
            <header>
                <form>
                    <input type="button" value="HOME" onclick="window.location.reload(false)">
                </form>
                <h1>Votre explorateur de fichiers</h1>
            </header>
            <div>
                <div>
                    <div class="row">
                        <input type="text" name="position" class="inputUn offset-md-2 col-md-8"/>
                       
                        <input type="text" name="position" placeholder="/home/boul" class="offset-md-2 col-md-8"/>
                    </div><br>
                    <div id="dossier" class="row">
                        <!--liste des fichiers/dossiers-->
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
