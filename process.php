<?php

$info = $_POST['folder'];
$info();

function dossier() {

    $liste_dossier = shell_exec('ls /home/nathaniel');

    $tabl_dossier = preg_split('/\s+/', $liste_dossier);
    for ($i = 0; $i < count($tabl_dossier) - 1; $i++) {
        if (is_dir("/home/nathaniel/" . $tabl_dossier[$i])) {
            echo "<div id='" . $tabl_dossier[$i] . "' class='folder ligne col-md-2'onclick='clickDossier(this.id)'><i class='fa fa-2x fa-folder-o'></i><p>${tabl_dossier[$i]}</p></div>";
        } 
        else {
            echo "<div id='" . $tabl_dossier[$i] . "' class='folder ligne col-md-2'onclick='clickDossier(this.id)'><i class='fa fa-2x fa-file-o'></i><p>${tabl_dossier[$i]}</p></div>";
        }
    }
}

function testClickDossier() {
    //echo $_POST['dossier'];

    $path = "ls /home/nathaniel/" . $_POST['dossier'];

    $liste_dossier = shell_exec($path);
    $tabl_dossier = preg_split('/\s+/', $liste_dossier);

    for ($i = 0; $i < count($tabl_dossier)-1; $i++) {
        /* echo '<div class="justify-content-center align-items-end">
          <div class="row col-4 offset-4 fondBleu" onclick="testalert()">
          <i class="fa fa-folder-open fa-3x"></i><p class="tabulation">'
          . $resultat[$compteur] . "</p></div></div>";
          echo $resultat[$compteur]; */

        if (is_dir("/home/nathaniel/". $_POST['dossier']. "/" . $tabl_dossier[$i])) {
            echo "<div id='" . $tabl_dossier[$i] . "' class='folder ligne col-md-2'onclick='clickDossier(this.id)'><i class='fa fa-2x fa-folder-o'></i><p>${tabl_dossier[$i]}</p></div>";
        } else {
            echo "<div id='" . $tabl_dossier[$i] . "' class='folder ligne col-md-2'onclick='clickDossier(this.id)'><i class='fa fa-2x fa-file-o'></i><p>${tabl_dossier[$i]}</p></div>";
        }
    }
}

?>
