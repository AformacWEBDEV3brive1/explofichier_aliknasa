<?php

$info = $_POST['folder'];
$info();

function dossier() {
    $liste_dossier = shell_exec('ls /home/boul');
    $tabl_dossier = preg_split('/\s+/', $liste_dossier);

    for ($i=0 ; $i < count($tabl_dossier) ; $i++) {
        echo "<p class='folder'>${tabl_dossier[$i]}</p>";
    }
}

?>