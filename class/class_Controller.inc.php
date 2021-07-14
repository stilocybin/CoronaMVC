<?php

class Controller{
    private $r;
    public function __construct(){
      $this->r = $_REQUEST; 
 // Post, Get, Cookie
       var_dump($_REQUEST);//nur Tests
      // var_dump("<br>?".key($this->r));

      switch(key($this->r)){
        case 'register':    View::setLayout('register.tpl.php','');
                        break;
        case 'send' :   $this->setNameIntoDB();
                        break;
        case 'inzidenz': $this->getShowAll();
                        break;
        case 'login':   //View::setLayout('login.tpl.php','');
                         $this->compareLogin();
                        break;
        case 'faelle': $this->getFallzahlen();
                        break;
          default: $this->getStartSite() ;           
      }
      View::toDisplay();// gibt 1 echo zurück / generiert die User-Ansicht
      // evtl close DB hier
    }
    
    private function getShowAll(){
      $data = Model::getAllData();// Anfrage alle DB Einträge abholen
      View::setLayout('inzidenz.tpl.php',$data);// $data wird im Template strukturiert layout..
    }

    private function getStartSite(){
      View::setLayout('start.tpl.php','');//Übergabe Template, Übergabe von Daten
    }

    private function compareLogin(){
      $data = Model::setLoginData();
      // $res = Model::setLoginData($this->r['name'],$this->r['passwort']);
      View::setLayout('login.tpl.php','');  
        // header('Location: index.php');

    }

    private function setNameIntoDB(){
      $res = Model::setRegData($this->r['name'],$this->r['passwort']);// Klasse aufrufen
      header('Location: index.php');
      exit;
      // View::setLayout('start.tpl.php','');
    }

    private function getFallzahlen(){
      if(isset( $this->r['geschlecht']))$g = $this->r['geschlecht'];
      else $g= "";
      if(isset( $this->r['verlauf']))$v = $this->r['verlauf'];
      else $v= "";
      if(isset( $this->r['alter']))$a = $this->r['alter'];
      else $a= "";
      if(isset( $this->r['kommune']))$k = $this->r['kommune'];
      else $k= "";
      if(isset( $this->r['plz']))$p = $this->r['plz'];
      else $p= "";
      $data = Model::getFaelle($g, $v, $a, $k, $p);
      View::setLayout('faelle.tpl.php',$data); 
      // header('Location: index.php');
   


    }
}




?>