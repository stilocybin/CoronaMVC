<?php
class Service{
   private static $myPDO;

   private static function connectDB(){
     // später aus config Datei laden 
    self::$myPDO = new PDO('mysql:host=localhost;dbname=corona_projekt','root','');
   }

   public static function setPrepare($sql){//technisches SQLInjection Schutz
    self::connectDB();
    return self::$myPDO->prepare($sql); // PDO prepare
   }

   public static function setIntoDB($maske){// Schreibprozesse in DB
     $res = $maske->execute();//SQL Injection
     return $res;//1 oder nix
   }
   
   public static function getAllFromDB($maske){// Anfragen an DB
    $maske->execute();//SQL Injection
    return $maske->fetchAll();//Rückgabe Array assoziatives Spalten Values
  }
 // destruct PDO geschlossen
  
 


}