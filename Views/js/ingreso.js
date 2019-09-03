function Login(){
	var envio = Validar();
	
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


function Validar(){
	var username = $("#username").val();
	var password = $("#password").val();

	if(username.length > 50 || username.length == ""){
		$("#Eusername").html("<br> Escriba por favor menos de 50 caracteres.");
		return false;		
	}else{
		$("#Eusername").html("");
	}

	if(password.length > 50 || password.length == ""){
		$("#Eusername").html("<br> Escriba por favor menos de 50 caracteres.");
		return false;		
	}else{
		$("#Epassword").html("");
	}
	return true;
}

