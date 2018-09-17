<?php

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

?>