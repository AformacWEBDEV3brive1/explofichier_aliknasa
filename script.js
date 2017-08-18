function clickDossier(id)
{
	//alert(id);
    $.ajax({
        url:"process.php",
        type: "post",
        data: {fonction: "testClickDossier", dossier: id},
        success:function(result){
        	//alert(result);
        	$('#testClickDossier').html(result);
        }
     });
}
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

