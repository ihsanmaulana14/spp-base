 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

     <!-- Sidebar - Brand -->
     <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
         <div class="sidebar-brand-icon col">
             <i class="fab fa-app-store mx-modify-1"></i>
         </div>
         <!-- Sidebar Toggler (Sidebar) -->
         <div class="col-3">
             <button class=" border-0" id="sidebarToggle"></button>
         </div>
         <!-- <div class="sidebar-brand-text mx-3">Petugas SPP</div> -->
     </a>

     <!-- Divider -->
     <hr class="sidebar-divider">

     <!-- Heading -->
     <div class="sidebar-heading">
         Menu
     </div>

     <!-- Nav Item - Pages Collapse Menu -->
     <li class="nav-item">
         <!-- Nav Item - Charts -->
     <li class="nav-item">
         <a class="nav-link" href="<?= base_url('index') ?>">
             <i class="fas fa-file-invoice-dollar"></i>
             <span>Pembayaran</span></a>
     </li>
     </li>
     <!-- Nav Item - Utilities Collapse Menu -->
     <li class="nav-item">
         <!-- Nav Item - Charts -->
     <li class="nav-item">
         <a class="nav-link" href="<?= base_url('index/siswa') ?>">
             <i class="fas fa-user-graduate"></i>
             <span>Siswa</span></a>
     </li>
     </li>

     <!-- Nav Item - Utilities Collapse Menu -->
     <li class="nav-item">
         <!-- Nav Item - Charts -->
     <li class="nav-item">
         <a class="nav-link" href="<?= base_url('index/spp') ?>">
             <i class="fas fa-money-bill-alt"></i>
             <span>SPP</span></a>
     </li>
     </li>

     <!-- Divider -->
     <hr class="sidebar-divider">

     <!-- Nav Item - Utilities Collapse Menu -->
     <li class="nav-item">
         <!-- Nav Item - Charts -->
     <li class="nav-item">
         <a class="nav-link" href="<?= base_url('auth/logout') ?>" data-toggle="modal" data-target="#logoutModal">
             <i class="fas fa-sign-out-alt"></i>
             <span>Logout</span></a>
     </li>
     </li>



 </ul>
 <!-- End of Sidebar -->