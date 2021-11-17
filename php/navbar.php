<?php
session_start();
if (!isset($_SESSION['usuario'])) {
  header('Location: index');
}
?>
<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
    <li class="nav-header">Páginas</li>
    <li class="nav-item">
      <a href="./productos" class="nav-link">
        <i class="nav-icon fas fa-tint"></i>
        <p>
          Productos
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="./clientes" class="nav-link">
        <i class="nav-icon fas fa-users"></i>
        <p>
          Clientes
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="./proveedor" class="nav-link">
        <i class="nav-icon fas fa-truck"></i>
        <p>
          Proveedores
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="./salidas" class="nav-link">
        <i class="nav-icon fas fa-credit-card"></i>
        <p>
          Salidas
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="./cotizar" class="nav-link">
        <i class="nav-icon fas fa-check"></i>
        <p>
          Cotizar
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="./gastos" class="nav-link">
        <i class="nav-icon fas fa-beer"></i>
        <p>
          Gastos
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="./regsalidas" class="nav-link">
        <i class="nav-icon fas fa-database"></i>
        <p>
          Registros de salidas
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="./datos" class="nav-link">
        <i class="nav-icon fas fa-database"></i>
        <p>
          Datos
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="./entradas" class="nav-link">
        <i class="nav-icon fas fa-upload"></i>
        <p>
          Entradas
        </p>
      </a>
    </li>
    <li class="nav-item">
      <form action="controller_login" method="post">
        <input type="hidden" name="salir" value="salir">
        <button class="btn btn-success">Salir</button>
      </form>
    </li>
  </ul>
</nav>