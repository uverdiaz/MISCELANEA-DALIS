<?php $config = include('config.php');?>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">Variedades DALIS J.E</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo $config->root_folder ?>/index.php">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo $config->root_folder ?>/papeleria.php">Papeleria</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo $config->root_folder ?>/contacto.php">Contacto</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo $config->root_folder ?>/pedido.php">Pedido</a>
      </li>
    </ul>
  </div>
</nav>