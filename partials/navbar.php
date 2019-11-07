<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Menu</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active" id="ventas-item">
        <a class="nav-link" href="/venta.php">Ventas </a>
      </li>
      <li class="nav-item dropdown" id="empleados-item">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          CRUD Empleados
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="/empleados/list_empleados.php">Ver Empleados</a>
          <a class="dropdown-item" href="/empleados/registroM.php">Registar Empleado</a>
          <!-- <a class="dropdown-item" href="#">Something else here</a> -->
        </div>
      </li>
      <li class="nav-item dropdown" id="empleados-item">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          CRUD Franquicias
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="/empleados/list_empleados.php">Ver Franquicias</a>
          <a class="dropdown-item" href="/empleados/registroM.php">Registar Franquicia</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      
    </ul>
  </div>
</nav>