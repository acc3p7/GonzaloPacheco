var inicio=function () {
	alert("I am an alert box!");
	$(".cantidad").keyup(function(e){
		if($(this).val()!=''){
			if(e.keyCode==13){
				alert("Soy una alerta");
			}
		}
	});
}

$(document).on('ready',inicio);
