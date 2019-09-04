var GlobalUsername = true;
var GlobalPassword = true;
var GlobalEmail = true;

function Registrar(){
	var terminos = document.querySelector("#agree").checked;

	if(GlobalUsername == true && GlobalPassword == true && GlobalEmail==true && terminos == true){
		alert("VALIDO")	;

		/*var username = $("#username").val();
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
		});*/
	}else{
		alertify.error('Debes aceptar los terminos y condiciones');
	}
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
	var password = $("#password").val();
	var expresion = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;

	if(expresion.test(password)){
		$("#Epassword").html("");					
	}else{
		$("#Epassword").html("<br> Mínimo de 8 caracteres al menos 1 alfabeto, 1 número");
		bandera = false;	
	}

	if(bandera == false){
		$("#password").addClass("alertFalse");		
		GlobalPassword = false;
	}else{
		$("#password").removeClass("alertFalse");
		GlobalPassword = true;
	}
});

$("#email").change(function(){
	var bandera = true;
	var email = $("#email").val();
	var expresion = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;

	if(expresion.test(email)){
		$("#Eemail").html("");					
	}else{		
		$("#Eemail").html("<br> Escriba correctamente el Email");
		bandera = false;
	}
	
	datos = {"Funcion": 2, "email": email};
	$.ajax({
		url: "../../Controllers/ControllerRegistro.php",
		type: "POST",
		data: datos,
		async: false,
		success: function (respuesta) {
			if(respuesta == 1){
				bandera = false
				$("#Eemail").html("<br> Email ya se encuentra registrado");					
			}
		},error: function() {
			alertify.error('Error al validar Email');
		}
	});

	if(bandera == false){
		$("#email").addClass("alertFalse");		
		GlobalEmail = false;
	}else{
		$("#email").removeClass("alertFalse");
		GlobalEmail = true;
	}
});