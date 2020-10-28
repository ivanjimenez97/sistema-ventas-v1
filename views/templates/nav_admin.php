  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url();?>home" class="brand-link">
      <img src="<?= assets_file();?>dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Sistema ERP</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image p-2">
          <img src="<?= assets_file();?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info m-0 p-0 text-secondary">
          <a href="#" class="d-block">Ivan Jimenez</a>
          <p class="d-block">Administrador</p>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="<?= base_url();?>dashboard" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-users"></i>
              <p>
                Usuarios
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url();?>usuarios" class="nav-link">
                  <i class="fas fa-users-cog"></i>
                  <p>Usuarios</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url();?>roles" class="nav-link">
                  <i class="fas fa-user-edit"></i>
                  <p>
                    Roles
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url();?>permisos" class="nav-link">
                  <i class="fas fa-user-check"></i>
                  <p>
                    Permisos
                  </p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="<?= base_url();?>clientes" class="nav-link">
              <i class="fas fa-user-tag"></i>
              <p>
                Clientes
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="<?= base_url();?>productos" class="nav-link">
              <i class="fas fa-pallet"></i>
              <p>
                Productos
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="<?= base_url();?>pedidos" class="nav-link">
              <i class="fas fa-boxes"></i>
              <p>
                Pedidos
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="<?= base_url();?>logout" class="nav-link">
              <i class="fas fa-sign-out-alt p-1"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>