<?php

class MySQL extends Database {

    public function __construct() {}
    protected function connect(){
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "root";
        $this->dbname = "movies_db";
        
        $db = new PDO($this->servername, $this->username,$this->password,$this->dbname);
    
}


public function bringUser($email) {

    }

    public function saveUser(User $user) {

    }


}


?>