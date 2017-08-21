

function dossier() {
    $.ajax({
        type: "post",
        url: "process.php",
        data: {folder: 'dossier'},
        success: function (reponse) {
            $('#dossier').html(reponse);
        }
    });
    $.ajax({
        type: "post",
        url: "process.php",
        data: {nameFolder: doss.text()},
        success:function(reponse) {
            alert('ça fonctionne');
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
         data: {folder: "refreshInput", dossier: id, repertoire: $('#repertoireCourant').text()},
         success:function(reponse){
             $('#repertoireCourant').html(reponse);
         }
             
         
     });
}
