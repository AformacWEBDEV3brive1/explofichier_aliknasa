dossier();

function dossier() {
    $.ajax({
        type: "post",
        url: "process.php",
        data: {folder: 'dossier'},
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
        data: {folder: "testClickDossier", dossier: id, repertoire: $('#repertoireCourant').text()},
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

function clickRetour()
{
	var path = $('#repertoireCourant').text();
	
	var tableauDossiers = path.split("/");

	var newPath = "";
	for(var i = 1; i<tableauDossiers.length-1;i++)
	{
		newPath += "/" + tableauDossiers[i];
	}
	
	/*Refresh repertoire courant*/
    $('#repertoireCourant').html(newPath);
	
    
    /*Refresh dossiers*/
    $.ajax({
        url:"process.php",
        type: "post",
        data: {folder: "clickRetour", repertoire:  newPath},
        success:function(reponse){
        	$('#dossier').html(reponse);
        }
     });


 
}
