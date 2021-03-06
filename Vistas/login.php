
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
        <h2 class="titulo">Inicio de Sesion</h2>
            <div class="abs-center">
                <form class="login" id="login">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Usuario</label>
                        <input type="email" class="form-control" id="usuario" name="usuario" aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted">Porfavor ingrese su usuario con el que se registro.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Contaseña</label>
                        <input type="password" class="form-control" id="pwd" name="pwd">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Recordarme</label>
                    </div>
                    <button type="button" class="btn btn-primary" id="session">Iniciar Sesion</button>
                </form>
            </div>
        </div>
    </section>


</body>

</html>