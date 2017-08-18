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
	//alert(id);
    $.ajax({
        url:"process.php",
        type: "post",
        data: {folder: "testClickDossier", dossier: id},
        success:function(reponse){
        	//alert(result);
        	$('#dossier').html(reponse);
        }
     });
}
