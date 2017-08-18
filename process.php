<?php

$info = $_POST['folder'];
$info();

$fctn = $_POST['fonction'];
$fctn();

function dossier() {
    $liste_dossier = shell_exec('ls /home/nathaniel');
    $tabl_dossier = preg_split('/\s+/', $liste_dossier);
    for ($i=0 ; $i < count($tabl_dossier)-1 ; $i++) {
        echo "<div class='folder ligne col-md-2'><i class='fa fa-2x fa-folder-o'></i><p>${tabl_dossier[$i]}</p></div>";
    }
}

function testClickDossier()
{
    //echo "L'id a été traité par le serveur: " . $_POST['dossier'];
    
    $path = "ls /home/" . $_POST['dossier'];
    
    $output = shell_exec($path);
    $resultat = preg_split('/\s+/', $output);
    
    for($compteur=0; $compteur< count($resultat); $compteur++)
    {
            echo '<div class="justify-content-center align-items-end">
                    <div class="row col-4 offset-4 fondBleu" onclick="testalert()">
                <i class="fa fa-folder-open fa-3x"></i><p class="tabulation">'
                . $resultat[$compteur] . "</p></div></div>";
    }
}

?>
