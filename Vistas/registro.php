<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/estilos.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="../public/js/user.js"></script>
    <title>Prueba MovilBox</title>
</head>

<body>
    <section>
        <?php
        include "menu.php";
        ?>
    </section>
    <section>
        <div class="container">
        <h2 class="titulo">Registro de usuarios</h2>
            <div class="abs-center">

                <form class="registro" id="registro">
                <div class="form-group">
                        <label for="exampleFormControlInput1">Usuario</label>
                        <input type="text" class="form-control" id="usuario" name="usuario" placeholder="hmaussa" require>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">E-Mail</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" require>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Contraseña</label>
                        <input type="password" class="form-control" id="pwd" name="pwd" require>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Confirmar Contraseña</label>
                        <input type="password" class="form-control" id="pwd1" name="pwd1" require>
                    </div>
                    <div class="form-group">
                    <button type="button" class="btn btn-success" id="registrar">Registrar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>


</body>

</html>