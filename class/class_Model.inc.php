<?php
 class Model{// wird als Klasse verwendet
    // Alles in Bezug auf SQL hier rein
    public static function setRegData($name,$pwd){
        $sql = 'INSERT INTO user (Name,Passwort)
                VALUES (?,?)';//SQL injection sicher
        $mask = Service::setPrepare($sql);//SQL injection sicher
        $mask->bindValue(1,$name,PDO::PARAM_STR);//SQL injection sicher
        $mask->bindValue(2,$pwd,PDO::PARAM_STR);//SQL injection sicher
        return Service::setIntoDB($mask);// in Datenbank schreiben und Rückgabe an controller
    }

    public static function setLoginData($name,$pwd){
        $sql = 'SELECT * FROM user WHERE Name = '.$name.'';
        $mask = Service::setPrepare($sql);//SQL injection sicher


    }

    
    //  public static function getFaelle($g, $v, $a, $k, $p){ 
    //     $sql = 'SELECT * FROM fallzahlen WHERE Geschlecht = ? ';
    //    $mask = Service::setPrepare($sql);
    //     $mask->bindValue(1,$g,PDO::PARAM_STR);
        
    //     return Service::getAllFromDB($mask);
    // }

     public static function getFaelle($g, $v, $a, $k, $p){ 
        $sql = 'SELECT DISTINCT * FROM fallzahlen ORDER BY Geschlecht';
        $mask = Service::setPrepare($sql);
        return Service::getAllFromDB($mask);
    }



    public static function getAllData(){
        $sql = 'SELECT * FROM inzidenz ORDER BY Datum DESC';
        $mask = Service::setPrepare($sql);
        
        return Service::getAllFromDB($mask);//ausführen und Rückgabe controller
    }

 }

