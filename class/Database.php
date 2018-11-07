<?php

abstract class Database {
    abstract public function bringUser($email);
    abstract public function saveUser(User $user);


}

?>