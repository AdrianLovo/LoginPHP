<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet' type='text/css'>

<div class='login'>
	<h2>Registro</h2>
  	<input id="username" name='username' placeholder='Username' type='text' maxlength="50">
    <span id="Eusername" class="alerta"></span>
  	<input id="password" name='password' placeholder="Mínimo de 8 caracteres al menos 1 alfabeto, 1 número" type='password' maxlength="50" pattern="(?=.*\d)(?=.*[a-z]).{8,}">
    <span id="Epassword" class="alerta"></span>
  	<input id="email" name='email' placeholder='E-Mail' type='email' maxlength="50">
    <span id="Eemail" class="alerta"></span>
  	<div class='agree'>
    	<input id='agree' name='agree' type='checkbox'>
    	<label for='agree'></label>Acepto los terminos y Condiciones
  	</div>
  	<input class='animated' type='submit' value='Registrar' onclick="Registrar()">
</div>


<script type="text/javascript" src="Views/js/registro.js"></script>