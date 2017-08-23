<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

//$pathTemp = "/home/boul";
$info = $_POST['folder'];
$info();

function echoGenerique($tabl_dossier, $pathDossier, $i, $d) {



    if (is_dir($pathDossier)) {
        echo "<div id='" . $tabl_dossier[$i] . "' class='animated fadeInDown folder ligne col-md-3' style='animation-delay:" . $d . "s;' data-toggle='tooltip()' title='Ceci est un dossier' onclick='clickDossier(this.id)'><i class='fa fa-2x fa-folder-o'></i><p>" . $tabl_dossier[$i] . "</p></div>";
    } else {
        echo "<div id='" . $tabl_dossier[$i] . "' class='animated fadeInDown folder ligne col-md-3' style='animation-delay:" . $d . "s;' data-toggle='tooltip()' title='Ce fichier a été mofifié le : " . date('F d Y H:i:s', filemtime($pathDossier)) . "'><i class='fa fa-2x fa-file-o'></i><span class=' fa fa-pencil-square-o btnRennomer'style='animation-delay:" . $d . "s;' data-toggle='tooltip()' title='Renommer' onclick='renommer(this.parentNode.id)'></span><span class='btnSuppression fa fa-trash-o' aria-hidden='true' btnRennomer'style='animation-delay:" . $d . "s;' data-toggle='tooltip()' title='Supprimer'   onclick='suppression(this.parentNode.id)'></span><p>" . $tabl_dossier[$i] . "</p></div>";
    }
}

function dossier() {
    $pathTemp = "/home/" . $_POST['user'];

    //$command = "ls " . $pathTemp;
    //$liste_dossier = shell_exec($command);
    //$tabl_dossier = preg_split('/\s+/', $liste_dossier);


    if (is_dir($pathTemp) == true) {
        $tabl_dossier = scandir($pathTemp);
        /* Il y a un delai de 3 secondes par default donc on démarre a -3 pour que l'animation se déclenche au chargement de la page */
        $d = 0;

        for ($i = 0; $i < count($tabl_dossier); $i++) {

            $pathDossier = $pathTemp . "/" . $tabl_dossier[$i];
            if ($tabl_dossier[$i][0] != '.') {

                $d = $d + 0.1;
                echoGenerique($tabl_dossier, $pathDossier, $i, $d);
            }
        }
    } else {
        echo "Nom d'utilisateur invalide";
    }
}

function envoyer() {
    $doss = "/home/" . $_POST['nameFolder'];
    if (is_dir($doss) == true) {
        $tabl_dossier = scandir($doss);

        $d = 0;
        for ($i = 0; $i < count($tabl_dossier); $i++) {



            $pathDossier = $doss . '/' . $tabl_dossier[$i];

            if ($tabl_dossier[$i][0] != '.') {

                $d = $d + 0.1;
                echoGenerique($tabl_dossier, $pathDossier, $i, $d);
            }
        }
    } else {
        echo "Nom de dossier invalide";
    }

    /* try{
      $dossier = scandir($doss);
      echo $dossier;
      }
      catch (Exception $e){
      echo "Mauvais nom de dossier";
      //echo $e->getMessage();
      } */
}

function testClickDossier() {
    //global $pathTemp;
    //$command = "ls " . $_POST['repertoire'] . '/' . $_POST['dossier'];
    //$liste_dossier = shell_exec($command);
    //$tabl_dossier = preg_split('/\s+/', $liste_dossier);

    $tabl_dossier = scandir($_POST['repertoire'] . '/' . $_POST['dossier']);
    $d = 0;
    for ($i = 0; $i < count($tabl_dossier); $i++) {

        $pathDossier = $_POST['repertoire'] . '/' . $_POST['dossier'] . "/" . $tabl_dossier[$i];

        if ($tabl_dossier[$i][0] != '.') {

            $d = $d + 0.1;
            echoGenerique($tabl_dossier, $pathDossier, $i, $d);
        }
    }
}

function refreshInput() {

    $repertoire = $_POST['repertoire'];
    $command = $repertoire . '/' . $_POST['dossier'];
    //print_r($command);
    echo '<p>' . $command . '<p/>';
}

function creation() {
    $element = $_POST["dossier"];
    $repert = $_POST['repertoire'];
    $command = shell_exec('touch ' . $_POST['repertoire'] . '/' . $element . '.txt' . ' 2>&1');
    //print_r('touch '.$_POST['repertoire'].'/'.$element. '.txt');
    //print_r($command);
    //print_r(shell_exec("whoami"));

    $tabl_dossier = scandir($_POST['repertoire']);
    $d = 0;
    for ($i = 0; $i < count($tabl_dossier); $i++) {

        $pathDossier = $_POST['repertoire'] . '/' . $tabl_dossier[$i];

        if ($tabl_dossier[$i][0] != '.') {

            $d = $d + 0.1;
            echoGenerique($tabl_dossier, $pathDossier, $i, $d);
        }
    }
}

function renommer() {
    $command = shell_exec('mv ' . $_POST['fichier'] . ' ' . $_POST['nom']);

    $tabl_dossier = scandir($_POST['repertoire']);

    for ($i = 0; $i < count($tabl_dossier); $i++) {

        $pathDossier = $_POST['repertoire'] . '/' . $tabl_dossier[$i];

        echoGenerique($tabl_dossier, $pathDossier, $i);
    }
}

function suppression() {
    $command = shell_exec('rm ' . $_POST['fichier']);

    $tabl_dossier = scandir($_POST['repertoire']);
    $d = 0;
    for ($i = 0; $i < count($tabl_dossier); $i++) {

        $pathDossier = $_POST['repertoire'] . '/' . $tabl_dossier[$i];

        if ($tabl_dossier[$i][0] != '.') {

            $d = $d + 0.1;
            echoGenerique($tabl_dossier, $pathDossier, $i, $d);
        }
    }
}

function clickRetour() {

    $tabl_dossier = scandir($_POST['repertoire']);
    $d = 0;
    for ($i = 0; $i < count($tabl_dossier); $i++) {

        $pathDossier = $_POST['repertoire'] . '/' . $tabl_dossier[$i];

        if ($tabl_dossier[$i][0] != '.') {

            $d = $d + 0.1;
            echoGenerique($tabl_dossier, $pathDossier, $i, $d);
        }
    }
}

function getOS()
{
    echo PHP_OS;
}

?>

