<!DOCTYPE html>
<html>

<head>
    <title>Prueba MovilBox</title>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <script type="text/javascript" src="../public/js/jquery-1.12.0.js"></script>

    <script type="text/javascript" src="../public/js/editor.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../public/editor.css">
    <link rel="stylesheet" type="text/css" href="../public/estilos.css">
    <script type="text/javascript">
        $(document).ready(function() {
            $('#txt-content').Editor();

            $('#txt-content').Editor('setText', ['<p style="color:red;">Editar aqui la noticia</p>']);

            $('#btn-enviar').click(function(e) {
                e.preventDefault();
                var texto = $('#txt-content').Editor('getText');
                $('#texto').html(texto);
            });
        });
    </script>
</head>

<body>
    <section>
        <?php
        include "menu2.php";
        ?>
    </section>
    <div class="container">
        <div class="abs-center-n">
            <form>
                <div class="form-group">
                    <label for="formGroupExampleInput">Titulo:</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Agregue un titulo aqui">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Foto</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
            </form>
            <form action="" method="post" id="frm-test">
                <div class="form-group">
                    <textarea id="txt-content" name="txt-content"></textarea>
                </div>
                <input type="submit" class="btn btn-info" id="btn-enviar" value="Ver">
            </form>
            <div id="texto" class="resultados">
            </div>
            <button type="button" class="btn btn-success addnew">Agregar Noticia</button>
        </div>
    </div>
</body>

</html>