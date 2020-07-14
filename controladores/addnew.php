<?php
session_start();
include "../modelos/Auth.php";
include "../modelos/Noticia.php";
if ($_SESSION['token'] == $_POST['token']) {


    $noticias = new Noticia();
    if (($_FILES["foto"]["type"] == "image/pjpeg")
        || ($_FILES["foto"]["type"] == "image/jpeg")
        || ($_FILES["foto"]["type"] == "image/png")
        || ($_FILES["foto"]["type"] == "image/gif")
    ) {
        if (move_uploaded_file($_FILES["foto"]["tmp_name"], "../public/imagenes/" . $_FILES['foto']['name'])) {
            //more code here...
            //echo "images/".$_FILES['file']['name'];
            $noticias->createNoticia($_POST['titulo'], $_FILES['foto']['name'], $_POST['noticia'], date("d-m-Y-H-i-s"), date("d-m-Y-H-i-s"), $_SESSION['id']);
            $response = array("respuesta" => "200");
            echo 1;
        } else {
            echo 0;
        }
    } else {
        echo 0;
    }
} else {
    $response = array('respuesta' => "401");
    echo json_encode($response);
}
