<?php
class View{
    private static $out = 'leer';

    public static function setLayout($template,$data){
        ob_start();//Puffer auf Server für Voraus Berechnung
              /* Interpreter auf dem Server */
              require_once('tpl/header.tpl.php');//Kopfteil der Website
              require_once('tpl/'.$template);// individuell
              require_once('tpl/footer.tpl.php');// Fussteil der Website
        self::$out = ob_get_contents();// Puffer auslesen
        ob_end_clean(); //Puffer reinigen
    }

    public static function toDisplay(){
        echo self::$out;
    }



}

?>