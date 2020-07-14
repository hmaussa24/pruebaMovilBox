<?php
include "../config/config.php";
session_start();
$_SESSION['usuario'] = null;
session_destroy();
header("Location:". SERVIDOR ."inicio/");