<?php

include "../config/config.php";
include "../modelos/DatabaseClass.php";


class Noticia {

    private $db = null;

    public  function __construct()
    {
        $this->db = new DatabaseClass(HOST, DB, USER, PWD);   
    }

    public function createNoticia($titulo, $img, $noticia, $create, $update, $user)
    {
        $id = $this->db->Insert("INSERT INTO noticias(titulo,img,noticia,created_at, updated_at, user_id) VALUES (:titulo,:img,:noticia,:created_at, :updated_at, :user_id)", [
            'titulo' => $titulo,
            'img' => $img,
            'noticia' => $noticia,
            'created_at' => $create,
            'updated_at' => $update,
            'user_id' => $user,

        ]);

        return $id;
        
    }

}