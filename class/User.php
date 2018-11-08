<?php

class User {

    private $name;
    private $lastName;
    private $username;
    private $email;
    private $date;
    private $password;
    private $comfirmPassword;
    private $fotoPerfil;

    public function __construct(String $username, String $email, String $password, String $fotoPerfil = "")
    {
        $this->setUsername($username);
        $this->setEmail($email);
        $this->setPassword($password);
        $this->setFotoPerfil($fotoPerfil);
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }
    public function getUsername()
    {
        return $this->username;
    }


    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }
    public function getEmail()
    {
        return $this->email;
    }


    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }
    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    
    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }
    public function getComfirmPassword()
    {
        return $this->comfirmPassword;
    }

    public function setComfirmPassword($comfirmPassword)
    {
        $this->comfirmPassword = $comfirmPassword;

        return $this;
    }
    public function getFotoPerfil()
    {
        return $this->fotoPerfil;
    }

   
    public function setFotoPerfil($fotoPerfil)
    {
        $this->fotoPerfil = $fotoPerfil;

        return $this;
    }
}

?>