<?php
spl_autoload_register(function($class_name){
    //Parsen von Dateinamen
    // class/class_controller.inc.php      
    require_once 'class/class_'.$class_name.'.inc.php';
});
?>