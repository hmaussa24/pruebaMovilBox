<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/estilos.css">
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

                <form class="registro">
                <div class="form-group">
                        <label for="exampleFormControlInput1">Usuario</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="hmaussa">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">E-Mail</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Contraseña</label>
                        <input type="password" class="form-control" id="exampleFormControlInput1" >
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Confirmar Contraseña</label>
                        <input type="password" class="form-control" id="exampleFormControlInput1" >
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section>
        <?php
        include "footer.php";
        ?>
    </section>

</body>

</html>