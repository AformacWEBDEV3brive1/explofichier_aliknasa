<?php


$fctn = $_POST['fonction'];
$fctn();

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