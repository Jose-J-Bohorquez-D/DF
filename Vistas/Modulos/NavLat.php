<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <a href="index.php" class="brand-link text-center">
    <span class="fa-solid fa-truck-moving"></span>
    <!-- <img src="Vistas/Dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
    <span class="brand-text font-weight-light">TRUCKS SYSTEM</span>
  </a>
  <div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="Vistas/Dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="index.php">Jose Bohorquez<?php #echo $_SESSION["nombres"];?></a><br>
        <a href="index.php">Desarrollador<?php #echo $_SESSION["rol"];?></a>
      </div>
    </div>
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="index.php" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Dashboard</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="index.php?action=clientes" class="nav-link">
            <i class="nav-icon fa fa-building" aria-hidden="true"></i>
            <p>Customers</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="index.php?action=servicios" class="nav-link">
            <i class="nav-icon fa fa-solid fa-handshake" aria-hidden="true"></i>
            <p>Services</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="index.php?action=usuarios" class="nav-link">
            <i class="nav-icon fa fa-users" aria-hidden="true"></i>
            <p>Users</p>
          </a>
        </li>

        <!--<li class="nav-item">
          <a href="index.php?action=alcoholydrogas" class="nav-link">
            <i class="nav-icon fa fa-thin fa-capsules" aria-hidden="true"></i>
             <i class="nav-icon fa fa-thin fa-wine-bottle" aria-hidden="true"></i>
            <p>Alcohol And Drugs</p>
          </a>
        </li>-->

        <li class="nav-item">
          <a href="index.php?action=vehiculos" class="nav-link">
            <i class="nav-icon fa fa-truck" aria-hidden="true"></i>
            <p>Trucks</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fa fa-solid fa-chart-pie" aria-hidden="true"></i>
            <p>Sales Reports</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="index.php?action=tablaGeneralServicios" class="nav-link">
            <i class="nav-icon fa fa-solid fa-table" aria-hidden="true"></i>
            <p>General Table Of Services</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="https://pay.xpress-pay.com/org/D839FF5013744CB" target="_bank" class="nav-link">
            <i class="nav-icon fa-brands fa-paypal" aria-hidden="true"></i>
            <p>Pay Gere</p>
          </a>
        </li>
      </ul>
    </nav>
  </div>
</aside>
