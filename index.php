<?php

include "config/config.php";
?>

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
    include "Vistas/menu.php";
    ?>
  </section>
  <section>
 
    <div class="container">
    <button type="button" class="btn btn-info botonordenar">Ordenar por fecha</button>
      <div class="home">
        <div class="container">

          <ul class="list-unstyled">
            <li class="media">
              <img src="../public/imagenes/descarga.jpg" class="mr-3" alt="...">
              <div class="media-body">
                <h5 class="mt-0 mb-1">List-based media object</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
              </div>

            </li>
            <li class="media my-4">
              <img src="../public/imagenes/descarga1.png" class="mr-3" alt="...">
              <div class="media-body">
                <h5 class="mt-0 mb-1">List-based media object</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
              </div>

            </li>
            <li class="media">
              <img src="../public/imagenes/descarga2.jpg" class="mr-3" alt="...">
              <div class="media-body">
                <h5 class="mt-0 mb-1">List-based media object</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
              </div>

            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section>
    <?php
    include "Vistas/footer.php";
    ?>
  </section>

</body>

</html>