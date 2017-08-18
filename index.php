<!doctype html>

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
        <header class="container">
            <h1>Votre explorateur de fichiers</h1>
        </header>
        <div class="container">
            <div class="row">
                <input method="post" type="text" name="position" placeholder="/home/boul" class="offset-md-1 col-md-8">
            </div><br>
        	<div id="dossier" class="row">
            	<!--liste des fichiers/dossiers-->
        	</div>
       		 <div id="testClickDossier">
        		<!-- TEST CLICK DOSSIER -->
        		<div id="dos1" class="row bgBleu" onclick="clickDossier(this.id)"><i id="i1" class="fa fa-folder-open fa-3x bgVert"></i><br/><p id="p1" class="bgRouge">Dossier1</p></div>
        		<div id="dos2" class="row bgBleu" onclick="clickDossier(this.id)"><i id="i2" class="fa fa-folder-open fa-3x bgVert"></i><p id="p2" class="bgRouge">Dossier2</p></div>
        		<div id="dos3" class="row bgBleu" onclick="clickDossier(this.id)"><i id="i3" class="fa fa-folder-open fa-3x bgVert"></i><p id="p3" class="bgRouge">Dossier3</p></div>
        		<div id="dos4" class="row bgBleu" onclick="clickDossier(this.id)"><i id="i4" class="fa fa-folder-open fa-3x bgVert"></i><p id="p4" class="bgRouge">Dossier4</p></div>
        		<div id="dos5" class="row bgBleu" onclick="clickDossier(this.id)"><i id="i5" class="fa fa-folder-open fa-3x bgVert"></i><p id="p5" class="bgRouge">Dossier5</p></div>
        		<div id="dos6" class="row bgBleu" onclick="clickDossier(this.id)"><i id="i6" class="fa fa-folder-open fa-3x bgVert"></i><p id="p6" class="bgRouge">Dossier6</p></div>
        	</div>
        	<div>
            	<!--boutton retour-->
        	</div>
 		</div>
    </body>
</html>

