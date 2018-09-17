<?php

require_once 'controllers/helpers.php';

session_start();

session_destroy();

redirect("index.php");

?>