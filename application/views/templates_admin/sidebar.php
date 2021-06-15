      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="">Web Rental Mobil</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="">St</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a>
              </li>
              <li class="menu-header">Admin</li>
              <li class="nav-item dropdown">
                <a href="<?= base_url('admin/customer')?>" class="nav-link"><i class="fas fa-users"></i><span>Data Customer</span></a>
              </li>
              <li class="nav-item dropdown">
                <a href="<?= base_url('admin/data_mobil')?>" class="nav-link"><i class="fas fa-car"></i><span>Data Mobil</span></a>
              </li>
              <li class="nav-item dropdown">
                <a href="<?php echo base_url('admin/data_type')?>" class="nav-link"><i class="fas fa-grip-horizontal"></i><span>Data type</span></a>
              </li>
              <li class="nav-item dropdown">
                <a href="<?= base_url('admin/transaksi')?>" class="nav-link"><i class="fas fa-random"></i><span>Transaksi</span></a>
              </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link"><i class="fas fa-clipboard"></i><span>Data User</span></a>
              </li>
              
              <li class="active"><a class="nav-link" href="<?= base_url('auth/logout')?>"><i class="far fa-sign-out-alt"></i> <span>Logout</span></a></li>
              <li class="nav-item dropdown">
              
            </ul>

            <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
              <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Documentation
              </a>
            </div>
        </aside>
      </div>