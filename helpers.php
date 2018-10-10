<?php

require_once 'autoloader.php';

$db = new JSON();
$session = new Session();

function dd(...$param)
{
    echo "<pre>";
    die(var_dump($param));
}
function old ($campo)
{
    if (isset($_POST[$campo])) {
        return $_POST[$campo];
    }
}

function redirect ($url)
{
    header('Location: ' . $url);exit;
}

function check()
{
    return isset($_SESSION['usuario']);
}

function guest()
{
    return !check();
}

function user()
{
    if (check()) {
        return $_SESSION['usuario'];
    } else {
        return false;
    }
}

?>