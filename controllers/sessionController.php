<?php

    function createSession($user) {

        $_SESSION['user'] = $user;


        if (isset($_POST['remindme'])) {

            $time = time() + 3600*88;

            setcookie("user", json_encode($user), $time);

            setcookie("email", $user['email'], $time);
        } else {

            setcookie("email", null, time()-1);
        }

    }

    function closeSesion() {

        if (!$_SESSION) {
            session_start();
        }

        session_destroy();

        setcookie('user', null, time()-1);
    }

    function readCookie($field) {

        if (isset($_COOKIE[$field])) {

            if (json_decode($_COOKIE[$field]) !== NULL) {

                return json_decode($_COOKIE[$field], true);
            }

            return $_COOKIE[$field];
        }

        return false;
    }

    function keepSesion() {

        if (isset($_COOKIE['user']) && !isset($_SESSION['user'])) {

            $_SESSION['user'] = readCookie('user');

            setcookie('user', $_COOKIE['user'], time()+3600*24*7);
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