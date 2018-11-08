<?php

class MySQL extends Database {

    private $pdo;

    public function __construct() {
        $dsn = "mysql:host=localhost;dbname=e-commerce";
        $username = "root";
        $password = "";
        
        $this->pdo = new PDO($dsn, $username, $password);
    }

    public function bringUser($email) {
        $stmt = $this->pdo->prepare('SELECT * FROM users WHERE email= :email');
        $stmt->bindValue(':email', $email);
        $return = $stmt->execute();

        
        while ($row = $stmt->fetch()) {
            $user = new User($row['username'], $row['email'], $row['password'], ($row['profilePic'] != null) ? $row['profilePic'] : '');
            $user->setName($row['name'])->setLastName($row['lastName'])->setDate($row['date']);
        }
        
        return (isset($user) ? $user : null);
    }

    public function saveUser(User $user) {
        $stmt = $this->pdo->prepare('INSERT INTO users (name, lastName, username, email, date, password, comfirmPassword, profilePic) 
        VALUES (:name, :lastName, :username, :email, :date, :password, :comfirmPassword, :profilePic)');
        $stmt->bindValue(':name', $user->getName());
        $stmt->bindValue(':lastName', $user->getLastName());
        $stmt->bindValue(':username', $user->getUsername());
        $stmt->bindValue(':email', $user->getEmail());
        $stmt->bindValue(':date', $user->getDate());
        $stmt->bindValue(':password', ($user->getPassword() == null) ? '' : $user->getPassword());
        $stmt->bindValue(':comfirmPassword', ($user->getComfirmPassword() == null) ? '' : $user->getComfirmPassword());
        $stmt->bindValue(':profilePic', $user->getFotoPerfil());
        $result = $stmt->execute();
    }

    public function verifyUser($email, $password)
    {
        $user = $this->bringUser($email);
        if ($user !== null) {
            return password_verify($password, $user->getPassword());
        }
        return false;
    }


    public function migrate() {
        
        echo " _____  _          _ _       <br>";
        echo "|  __ \(_)        (_) |      <br>";
        echo "| |  | |_ ___  ___ _| |_ ___ <br>";
        echo "| |  | | / __|/ __| | __/ _ \<br>";
        echo "| |__| | \__ \ (__| | ||  __/<br>";
        echo "|_____/|_|___/\___|_|\__\___|<br><br>";

        $query = "
        CREATE TABLE IF NOT EXISTS `users` (
            `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
            `name` varchar(16) NOT NULL,
            `lastName` varchar(16) NOT NULL,
            `username` varchar(26) NOT NULL,
            `email` varchar(100) NOT NULL,
            `date` date NOT NULL,
            `password` varchar(64) NOT NULL,
            `comfirmPassword` varchar(64) DEFAULT NULL,
            `profilePic` varchar(60) DEFAULT NULL
        )";

        $stmt = $this->pdo->prepare($query);
        $tableCreated = $stmt->execute();

        if ($tableCreated) {
            echo 'Tabla usuarios creada correctamente.<br><br>';
            sleep(0.2);
            $json = new JSON();
            $users = $json->bringUsers();

            $count = 0;
            $exist = 0;

            foreach ($users as $user) {
                echo ' - Creando nuevo usuario...<br>';
                if ($this->bringUser($user->getEmail()) !== null) {
                    $cout++;
                    $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
                    $stmt = $this->pdo->prepare('INSERT INTO users (name, lastName, username, email, date, password, comfirmPassword, profilePic) 
                    VALUES (:name, :lastName, :username, :email, :date, :password, :comfirmPassword, :profilePic)');
                    $stmt->bindValue(':name', $user->getName());
                    $stmt->bindValue(':lastName', $user->getLastName());
                    $stmt->bindValue(':username', $user->getUsername());
                    $stmt->bindValue(':email', $user->getEmail());
                    $stmt->bindValue(':date', $user->getDate());
                    $stmt->bindValue(':password', ($user->getPassword() == null) ? '' : $user->getPassword());
                    $stmt->bindValue(':comfirmPassword', ($user->getComfirmPassword() == null) ? '' : $user->getComfirmPassword());
                    $stmt->bindValue(':profilePic', $user->getFotoPerfil());
                    $userCreated = $stmt->execute();
                    if ($userCreated) {
                        echo 'Usuario ' . $user->getEmail() . ' creado correctamente.<br>';
                    }
                } else {
                    $exist++;
                    echo 'Ya hay un usuario creado con ese mail.<br>';
                }
            }

            echo "<br>Se crearon $count usuarios correctamente";
            echo "<br>$exist usuarios ya existian";
        } else {
           echo 'Hubo un error al crear la tabla usuarios, seguro fue culpa de montoto. <br><br>';
        }


    }


}


?>