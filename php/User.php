<?php

include_once 'databaseConfig.php';

class User {

    private $id;
    private $username;
    private $password;
    private $email;
    public $database;

    function getId() {
        return $this->id;
    }

    function getUsername() {
        return $this->username;
    }

    function getPassword() {
        return $this->password;
    }

    function getEmail() {
        return $this->email;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setUsername($username) {
        $this->username = $username;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setEmail($email) {
        $this->email = $email;
    }


    function register($user) {
        $this->connectToDatabase();
        $sql = "INSERT INTO users (username, password, email)"
                . " VALUES ('" . $user->getUsername() . "' , '" . $user->getPassword() . "', '" . $user->getEmail() . "')";
        return $this->database->query($sql);
    }

    function login($user) {
        $this->connectToDatabase();
        $sql = "select * from users where username='" . $user->getUsername() . "' and password='" . $user->getPassword() . "'";
        echo $sql;
        $res = $this->database->query($sql);
        if ($res->num_rows > 0) {
            return true;
        } else {
            return FALSE;
        }
    }

    function connectToDatabase() {
        global $link;
        $this->database = $link;
        return $this->database;
    }

}
