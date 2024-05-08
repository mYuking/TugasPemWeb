<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <div class="row" style="padding-top:10px">
      <div class="col-9"><h4 align="center" style="color:lightgrey;padding-top:5px"><?=$_SESSION['nama']?></a></h4></div>
    </div>
    <div align="center">
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item">
            <a href="index.php" class="nav-link  <?php if($title=='DASHBOARD'){echo 'active';}?>"">
              <i class="fas fa-users"></i>
              <p>Dashboard</p>
            </a>
          </li>



		<?php if($_SESSION['role']=='admin'){?>
          <li class="nav-item">
            <a href="index.php?kelurahan" class="nav-link  <?php if($title=='KELURAHAN'){echo 'active';}?>"">
              <i class="fas fa-users"></i>
              <p>Kelurahan</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?unit_kerja" class="nav-link  <?php if($title=='UNIT KERJA'){echo 'active';}?>"">
              <i class="fas fa-users"></i>
              <p>Unit Kerja</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?pasien" class="nav-link  <?php if($title=='PASIEN'){echo 'active';}?>"">
              <i class="fas fa-users"></i>
              <p>Pasien</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?paramedik" class="nav-link  <?php if($title=='PARAMEDIK'){echo 'active';}?>"">
              <i class="fas fa-users"></i>
              <p>Paramedik</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?periksa" class="nav-link  <?php if($title=='PERIKSA'){echo 'active';}?>"">
              <i class="fas fa-users"></i>
              <p>Periksa</p>
            </a>
          </li>
         
		<?php } ?> 
        
          <li class="nav-item">
            <a href="index.php?logout" class="nav-link <?php if($title=='logout'){echo 'active';}?>">
              <i class="fas fa-copy"></i>
              <p>Logout</p>
            </a>
          </li>
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>