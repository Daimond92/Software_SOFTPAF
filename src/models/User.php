<?php

include_once 'src/models/DatabaseConnection.php';

class User extends DataBase{
    private $name;
    private $username;
    private $role;

    //validar si el usuario existe
    public function userExists($user, $pass){
        $query = $this->connection()->prepare('SELECT * FROM user WHERE username = :user AND password = :pass');
        $query->execute(['user' => $user, 'pass' => $pass]);
        if ($query->rowCount()){
            return true;
        } else{
            return false;
        }
    }

    //Asignar usuario
    public function setUser($user){
        $query = $this->connection()->prepare('SELECT * FROM user WHERE username = :user');
        $query->execute(['user'=> $user]);
        foreach ($query as $currentUser) {
            $this->name = $currentUser ['name'];
            $this->username = $currentUser ['username'];
            $this->role = $currentUser ['role'];
        }
    }

    //Obtener nombre
    public function getName(){
        return $this->name;
    }
    public function getRole(){
        return $this->role;
    }
}