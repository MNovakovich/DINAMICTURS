<?php
require "../config.php";

if (isset($_POST['submit'])) 
{
  
    $user = $_POST['user'];
    $password = $_POST['password'];
      $login = User::login($user, $password);
      print_r($login);
   
     
      if (!empty($login)) {
      	    session_start();
      	    $_SESSION['user'] = $login->user;
           header("location:main.php");
      }
}
/*

if (isset($_POST['submit'])) {
   $user = $_POST['user'];
   $password = $_POST['password'];

   $db = Db::getInstance();
   $user = $db->query("select * from users  where user ='{$user}' and password = '{$password}'");
   while($user=$res->fetch(PDO::FETCH_OBJ)){
       if (count($user) ==1) {


       	header("location:main.php");
       }
    print_r($user);
  }
}
      */          
                                              
   
                                                //header("Location: index.php");


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="index.php" method="post">
	
	User:<input type="text" name="user"><br>
	Password<input type="password" name="password">
	<input type="submit" name="submit">
</form>

</body>
</html>