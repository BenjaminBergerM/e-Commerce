<?php

class JSON extends Database {
    public function bringUser($email)
    {
        $user = null;
    
        $archivo = fopen('users.txt', 'r');
    
        while(($line = fgets($archivo)) !== false) {
            $actualUser = json_decode($line, true);
            if ($actualUser['email'] === $email) {
                $user = new User($actualUser['username'], $actualUser['email'], $actualUser['password'],$actualUser['profilePic']);
                $user->setName($actualUser['name'])->setLastName($actualUser['lastName'])->setDate($actualUser['date']);
                break;
            }
        }
    
        fclose($archivo);
    
        return $user;
    }

    function saveUser(User $user)
    {
        $userToSave = [
            "name"=>$user->getName(),
            "lastName"=>$user->getLastName(),
            "username"=>$user->getUsername(),
            "email"=>$user->getEmail(),
            "date"=>$user->getDate(),
            "password"=>$user->getPassword(),
            "comfirmPassword"=>$user->getComfirmPassword(),
            "profilePic"=>$user->getFotoPerfil()
        ];
        $userJson = json_encode($userToSave);
        file_put_contents('users.txt', $userJson . PHP_EOL, FILE_APPEND);
    }

    public function verifyUser($email, $password)
    {
        $user = $this->bringUser($email);
        if ($user !== null) {
            return password_verify($password, $user->getPassword());
        }
        return false;
    }
}

?>