<?php
	session_start(); 
 		class validar{
 		 private $con;
   		 private $user;
  
  		  public  function exists_login_and_pass($login,$pass,$page){
   			if (isset($login) && isset($pass)){}
				 else {
					$_SESSION['loginerror']="ERROR DE LOGIN"; 
					header("Location:".$page."");
		 			exit();
				 }
		  return true;

 	   	 }


		public function login($login,$page){ 
			if ($login==null){
				$_SESSION['loginerror']="Informe o Login"; 
				header("Location:".$page."");
				 exit();
				}
			return true;
		}


		public function pass($pass,$page){ 
			if ($pass==null){
				$_SESSION['loginerror']="Informe a senha"; 
				header("Location:".$page."");
				 exit();
			}
		return true;

   		 }



	private function conectar(){
	  global $con;
 	  $con = pg_connect("host=localhost port=5432 dbname=estudando user=postgres password=123");//estabelecer conexão 
	}

	public function authenticate_login_and_pass($login,$pass){
	 global $con,$user;
	 if($con==null){$this->conectar();}
	 $pass= $this->cript_pass($pass);
	 $sql="select * from usuario where login='{$login}' and pass='{$pass}'";
	 $query=pg_query($con,$sql);
	 $user=pg_fetch_assoc($query);
	 pg_close($con);
	 if($user){return true; }else{return false; }
	}

	private function cript_pass($pass){
     return crypt($pass,$pass);
	}


	public function set_session($chaves){
	  global $user; 
	  while ($index = current($chaves)) {// index recebe valor de um elemento por vez do array $chaves
	  	$_SESSION[$index]=$user[$index]; // sessão é setada com index passados por parametros e recebe os dados do user
	 	next($chaves);				     // passar o ponteiro para o próxima index ex: array[0]=>array[1] ele inicia aparti do prox elemento
	  }

	}



}
?>