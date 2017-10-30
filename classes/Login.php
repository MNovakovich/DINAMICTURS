<?php

/**
* KLASA KOJA PRIKAZUJE LISTE HOTELA NA STRANICI hoteliLista.php 
* i koja prikazuje detalje o izabranom hotelu
*/

class Login extends ActiveRecord {
	
	public static $key = "id";

	public static $tabela = "users";

 

	public static function getLogin ($user, $password)
	{
        
        $db = Db::getInstance();
		 $user;
		 $password;

		$pripremljeni_upit = $db->prepare("SELECT * from users where user = :name and password = :pass");
        $pripremljeni_upit  -> bindParam(":name",$user);
		$pripremljeni_upit  ->  bindParam(":pass",$password);

		// nakon pripreme, obavezno moramo startovati upit
		$pripremljeni_upit->execute();

		$login = $pripremljeni_upit->fetch(PDO::FETCH_OBJ);
        print_r($login);

/*
		if ($login) {
			$_SESSION['id'] = $login->id;
		    $_SESSION['user'] = $login->user;	
		    $_SESSION['password'] = $login->password;
		   header("Location: main.php");
	    } else {
		$errormsg = "Incorrect Email or Password!";

		
	     }

	 */
		
	}


	
}

