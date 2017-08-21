<?php

$pathTemp = "/home/omeagazord";
$info = $_POST['folder'];
$info();

function envoyer() {
    $doss = "/home/".$_POST['nameFolder'];
    echo $doss;
    $dossier = scandir($doss);
    for ($i = 2; $i < count($dossier); $i++) {
        
        $pathDossier = $doss . '/'.$dossier[$i];
        if (is_dir($pathDossier)) {
            echo "<div id='" . $dossier[$i] . "' class='folder ligne col-md-3'onclick='clickDossier(this.id)'><i class='fa fa-2x fa-folder-o'></i><p>${dossier[$i]}</p></div>";
        } else {
            echo "<div id='" . $dossier[$i] . "' class='folder ligne col-md-3'onclick='clickDossier(this.id)'><i class='fa fa-2x fa-file-o'></i><p>${dossier[$i]}</p></div>";
        }
    }
    
}

function dossier() {
    global $pathTemp;

    //$command = "ls " . $pathTemp;
    //$liste_dossier = shell_exec($command);
    //$tabl_dossier = preg_split('/\s+/', $liste_dossier);
    
    $tabl_dossier = scandir($pathTemp);
    
    for ($i = 2; $i < count($tabl_dossier); $i++) {
        
        $pathDossier = $pathTemp . "/" . $tabl_dossier[$i];
        
        if (is_dir($pathDossier)) {
            echo "<div id='" . $tabl_dossier[$i] . "' class='folder ligne col-md-3' data-toggle='tooltip()' title='Ceci est un dossier' onclick='clickDossier(this.id)' onclick='clickDossier(this.id)'><i class='fa fa-2x fa-folder-o'></i><p>${tabl_dossier[$i]}</p></div>";
        } 
        else{
            echo "<div id='" . $tabl_dossier[$i] . "' class='folder ligne col-md-3' data-toggle='tooltip()' title='Ce fichier a été mofifié le : " . date('F d Y H:i:s', filemtime($pathDossier))."'><i class='fa fa-2x fa-file-o'></i><p>${tabl_dossier[$i]}</p></div>";
        }
    }
}

function testClickDossier() {
    //global $pathTemp;
    //$command = "ls " . $_POST['repertoire'] . '/' . $_POST['dossier'];
    //$liste_dossier = shell_exec($command);
    //$tabl_dossier = preg_split('/\s+/', $liste_dossier);
    
    $tabl_dossier = scandir($_POST['repertoire'] . '/' . $_POST['dossier']);

    for ($i = 2; $i < count($tabl_dossier); $i++) {
        
        $pathDossier = $_POST['repertoire'] . '/'. $_POST['dossier']. "/" . $tabl_dossier[$i];
        
        if (is_dir($pathDossier)) {
            echo "<div id='" . $tabl_dossier[$i] . "' class='folder ligne col-md-3' data-toggle='tooltip()' title='Ceci est un dossier' onclick='clickDossier(this.id)' onclick='clickDossier(this.id)'><i class='fa fa-2x fa-folder-o'></i><p>${tabl_dossier[$i]}</p></div>";
        } else {
            echo "<div id='" . $tabl_dossier[$i] . "' class='folder ligne col-md-3' data-toggle='tooltip()' title='Ce fichier a été mofifié le : " . date('F d Y H:i:s', filemtime($pathDossier))."'><i class='fa fa-2x fa-file-o'></i><p>${tabl_dossier[$i]}</p></div>";
        }
    }
}     

function refreshInput() {
    
    $repertoire = $_POST['repertoire'];
    $command = $repertoire.'/'.$_POST['dossier'];
    
    echo '<p>'.$command.'<p/>';
}

function clickRetour() {
    
    $tabl_dossier = scandir($_POST['repertoire']);
    
    for ($i = 2; $i < count($tabl_dossier); $i++) {
        
        $pathDossier = $_POST['repertoire'] . '/'. $tabl_dossier[$i];
        
        if (is_dir($pathDossier)) {
            echo "<div id='" . $tabl_dossier[$i] . "' class='folder ligne col-md-3'onclick='clickDossier(this.id)'><i class='fa fa-2x fa-folder-o'></i><p>${tabl_dossier[$i]}</p></div>";
        } else {
            echo "<div id='" . $tabl_dossier[$i] . "' class='folder ligne col-md-3'><i class='fa fa-2x fa-file-o'></i><p>${tabl_dossier[$i]}</p></div>";
        }
    }
}
?>
