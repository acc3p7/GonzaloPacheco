var inicio=function () {
	$(".cantidad").keyup(function(e){
		if($(this).val()!=''){
			if(e.keyCode==13){
				alert("Soy una alerta");
			}
		}
	});
}

$(document).on('ready',inicio);
