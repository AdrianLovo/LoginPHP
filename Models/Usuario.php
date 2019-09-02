<?php

	class Usuario{

		private $idUsuario;
		private $username;
		private $password;
		private $email;
		private $intentos;

        public function __construct($idUsuario, $username, $password, $email, $intentos){
            $this->idUsuario = $idUsuario;
            $this->username = $username;
            $this->password = $password;
            $this->email = $email;
            $this->intentos = $intentos;
        }

    	public function getIdUsuario(){
        	return $this->idUsuario;
    	}

    	public function setIdUsuario($idUsuario){
	        $this->idUsuario = $idUsuario;
		}

    	public function getUsername(){
        	return $this->username;
    	}
   
	    public function setUsername($username){
        	$this->username = $username;
	    }

  	    public function getPassword(){
        	return $this->password;
    	}

   		public function setPassword($password){
        	$this->password = $password;
    	}

    	public function getEmail(){
        	return $this->email;
    	}

    	public function setEmail($email){
        	$this->email = $email;
    	}

    	public function getIntentos(){
        	return $this->intentos;
    	}
    
	    public function setIntentos($intentos){
	        $this->intentos = $intentos;
	    }
	}


