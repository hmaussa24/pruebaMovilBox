<?php
session_start();
include "../modelos/Auth.php";
include "../modelos/User.php";

$user = new User();
$data = file_get_contents('php://input');
$data = json_decode($data, true);
//var_dump($data[1]['value']);exit;
if ($id = $user->login($data[0]['value'], $data[1]['value'])) {
    $token = Auth::SignIn([
        'usuario' => $data[0]['value'],
        'id' => $id[0]['id']
    ]);
    $_SESSION['token'] = $token;
    $_SESSION['usuario'] = $data[0]['value'];
    $_SESSION['id'] = $id[0]['id'];
    $response = array("respuesta" => "200", "token" => $token);

} else {
    $response = array("respuesta" => "401");
}

echo json_encode($response);
