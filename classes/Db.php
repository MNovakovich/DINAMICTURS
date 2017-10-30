<?php
Class Db {
      private static $instance =null;          
      private function __construct(){} 


      public static function getInstance()
      {
          if (!self::$instance) 
          {
            self::$instance =  New PDO("mysql:host=localhost;dbname=dinamikturs","root","", array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
          
          }
              return self::$instance;
      }
 }     
  

