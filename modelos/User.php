<?php 
include "DatabaseClass.php";
include "../config/config.php";
class User {

    private $db = null;

    public  function __construct()
    {
        $this->db = new DatabaseClass(HOST, DB, USER, PWD);   
    }

    public function createUser($nombre, $email, $pwd)
    {
        $id = $this->db->Insert("INSERT INTO users(nombre,email,pwd) VALUES (:nombre,:email,:pwd)", [
            'nombre' => $nombre,
            'email' => $email,
            'pwd' => $pwd,
        ]);

        return $id;
        
    }

    public function login($user, $pwd)
    {
        $data = $this->db->Select("select * from users where nombre=:user", ['user' => $user]);
        //var_dump($data); exit;   
        if($data[0]['pwd'] == $pwd){
            return true;
        }else{
            return false;
        }     
    }

}

?>