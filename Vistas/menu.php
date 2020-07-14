<?php
@include "../config/config.php"
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="">MovilBox</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="<?php echo SERVIDOR ?>inicio/">Noticias<span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="<?php echo SERVIDOR ?>login/">Iniciar Session</a>
      <a class="nav-item nav-link" href="<?php echo SERVIDOR ?>registro/">Registro</a>
    </div>

  </div>
  <div class="form-inline my-2 my-lg-0">
      <span class="badge badge-secondary" style="margin: 4px;">Bienvenido: Harold Maussa Rivas</span>
      <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Salir</button>
    </div>
</nav>