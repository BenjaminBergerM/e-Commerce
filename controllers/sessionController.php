<?php

    function crearSesion($usuario) {

        $_SESSION['usuario'] = $usuario;


        if (isset($_POST['recordar'])) {

            $time = time() + 3600 * 24 * 7;

            setcookie("usuario", json_encode($usuario), $time);

            setcookie("email", $usuario['email'], $time);
        } else {

            setcookie("email", null, time()-1);
        }

    }

    function cerrarSesion() {

        if (!$_SESSION) {
            session_start();
        }

        session_destroy();

        setcookie('usuario', null, time()-1);
    }

    function leerCookie($campo) {

        if (isset($_COOKIE[$campo])) {

            if (json_decode($_COOKIE[$campo]) !== NULL) {

                return json_decode($_COOKIE[$campo], true);
            }

            return $_COOKIE[$campo];
        }

        return false;
    }

    function mantenerSesion() {

        if (isset($_COOKIE['usuario']) && !isset($_SESSION['usuario'])) {

            $_SESSION['usuario'] = leerCookie('usuario');

            setcookie('usuario', $_COOKIE['usuario'], time()+3600*24*7);
        }
    }
    function check()
{
    return isset($_SESSION['user']);
}
function guest()
{
    return !check();
}
function user()
{
    if (check()) {
        return $_SESSION['user'];
    } else {
        return false;
    }
}

?>