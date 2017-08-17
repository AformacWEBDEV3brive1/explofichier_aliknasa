<?php

$info = $_POST['folder'];
$info();

function dossier() {
    $liste_dossier = shell_exec('ls /home/boul');
    $tabl_dossier = preg_split('/\s+/', $liste_dossier);

    for ($i=0 ; $i < count($tabl_dossier)-1 ; $i++) {
        echo "<div class='folder ligne col-md-2'><i class='fa fa-2x fa-folder-o'></i><p>${tabl_dossier[$i]}</p></div>";
    }
}

?>