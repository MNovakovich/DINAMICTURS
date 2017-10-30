<?php

class User extends ActiveRecord{
	public static $key = "id";
	public static $tabela = "users";

    public static function setSessions()
    {
           Session::set("user", $this->login);
    }
    
    public static function login($user, $password)
    {
        $user = str_replace("'", "", $user);
        $user = str_replace("`", "", $user);
        $user = str_replace("-", "", $user);
        $password = str_replace("'", "", $password);
        $password = str_replace("`", "", $password);
        $password = str_replace("-", "", $password);
        $password = sha1($password);

         $db = Db::getInstance();
          $res = $db->query("select * from users  where user ='{$user}' and password = '{$password}'");
          while($users=$res->fetch(PDO::FETCH_OBJ)){
            //print_r($users);
         if (count($users) ==1) {
             return $users;
          }
             return null;
          }

      
        /*
        // get metoda nasledjena iz aktiv rekorda
    	//$users = self::get("user ='kuma' and password = '123' limit 1");
        $db = Db::getInstance();
         $user;
         $password;

        $pripremljeni_upit = $db->prepare("SELECT * from users where user = :name and password = :pass limit 1 ");
        $pripremljeni_upit  -> bindParam(":name",$user);
        $pripremljeni_upit  ->  bindParam(":pass",$password);

        // nakon pripreme, obavezno moramo startovati upit
        $pripremljeni_upit->execute();

        $res = $pripremljeni_upit->fetch(PDO::FETCH_OBJ);
        //print_r($res);
        //print_r($users);

    	if (count($res)==1) {
            //$res->user->setSessions();
    		return $res->user;
    	} else {
            header("location:index.php");
    		return null;
    	}
    	//print_r($users);
     */
    }



}