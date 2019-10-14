 <!-- Page Wrapper -->
 <div id="wrapper">

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
 <hr>
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url()?>admin/dashboard">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Welcome</div>
  </a>
  <!-- Divider -->
  <hr class="sidebar-divider my-0">


  <hr>
  <hr>
  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
    <a class="nav-link" href="<?php echo base_url()?>marketing/dashboard">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">


  <!-- Nav Item - Utilities Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
      <i class="fas fa-fw fa-envelope"></i>
      <span>Chatting</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">With:</h6>
        <a class="collapse-item" href="utilities-color.html">Marketing</a>
        <a class="collapse-item" href="utilities-border.html">Programming</a>
        <a class="collapse-item" href="utilities-animation.html">Customer</a>
      </div>
    </div>
  </li>

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link" href="<?php echo base_url() ?>marketing/project/" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
      <i class="fas fa-fw fa-folder"></i>
      <span>Project</span>
    </a>
  </li>

  <!-- Nav Item - Charts -->
  <li class="nav-item">
    <a class="nav-link" href="charts.html">
      <i class="fas fa-fw fa-chart-area"></i>
      <span>Charts</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->
