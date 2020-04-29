<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> Funda of Web IT | Admin Panel</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
<link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">
<link href="{{asset('css/footer.css')}}" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">
   <!-- Sidebar -->
   <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
      </div>
      <div class="sidebar-brand-text mx-2">FAST TRACK  <sup>SE</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
      <a class="nav-link" href="index.php">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Components</span>
      </a>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Custom Components:</h6>
          <a class="collapse-item" href="buttons.html">Buttons</a>
          <a class="collapse-item" href="cards.html">Cards</a>
        </div>
      </div>
    </li>




    <li class="nav-item">
      <a class="nav-link" href="register.php">
        <i class="fas fa-fw fa-user"></i>
        <span>User</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="register.php">
        <i class="fas fa-fw fa-users"></i>
        <span>Class</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="register.php">
        <i class="fas fa-fw fa-file"></i>
        <span>Test</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="register.php">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Admin Profile</span></a>
    </li>



    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-wrench"></i>
        <span>Utilities</span>
      </a>
      <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Custom Utilities:</h6>
          <a class="collapse-item" href="utilities-color.html">Colors</a>
          <a class="collapse-item" href="utilities-border.html">Borders</a>
          <a class="collapse-item" href="utilities-animation.html">Animations</a>
          <a class="collapse-item" href="utilities-other.html">Other</a>
        </div>
      </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      Addons
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-folder"></i>
        <span>Pages</span>
      </a>
      <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Login Screens:</h6>
          <a class="collapse-item" href="login.html">Login</a>
          <a class="collapse-item" href="register.html">Register</a>
          <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
          <div class="collapse-divider"></div>
          <h6 class="collapse-header">Other Pages:</h6>
          <a class="collapse-item" href="404.html">404 Page</a>
          <a class="collapse-item" href="blank.html">Blank Page</a>
        </div>
      </div>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
      <a class="nav-link" href="charts.html">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Charts</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
      <a class="nav-link" href="tables.html">
        <i class="fas fa-fw fa-table"></i>
        <span>Tables</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    </ul>
    <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

          <!-- Main Content -->
          <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

              <!-- Sidebar Toggle (Topbar) -->
              <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
              </button>

              <!-- Topbar Search -->
              <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group">
                  <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                      <i class="fas fa-search fa-sm"></i>
                    </button>
                  </div>
                </div>
              </form>


              <!-- Topbar Navbar -->
              <ul class="navbar-nav ml-auto">

                <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                <li class="nav-item dropdown no-arrow d-sm-none">
                  <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-search fa-fw"></i>
                  </a>
                  <!-- Dropdown - Messages -->
                  <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                    <form class="form-inline mr-auto w-100 navbar-search">
                      <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                          <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                </li>

                <!-- Nav Item - Alerts -->
                <li class="nav-item dropdown no-arrow mx-1">
                  <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-bell fa-fw"></i>
                    <!-- Counter - Alerts -->
                    <span class="badge badge-danger badge-counter">3+</span>
                  </a>
                  <!-- Dropdown - Alerts -->
                  <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                    <h6 class="dropdown-header">
                      Alerts Center
                    </h6>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                      <div class="mr-3">
                        <div class="icon-circle bg-primary">
                          <i class="fas fa-file-alt text-white"></i>
                        </div>
                      </div>
                      <div>
                        <div class="small text-gray-500">December 12, 2019</div>
                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                      </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                      <div class="mr-3">
                        <div class="icon-circle bg-success">
                          <i class="fas fa-donate text-white"></i>
                        </div>
                      </div>
                      <div>
                        <div class="small text-gray-500">December 7, 2019</div>
                        $290.29 has been deposited into your account!
                      </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                      <div class="mr-3">
                        <div class="icon-circle bg-warning">
                          <i class="fas fa-exclamation-triangle text-white"></i>
                        </div>
                      </div>
                      <div>
                        <div class="small text-gray-500">December 2, 2019</div>
                        Spending Alert: We've noticed unusually high spending for your account.
                      </div>
                    </a>
                    <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                  </div>
                </li>

                <!-- Nav Item - Messages -->
                <li class="nav-item dropdown no-arrow mx-1">
                  <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-envelope fa-fw"></i>
                    <!-- Counter - Messages -->
                    <span class="badge badge-danger badge-counter">7</span>
                  </a>
                  <!-- Dropdown - Messages -->
                  <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                    <h6 class="dropdown-header">
                      Message Center
                    </h6>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                      <div class="dropdown-list-image mr-3">
                        <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                        <div class="status-indicator bg-success"></div>
                      </div>
                      <div class="font-weight-bold">
                        <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                      </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                      <div class="dropdown-list-image mr-3">
                        <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                        <div class="status-indicator"></div>
                      </div>
                      <div>
                        <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                        <div class="small text-gray-500">Jae Chun · 1d</div>
                      </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                      <div class="dropdown-list-image mr-3">
                        <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                        <div class="status-indicator bg-warning"></div>
                      </div>
                      <div>
                        <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                      </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                      <div class="dropdown-list-image mr-3">
                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                        <div class="status-indicator bg-success"></div>
                      </div>
                      <div>
                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                      </div>
                    </a>
                    <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                  </div>
                </li>

                <div class="topbar-divider d-none d-sm-block"></div>

                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                  <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">

                   ADMIN

                    </span>
                    <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
                  </a>
                  <!-- Dropdown - User Information -->
                  <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">
                      <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                      Profile
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                      Settings
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                      Activity Log
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                      <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                      Logout
                    </a>
                  </div>
                </li>

              </ul>

            </nav>
            <!-- End of Topbar -->


      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
      </a>
      <div class="container-fluid main">
          @yield('main')
      </div>

      <!-- Logout Modal-->
      <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>

              <form action="logout.php" method="POST">

                <button type="submit" name="logout_btn" class="btn btn-primary">Logout</button>

              </form>


            </div>
          </div>
        </div>
      </div>


      <!-- Footer -->
      <!-- Footer -->
<footer class="page-footer font-small mdb-color lighten-3 pt-4">

      <div class="region-footer">
        <div class="footer">
            <div class="footer-menu row">
                <div class="col">
                    <h4>Liên hệ</h4>
                    <ul>
                        <li><p><i style="width:16px"class="fas fa-home mr-3"></i> 137 Đỗ Đăng Tuyển</p></li>
                        <li><p><i class="fas fa-phone mr-3"></i>0896204185</p></li>
                        <li><p><i class="fas fa-envelope mr-3"></i>nhatvuong0699@gmail.com</p></li>
                        <li><p><i class="fas fa-print mr-3"></i>123456789</p></li>
                    </ul>
                </div>
                 <div class="col">
                    <h4>Col1</h4>
                    <ul>
                        <li><a href="#">link</a></li>
                        <li><a href="#">link</a></li>
                        <li><a href="#">link</a></li>
                    </ul>
                </div>
                <div class="col">
                    <h4>Col2</h4>
                    <ul>
                        <li><a href="#">link</a></li>
                        <li><a href="#">link</a></li>
                        <li><a href="#">link</a></li>
                        <li><a href="#">link</a></li>
                    </ul>
                </div>
                </div>
                <div class="footer-social">
                    <nav class="social">
                        <ul>
                            <li class="nav-item">
                                <a class="nav-link active" href="#">
                                  <svg class="icon" viewBox="0 0 512 512.00038"  xmlns="http://www.w3.org/2000/svg"><path d="m483.738281 0h-455.5c-15.597656.0078125-28.24218725 12.660156-28.238281 28.261719v455.5c.0078125 15.597656 12.660156 28.242187 28.261719 28.238281h455.476562c15.605469.003906 28.257813-12.644531 28.261719-28.25 0-.003906 0-.007812 0-.011719v-455.5c-.007812-15.597656-12.660156-28.24218725-28.261719-28.238281zm0 0" fill="#4267b2"/><path d="m353.5 512v-198h66.75l10-77.5h-76.75v-49.359375c0-22.386719 6.214844-37.640625 38.316406-37.640625h40.683594v-69.128906c-7.078125-.941406-31.363281-3.046875-59.621094-3.046875-59 0-99.378906 36-99.378906 102.140625v57.035156h-66.5v77.5h66.5v198zm0 0" fill="#fff"/></svg>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#">
                                  <svg class="icon" viewBox="0 0 512 512.00038"  xmlns="http://www.w3.org/2000/svg"><path d="m501.453125 56.09375c-5.902344-21.933594-23.195313-39.222656-45.125-45.128906-40.066406-10.964844-200.332031-10.964844-200.332031-10.964844s-160.261719 0-200.328125 10.546875c-21.507813 5.902344-39.222657 23.617187-45.125 45.546875-10.542969 40.0625-10.542969 123.148438-10.542969 123.148438s0 83.503906 10.542969 123.148437c5.90625 21.929687 23.195312 39.222656 45.128906 45.128906 40.484375 10.964844 200.328125 10.964844 200.328125 10.964844s160.261719 0 200.328125-10.546875c21.933594-5.902344 39.222656-23.195312 45.128906-45.125 10.542969-40.066406 10.542969-123.148438 10.542969-123.148438s.421875-83.507812-10.546875-123.570312zm0 0" fill="#f00"/><path d="m204.96875 256 133.269531-76.757812-133.269531-76.757813zm0 0" fill="#fff"/></svg>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#">
                                    <svg class="icon" viewBox="0 0 512 512.00038"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><radialGradient id="a" cx="104.9571229418" cy="447.4474330468" gradientUnits="userSpaceOnUse" r="564.64588968"><stop offset="0" stop-color="#fae100"/><stop offset=".0544" stop-color="#fadc04"/><stop offset=".1167" stop-color="#fbce0e"/><stop offset=".1829" stop-color="#fcb720"/><stop offset=".2514" stop-color="#fe9838"/><stop offset=".3054" stop-color="#ff7950"/><stop offset=".4922" stop-color="#ff1c74"/><stop offset="1" stop-color="#6c1cd1"/></radialGradient><linearGradient id="b" gradientUnits="userSpaceOnUse" x1="196.3726539866" x2="-671.0159540134" y1="222.4596783332" y2="-265.4464136668"><stop offset="0" stop-color="#a1b5d8" stop-opacity="0"/><stop offset=".3094" stop-color="#90a2bd" stop-opacity=".309804"/><stop offset=".7554" stop-color="#7c8b9c" stop-opacity=".756863"/><stop offset="1" stop-color="#748290"/></linearGradient><linearGradient id="c" gradientUnits="userSpaceOnUse" x1="256.0003" x2="256.0003" y1="451.9660859688" y2="531.773969673"><stop offset="0" stop-color="#fae100" stop-opacity="0"/><stop offset=".3068" stop-color="#fca800" stop-opacity=".305882"/><stop offset=".6275" stop-color="#fe7300" stop-opacity=".627451"/><stop offset=".8685" stop-color="#ff5200" stop-opacity=".866667"/><stop offset="1" stop-color="#ff4500"/></linearGradient><linearGradient id="d"><stop offset="0" stop-color="#833ab4" stop-opacity="0"/><stop offset="1" stop-color="#833ab4"/></linearGradient><linearGradient id="e" gradientUnits="userSpaceOnUse" x1="226.8724066998" x2="100.1606848024" xlink:href="#d" y1="226.147987369" y2="99.4361650794"/><linearGradient id="f" gradientUnits="userSpaceOnUse" x1="350.899540777" x2="287.6555669352" xlink:href="#d" y1="468.287448276" y2="170.1375727138"/><linearGradient id="g" gradientUnits="userSpaceOnUse" x1="374.965057" x2="120.9410670648" xlink:href="#d" y1="374.9649673922" y2="120.9408770648"/><linearGradient id="h" gradientUnits="userSpaceOnUse" x1="393.806665096" x2="309.8058007666" xlink:href="#d" y1="221.2631037014" y2="137.2623397642"/><linearGradient id="i" gradientUnits="userSpaceOnUse" x1="357.6582448576" x2="150.5426107646" y1="155.0495285836" y2="362.1651626766"><stop offset="0" stop-color="#833ab4"/><stop offset=".0922" stop-color="#9c3495"/><stop offset=".2927" stop-color="#dc2546"/><stop offset=".392" stop-color="#fd1d1d"/><stop offset=".5589" stop-color="#fc6831"/><stop offset=".6887" stop-color="#fc9b40"/><stop offset=".7521" stop-color="#fcaf45"/><stop offset=".7806" stop-color="#fdb750"/><stop offset=".8656" stop-color="#fecb6a"/><stop offset=".9415" stop-color="#ffd87a"/><stop offset="1" stop-color="#ffdc80"/></linearGradient><path d="m503.234375 91.578125c-4.660156-43.664063-39.144531-78.15625-82.8125-82.8125-109.507813-11.6875-219.335937-11.6875-328.839844 0-43.667969 4.660156-78.15625 39.148437-82.816406 82.8125-11.6875 109.503906-11.6875 219.335937 0 328.839844 4.660156 43.667969 39.148437 78.15625 82.8125 82.816406 109.503906 11.6875 219.335937 11.6875 328.84375 0 43.667969-4.660156 78.152344-39.148437 82.8125-82.816406 11.6875-109.503907 11.6875-219.332031 0-328.839844zm0 0" fill="url(#a)"/><path d="m475.386719 110.097656c-4.132813-38.746094-34.734375-69.351562-73.484375-73.488281-97.171875-10.367187-194.632813-10.367187-291.804688 0-38.746094 4.136719-69.351562 34.742187-73.488281 73.488281-10.367187 97.171875-10.367187 194.632813 0 291.800782 4.136719 38.75 34.742187 69.355468 73.488281 73.488281 97.171875 10.371093 194.632813 10.371093 291.800782 0 38.75-4.132813 69.355468-34.738281 73.488281-73.488281 10.371093-97.167969 10.371093-194.628907 0-291.800782zm0 0" fill="url(#b)"/><path d="m7.671875 409.804688c.351563 3.539062.714844 7.078124 1.09375 10.617187 4.660156 43.664063 39.148437 78.152344 82.816406 82.8125 109.503907 11.6875 219.335938 11.6875 328.839844 0 43.667969-4.660156 78.152344-39.148437 82.8125-82.8125.378906-3.539063.742187-7.078125 1.097656-10.617187zm0 0" fill="url(#c)"/><path d="m503.234375 420.417969c6.28125-58.839844 9.179687-117.773438 8.710937-176.699219l-117.03125-117.03125c-14.621093-16.691406-35.976562-27.109375-61.070312-28.011719-51.605469-1.859375-103.375-1.765625-154.988281.007813-42.867188 1.476562-72.84375 30.289062-80.53125 72.636718-1.355469 7.476563-2.167969 15.050782-3.234375 22.582032v124.148437c.589844 4.023438 1.457031 8.027344 1.726562 12.074219 1.71875 25.757812 12.304688 47.820312 29.253906 62.746094l119.09375 119.089844c58.445313.410156 116.894532-2.496094 175.257813-8.726563 43.667969-4.660156 78.152344-39.148437 82.8125-82.816406zm0 0" fill="url(#e)"/><path d="m503.234375 420.421875c-4.65625 43.660156-39.152344 78.15625-82.8125 82.8125-58.355469 6.226563-116.816406 9.136719-175.253906 8.726563l-118.914063-118.914063c13.785156 12.066406 31.753906 19.414063 52.605469 20.199219 51.601563 1.9375 103.382813 1.886718 154.984375.027344 46.671875-1.6875 80.445312-36.230469 81.902344-82.902344 1.554687-49.554688 1.554687-99.238282 0-148.792969-.664063-21.53125-8.222656-40.476563-20.753906-54.8125l116.957031 116.957031c.460937 58.917969-2.4375 117.859375-8.714844 176.699219zm0 0" fill="url(#f)"/><path d="m316.414062 200.558594c-14.992187-16.324219-36.503906-26.566406-60.414062-26.566406-45.289062 0-82.007812 36.71875-82.007812 82.007812 0 23.910156 10.242187 45.421875 26.566406 60.414062l189.738281 189.738282c10.042969-.875 20.085937-1.847656 30.121094-2.917969 43.667969-4.660156 78.15625-39.148437 82.816406-82.816406 1.070313-10.035157 2.042969-20.078125 2.917969-30.121094zm0 0" fill="url(#g)"/><path d="m511.007812 311.152344-152.703124-152.699219c-3.5625-4.675781-9.175782-7.710937-15.507813-7.710937-10.773437 0-19.511719 8.734374-19.511719 19.511718 0 6.332032 3.035156 11.945313 7.710938 15.507813l177.28125 177.285156c1.203125-17.292969 2.113281-34.59375 2.730468-51.894531zm0 0" fill="url(#h)"/><path d="m95.089844 193.902344c1.066406-7.53125 1.878906-15.105469 3.234375-22.582032 7.683593-42.347656 37.664062-71.160156 80.53125-72.636718 51.613281-1.773438 103.382812-1.867188 154.988281-.007813 46.65625 1.679688 80.445312 36.226563 81.902344 82.898438 1.550781 49.558593 1.550781 99.238281 0 148.796875-1.457032 46.671875-35.234375 81.214844-81.898438 82.898437-51.605468 1.863281-103.386718 1.910157-154.988281-.027343-46.664063-1.753907-78.921875-36.378907-82.042969-83.121094-.269531-4.042969-1.136718-8.050782-1.726562-12.074219 0-41.382813 0-82.765625 0-124.144531zm160.953125 191.707031c23.617187 0 47.257812.707031 70.84375-.164063 36.980469-1.371093 59.726562-23.441406 60.589843-60.386718 1.070313-46.035156 1.070313-92.132813 0-138.171875-.863281-36.9375-23.625-59.523438-60.589843-60.308594-46.917969-.992187-93.886719-.984375-140.804688 0-36.683593.769531-59.496093 22.898437-60.492187 59.429687-1.265625 46.617188-1.265625 93.316407 0 139.933594.996094 36.527344 23.808594 58.144532 60.496094 59.503906 23.289062.867188 46.636718.164063 69.957031.164063zm0 0" fill="url(#i)"/><g fill="#fff"><path d="m95.089844 193.902344c1.066406-7.53125 1.878906-15.105469 3.234375-22.582032 7.683593-42.347656 37.664062-71.160156 80.53125-72.636718 51.613281-1.773438 103.382812-1.867188 154.988281-.007813 46.65625 1.679688 80.445312 36.226563 81.902344 82.898438 1.550781 49.558593 1.550781 99.238281 0 148.796875-1.457032 46.671875-35.234375 81.214844-81.898438 82.898437-51.605468 1.863281-103.386718 1.910157-154.988281-.027343-46.664063-1.753907-78.921875-36.378907-82.042969-83.121094-.269531-4.042969-1.136718-8.050782-1.726562-12.074219 0-41.382813 0-82.765625 0-124.144531zm160.953125 191.707031c23.617187 0 47.257812.707031 70.84375-.164063 36.980469-1.371093 59.726562-23.441406 60.589843-60.386718 1.070313-46.035156 1.070313-92.132813 0-138.171875-.863281-36.9375-23.625-59.523438-60.589843-60.308594-46.917969-.992187-93.886719-.984375-140.804688 0-36.683593.769531-59.496093 22.898437-60.492187 59.429687-1.265625 46.617188-1.265625 93.316407 0 139.933594.996094 36.527344 23.808594 58.144532 60.496094 59.503906 23.289062.867188 46.636718.164063 69.957031.164063zm0 0"/><path d="m256 173.996094c-45.289062 0-82.007812 36.714844-82.007812 82.003906 0 45.292969 36.71875 82.007812 82.007812 82.007812 45.292969 0 82.007812-36.714843 82.007812-82.007812 0-45.289062-36.714843-82.003906-82.007812-82.003906zm0 135.777344c-29.699219 0-53.773438-24.074219-53.773438-53.773438s24.074219-53.773438 53.773438-53.773438 53.773438 24.074219 53.773438 53.773438-24.074219 53.773438-53.773438 53.773438zm0 0"/><path d="m362.304688 170.253906c0 10.773438-8.734376 19.507813-19.507813 19.507813s-19.511719-8.734375-19.511719-19.507813c0-10.777344 8.738282-19.511718 19.511719-19.511718s19.507813 8.734374 19.507813 19.511718zm0 0"/></g></svg>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#">
                                   <svg class="icon" viewBox="0 0 512 512.00038"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><linearGradient id="a" gradientUnits="userSpaceOnUse" x1="169.9940010834" x2="299.4934135904" y1="71.98622701" y2="349.0548448864"><stop offset="0" stop-color="#00c3ff"/><stop offset="1" stop-color="#00b0ed"/></linearGradient><linearGradient id="b"><stop offset="0" stop-color="#00b0ed" stop-opacity="0"/><stop offset="1" stop-color="#00a2ce"/></linearGradient><linearGradient id="c" gradientUnits="userSpaceOnUse" x1="364.2825237824" x2="-379.5864327114" xlink:href="#b" y1="314.0868361356" y2="-84.9521808166"/><linearGradient id="d" gradientUnits="userSpaceOnUse" x1="256.0003" x2="256.0003" xlink:href="#b" y1="437.383215389" y2="504.4720097064"/><linearGradient id="e" gradientUnits="userSpaceOnUse" x1="489.4209995136" x2="239.2937328214" xlink:href="#b" y1="482.0724016502" y2="231.945134958"/><path d="m420.421875 503.234375c-109.503906 11.6875-219.339844 11.6875-328.84375 0-43.664063-4.660156-78.152344-39.148437-82.8125-82.816406-11.6875-109.503907-11.6875-219.335938 0-328.839844 4.660156-43.664063 39.148437-78.152344 82.8125-82.8125 109.503906-11.6875 219.335937-11.6875 328.839844 0 43.667969 4.660156 78.15625 39.148437 82.816406 82.8125 11.6875 109.503906 11.6875 219.335937 0 328.839844-4.660156 43.667969-39.144531 78.15625-82.8125 82.816406zm0 0" fill="url(#a)"/><path d="m475.386719 110.097656c-4.132813-38.746094-34.734375-69.351562-73.484375-73.488281-97.171875-10.367187-194.632813-10.367187-291.804688 0-38.746094 4.136719-69.351562 34.742187-73.488281 73.488281-10.367187 97.171875-10.367187 194.632813 0 291.800782 4.136719 38.75 34.742187 69.355468 73.488281 73.488281 97.171875 10.371093 194.632813 10.371093 291.800782 0 38.75-4.132813 69.355468-34.738281 73.488281-73.488281 10.371093-97.167969 10.371093-194.628907 0-291.800782zm0 0" fill="url(#c)"/><path d="m7.671875 409.804688c.351563 3.539062.714844 7.078124 1.09375 10.617187 4.660156 43.664063 39.148437 78.152344 82.816406 82.8125 109.503907 11.6875 219.335938 11.6875 328.839844 0 43.667969-4.660156 78.152344-39.148437 82.8125-82.8125.378906-3.539063.742187-7.078125 1.097656-10.617187zm0 0" fill="url(#d)"/><path d="m511.890625 238.007812-106.277344-106.273437c-11.910156 6.808594-22.40625 10.585937-30.3125 12.679687-4.445312 1.191407-8.074219 1.839844-10.683593 2.195313-11.984376-12.285156-28.71875-19.914063-47.242188-19.914063-36.445312 0-65.996094 29.546876-65.996094 66 0 1.316407.035156 2.617188.121094 3.914063.175781 3.160156.578125 6.265625 1.199219 9.285156-15.214844-.226562-64.667969-4.289062-111.832031-44.71875-.003907 0-.003907-.003906-.003907-.003906h-.003906l-22.242187-22.246094s-26.09375 45.542969 12.269531 80.101563c1.683593 1.878906 3.535156 3.734375 5.5625 5.558594.160156.179687.328125.355468.488281.535156-5.035156-.339844-20.179688-1.847656-28.945312-8.039063 0 0-1.761719 27.835938 21.429687 48.328125l18.726563 18.886719c-5.703126.472656-12.011719.359375-16.398438-1.5625 0 0 3.882812 16.488281 18.890625 29.683594l26.234375 26.371093c-15.738281 9.167969-43.289062 20.640626-79.554688 17.710938l159.144532 155.5c54.679687-.015625 109.359375-2.9375 163.957031-8.765625 43.667969-4.660156 78.15625-39.148437 82.816406-82.8125 6.480469-60.742187 9.359375-121.585937 8.652344-182.414063zm0 0" fill="url(#e)"/><path d="m414.683594 157.367188c-11.328125 5.925781-28.390625 8.664062-34.046875 9.453124-.046875-.273437-.09375-.535156-.140625-.796874 19.230468-11.894532 25.117187-34.289063 25.117187-34.289063-11.910156 6.808594-22.40625 10.585937-30.3125 12.679687-4.445312 1.191407-8.074219 1.835938-10.683593 2.195313-11.984376-12.289063-28.71875-19.914063-47.242188-19.914063-36.445312 0-65.996094 29.542969-65.996094 66 0 1.3125.035156 2.617188.121094 3.910157.175781 3.160156.578125 6.265625 1.199219 9.285156-17.640625-.261719-81.316407-5.671875-134.082031-66.964844 0 0-29.382813 51.265625 20.015624 86.285157 0 0-20.015624-.625-30.640624-8.128907 0 0-3.125 49.398438 53.769531 65.023438 0 0-20.003907 5.007812-30.015625.628906 0 0 10.007812 42.515625 60.027344 45.648437 0 0-35.875 32.84375-94.457032 28.117188 28.8125 18.242188 62.972656 28.800781 99.597656 28.800781 102.980469 0 186.464844-83.480469 186.464844-186.460937 0-1.285156-.011718-2.570313-.039062-3.855469.027344-.761719.039062-1.519531.039062-2.289063 0-.535156-.011718-1.070312-.019531-1.605468 19.039063-12.6875 31.324219-33.722656 31.324219-33.722656zm0 0" fill="#fff"/></svg>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="footer-extra">
                      <p>Vinfast</p>
                      <p> &copy Copyright Fast Track SE</p>
                    </div>

                </div>
            </div>

        </div>
      </div>
  </footer>
  <!-- Footer -->
      <!-- End of Footer -->
      </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
    </div>

    <!-- End of Content Wrapper -->
  <!-- Bootstrap core JavaScript-->
<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('js/sb-admin-2.min.js')}}"></script>

  <!-- Page level plugins -->
  <script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script>

  <!-- Page level custom scripts -->
  <script src="{{asset('js/demo/chart-area-demo.js')}}"></script>
  <script src="{{asset('js/demo/chart-pie-demo.js"')}}></script>




</body>

</html>
