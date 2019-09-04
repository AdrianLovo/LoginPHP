var GlobalUsername = true;

function Registrar(){
	var envio = ValidarRegistro();
	
	alert(envio);
	/*if(envio){
		var username = $("#username").val();
		var password = $("#password").val();

		datos = {"Funcion": 1, "username": username, "password": password};
		$.ajax({
			url: "../../Controllers/ControllerIngreso.php",
			type: "POST",
			data: datos,
			async: true,
			success: function (respuesta) {
				if(respuesta == 1){
					window.location.href = "informacion";
				}else{
					alertify.error('Usuario o contraseña no validos');	
				}
				if(respuesta == "Error"){
					window.location.href = "intentos";
				}
			},error: function() {
				alertify.error('Error');
			}
		});
	}*/
}


function ValidarRegistro(){
		
}


$("#username").change(function(){
	var bandera = true;
	var username = $("#username").val();

	if(username.length > 50){
		$("#Eusername").html("<br> Username debe tener menos de 50 caracteres");
		bandera = false;		
	}else if(username.length == ""){
		$("#Eusername").html("<br> Username vacio");
		bandera = false;		
	}else{
		$("#Eusername").html("");
	}
	
	datos = {"Funcion": 1, "username": username};
	$.ajax({
		url: "../../Controllers/ControllerRegistro.php",
		type: "POST",
		data: datos,
		async: false,
		success: function (respuesta) {
			if(respuesta == 1){
				bandera = false
				$("#Eusername").html("<br> Username ya se encuentra registrado");					
			}
		},error: function() {
			alertify.error('Error al validar Username');
		}
	});

	if(bandera == false){
		$("#username").addClass("alertFalse");		
		GlobalUsername = false;
	}else{
		$("#username").removeClass("alertFalse");
		GlobalUsername = true;
	}
});

$("#password").change(function(){
	var bandera = true;
	var username = $("#password").val();

	if(username.length > 50){
		$("#Epassword").html("<br> Password debe tener menos de 50 caracteres");
		bandera = false;		
	}else if(username.length == ""){
		$("#Epassword").html("<br> Password vacio");
		bandera = false;		
	}else{
		$("#Epassword").html("");
	}
	
	if(bandera == false){
		$("#password").addClass("alertFalse");		
		GlobalUsername = false;
	}else{
		$("#password").removeClass("alertFalse");
		GlobalUsername = true;
	}
});
