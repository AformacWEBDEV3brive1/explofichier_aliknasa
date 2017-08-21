dossier();

function dossier() {
    $.ajax({
        type: "post",
        url: "process.php",
        data: {'folder': 'dossier'},
        success: function (reponse) {
            $('#dossier').html(reponse);
        }
    });
}

function clickDossier(id)
{
    $.ajax({
        url:"process.php",
        type: "post",
        data: {folder: "testClickDossier", dossier: id},
        success:function(reponse){
        	$('#dossier').html(reponse);
        }
     });
     $.ajax({
         url:"process.php",
         type:"post",
         data: {folder: "refreshInput", dossier:id, repertoire: $('#repertoireCourant').text()},
         success:function(reponse){
             $('#repertoireCourant').html(reponse);
         }
             
         
     });
}
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
