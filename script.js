dossier();
function dossier() {
    $.ajax ({
       type: "post",
       url: "process.php",
       data:{'folder':'dossier'},
       success:function(reponse){
           $('#dossier').html(reponse);
       }
    });
}

