<?php

abstract class Validator {

    public static function validateRegister (User $user)
    {
        $errors = [];

        if (empty($user->getName())) {
            $errors['name'] = 'El nombre está vacío.';
        } elseif (strlen($user->getName()) < 3) {
            $errors['name'] = 'El nombre es muy corto.';
        } elseif (strlen($user->getName()) > 15) {
            $errors['name'] = 'El nombre es muy largo.';
        } elseif (strtolower($user->getName()) == 'montoto') {
            $errors['name'] = '<marquee behavior="alternate">jajajajaj dale nico eleji otro ejemplo</marquee>';
        }

        if (empty($user->getLastName())) {
            $errors['lastName'] = 'El apellido está vacío.';
        } elseif (strlen($user->getLastName()) < 2) {
            $errors['lastName'] = 'El apellido debe tener 4 caracteres o más.';
        } elseif (strlen($user->getLastName()) > 15) {
            $errors['lastName'] = 'El apellido debe tener 15 caracteres o menos.';
        } elseif (strtolower($user->getLastName()) == 'montoto') {
            $errors['lastName'] = '<marquee behavior="alternate">jajajajaj dale nico eleji otro ejemplo</marquee>';
        }

        if (empty($user->getUsername())) {
            $errors['username'] = 'El usuario está vacío.';
        } elseif (strlen($user->getUsername()) < 5) {
            $errors['username'] = 'El usuario debe tener 4 caracteres o más.';
        } elseif (strlen($user->getUsername()) > 25) {
            $errors['username'] = 'El usuario debe tener 15 caracteres o menos.';
        } elseif ($user->getUsername() === strtolower($user->getUsername())) {
            $errors['username'] = 'El usuario no tiene mayúsculas.';
        } elseif (strtolower($user->getUsername()) == 'montoto') {
            $errors['username'] = '<marquee behavior="alternate">jajajajaj dale nico eleji otro ejemplo</marquee>';
        }

        if (empty($user->getEmail())) {
            $errors['email'] = 'El email está vacío.';
        } elseif (!filter_var($user->getEmail(), FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'El email no es correcto';
        } elseif (strtolower($user->getEmail()) == 'montoto@montoto.montoto') {
            $errors['email'] = '<marquee behavior="alternate">jajajajaj dale nico eleji otro ejemplo</marquee>';
        }

        if(empty($user->getDate())){
            $errors['date']='La fecha esta vacia.';
        }

        if (empty($user->getPassword())) {
            $errors['password'] = 'El password está vacío.';
        } elseif (strlen($user->getPassword()) < 8) {
            $errors['password'] = 'El password debe tener 8 caracteres o más.';
        } elseif (strlen($user->getPassword()) >= 16) {
            $errors['password'] = 'El password debe tener 15 caracteres o menos.';
        }elseif($user->getPassword() !== $user->getComfirmPassword()){
            $errors['password']='Las contraseña no coincide';
        }

        return $errors;
    }
}

?>