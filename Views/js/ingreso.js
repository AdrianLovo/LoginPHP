function Login(){
	var envio = ValidarLogin();
	
	if(envio){
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
	}
}


function ValidarLogin(){
	var username = $("#username").val();
	var password = $("#password").val();

	if(username.length > 50){
		$("#Eusername").html("<br> *Escriba menos de 50 caracteres");
		$("#username").addClass("alertFalse");
		return false;		
	}else if(username.length == ""){	
		$("#Eusername").html("<br> *Username vacio");
		$("#username").addClass("alertFalse");
		return false;				
	}else{
		$("#username").removeClass("alertFalse");
		$("#Eusername").html("");
	}

	if(password.length > 50){
		$("#Epassword").html("<br> *Escriba menos de 50 caracteres.");
		$("#password").removeClass("alertFalse");
		return false;		
	}else if(password.length == ""){
		$("#Epassword").html("<br> *Password vacio");
		$("#password").removeClass("alertFalse");
		return false;		
	}else{
		$("#Epassword").html("");
	}

	return true;
}

