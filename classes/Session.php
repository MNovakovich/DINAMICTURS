<?php

class Session extends ActiveRecord {


    public static function start()
    {
	     if (!isset($_SESSION))
	     {
	     	 session_start();
	     }
     }
     public static function get($get, $default=null)
     {   self::start();
     	 if (isset($_SESSION[$key])) return $_SESSION[$key];
     	    else return $default; 
      }

      public static function set($key, $value)
      {
      	self::start();
      	$_SESION[$key] = $value;
      }


}