<?php

spl_autoload_register( function($clase) {
   require_once "class/$clase.php";
   
});

?>