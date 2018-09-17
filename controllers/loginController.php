<?php
    require_once 'filesController.php';
    function verifyUser($email, $password)
    {
        $user = bringUser($email);

        if ($user !== null) {
            return password_verify($password, $user['password']);
        }

        return false;
    }

?>