<header class="main-header">
  <!-- Logo -->
  <div class="logo">
<span class="logo-mini">S I P M</span>
<span class="logo-lg">S I P M</span>
</div>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </a>
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">

        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
    <!--<img src="" class="user-image" alt="Foto"> !-->
    <span class="hidden-xs" style="text-transform:capitalize;">Selamat Datang,&nbsp&nbsp</span><span class="hidden-xs" style="text-transform:capitalize;"><?php echo $this->session->userdata('username');?></span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
    <!--<img src="../aset/foto/<?php /*echo "".$_SESSION["Foto"]."" */?>" class="img-circle" alt="Foto">
              <h3><p>Akademik</p></h3> !-->
    <p style="text-transform:capitalize;">Hi, <?php echo $this->session->userdata('username');?></p>
    <p>Selamat Datang di Sistem Informasi Penjualan Motor</p>
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
                    <div class="pull-right">
                <a href="<?php echo site_url('login/logout');?>" class="btn btn-default"><i class="fa fa-sign-out">&nbsp;Sign Out</i></a>
              </div>
            </li>
        </li>
      </ul>
    </div>
  </nav>
</header>
