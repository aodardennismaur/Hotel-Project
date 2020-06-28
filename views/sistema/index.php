<?php require 'header.php'; ?>

<nav class="navbar navbar-expand-md navbar-light bg-light">
  <a class="navbar-brand"><img src="../../assets/img/logo-sm.svg"></a>
  <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span><img src="../../assets/img/icon-menu.svg"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="mr-3" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img src="../../assets/img/user.jpg" class='rounded-circle mr-2'>
          <?php echo $_SESSION['nombre'] . " " . $_SESSION['apellido']; ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <div class='d-flex flex-column align-items-center py-2 px-3'>
            <img src="../../assets/img/user.jpg" class='rounded-circle'>
            <a href="<?php echo 'perfil.php'; ?>"><?php echo $_SESSION['correo']; ?></a>
          </div>
          <div class="dropdown-divider"></div>
          <a id='logout' class="dropdown-item" href="../../controller/logout.controller.php">Cerrar Session</a>
        </div>
      </li>
    </ul>
  </div>
</nav>

<?php require 'footer.php'; ?>