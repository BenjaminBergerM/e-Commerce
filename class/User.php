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

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of lastName
     */ 
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set the value of lastName
     *
     * @return  self
     */ 
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get the value of username
     */ 
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set the value of username
     *
     * @return  self
     */ 
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of date
     */ 
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */ 
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of comfirmPassword
     */ 
    public function getComfirmPassword()
    {
        return $this->comfirmPassword;
    }

    /**
     * Set the value of comfirmPassword
     *
     * @return  self
     */ 
    public function setComfirmPassword($comfirmPassword)
    {
        $this->comfirmPassword = $comfirmPassword;

        return $this;
    }

    /**
     * Get the value of fotoPerfil
     */ 
    public function getFotoPerfil()
    {
        return $this->fotoPerfil;
    }

    /**
     * Set the value of fotoPerfil
     *
     * @return  self
     */ 
    public function setFotoPerfil($fotoPerfil)
    {
        $this->fotoPerfil = $fotoPerfil;

        return $this;
    }
}

?>