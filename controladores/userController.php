<?php

include "../modelos/User.php";

$user = new User();
$data = file_get_contents('php://input');
$data = json_decode( $data, true );
//var_dump($data[1]['value']);exit;
$user->createUser($data[0]['value'], $data[1]['value'], $data[2]['value']);
$response = array("respuesta" => "200");
echo json_encode($response);