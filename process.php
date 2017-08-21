<?php

$pathTemp = "/home/nathaniel";
$info = $_POST['folder'];
$info();

function dossier() {
    global $pathTemp;

    $command = "ls " . $pathTemp;
    
    $liste_dossier = shell_exec($command);

    $tabl_dossier = preg_split('/\s+/', $liste_dossier);
    for ($i = 0; $i < count($tabl_dossier) - 1; $i++) {
        
        $pathDossier = $pathTemp . "/" . $tabl_dossier[$i];
        
        if (is_dir($pathDossier)) {
            echo "<div id='" . $tabl_dossier[$i] . "' class='folder ligne col-md-3' data-toggle='tooltip()' title='Ceci est un dossier' onclick='clickDossier(this.id)'><i class='fa fa-2x fa-folder-o'></i><p>${tabl_dossier[$i]}</p></div>";
        } 
        else{
            echo "<div id='" . $tabl_dossier[$i] . "' class='folder ligne col-md-3' data-toggle='tooltip()' title='Ce fichier a été mofifié le : " . date('F d Y H:i:s', filemtime($pathDossier))."' onclick='clickDossier(this.id)'><i class='fa fa-2x fa-file-o'></i><p>${tabl_dossier[$i]}</p></div>";
        }
    }
}

function testClickDossier() {
    global $pathTemp;

    $command = "ls " . $pathTemp . '/' . $_POST['dossier'];

    $liste_dossier = shell_exec($command);
    $tabl_dossier = preg_split('/\s+/', $liste_dossier);

    for ($i = 0; $i < count($tabl_dossier)-1; $i++) {
        
        $pathDossier = $pathTemp . '/'. $_POST['dossier']. "/" . $tabl_dossier[$i];
        
        if (is_dir($pathDossier)) {
            echo "<div id='" . $tabl_dossier[$i] . "' class='folder ligne col-md-3'onclick='clickDossier(this.id)'><i class='fa fa-2x fa-folder-o'></i><p>${tabl_dossier[$i]}</p></div>";
        } else {
            echo "<div id='" . $tabl_dossier[$i] . "' class='folder ligne col-md-3'onclick='clickDossier(this.id)'><i class='fa fa-2x fa-file-o'></i><p>${tabl_dossier[$i]}</p></div>";
        }
    }
}

function refreshInput() {
    
    $repertoire = $_POST['repertoire'];
    $command = $repertoire.'/'.$_POST['dossier'];
    
    echo '<p>'.$command.'<p/>';
    
    
}

?>
