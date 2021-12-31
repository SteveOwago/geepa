<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta
      name="description"
      content="GEEPA is run by Excellent Student Limited, a Kenyan registered company, and UK Student World, registered in London, UK. We pride in our vision of connecting students in Africa with those on other continents on a platform of education exchange."
    />
    <meta name="robots" content="noindex,nofollow" />
    <title>{{env('APP_NAME')}}</title
    <!-- Favicon icon -->
    <link rel="apple-touch-icon" sizes="57x57" href="frontendIT/assets/images/fav-icon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="frontendIT/assets/images/fav-icon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="frontendIT/assets/images/fav-icon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="frontendIT/assets/images/fav-icon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="frontendIT/assets/images/fav-icon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="frontendIT/assets/images/fav-icon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="frontendIT/assets/images/fav-icon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="frontendIT/assets/images/fav-icon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="frontendIT/assets/images/fav-icon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="frontendIT/assets/images/fav-icon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="frontendIT/assets/images/fav-icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="frontendIT/assets/images/fav-icon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="frontendIT/assets/images/fav-icon/favicon-16x16.png">
    <link rel="manifest" href="frontendIT/assets/images/fav-icon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="frontendIT/assets/images/fav-icon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link
      rel="stylesheet"
      href="{{asset('userpanel/css/apexcharts.css') }}"
    />
    <!-- Custom CSS -->
    <link
      href="{{asset('userpanel/css/fullcalender.min.css') }}"
      rel="stylesheet"
    />
    <link href="{{asset('userpanel/css/calender.css')}}" rel="stylesheet" />
    <!-- needed css -->
    <link href="{{asset('userpanel/css/style.min.css')}}" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons"
      rel="stylesheet">

      {{-- Add Css from frontend --}}
      <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" />
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
      <link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" rel="stylesheet" />
      <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" />
      <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
      <link href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css" rel="stylesheet" />
      <link href="https://cdn.datatables.net/select/1.3.0/css/select.dataTables.min.css" rel="stylesheet" />
      <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" rel="stylesheet" />
      <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
      <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />
      <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.0/css/perfect-scrollbar.min.css" rel="stylesheet" />
      <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
      @yield('styles')
      {{-- End Css from Frontend --}}
    @yield('css')
  </head>

  <body>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
      <!-- ============================================================== -->
      <!-- Topbar header - style you can find in pages.scss -->
      <!-- ============================================================== -->
      <header class="topbar">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
          <div class="navbar-header border-end">
            <!-- This is for the sidebar toggle which is visible on mobile only -->
            <a
              class="nav-toggler waves-effect waves-light d-block d-md-none"
              href="javascript:void(0)"
              ><i class="ti-menu ti-close"></i
            ></a>
            <a class="navbar-brand" href="{{ route('welcome')}}">
              <!-- Logo icon -->
              <b class="logo-icon">
                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                <!-- Dark Logo icon -->
                <img
                  src="{{ asset('frontendIT/assets/images/fav-icon/logo.jpg')}}"
                  alt="homepage"
                  class="dark-logo"
                />
              </b>
            </a>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Toggle which is visible on mobile only -->
            <!-- ============================================================== -->
            <a
              class="topbartoggler d-block d-md-none waves-effect waves-light"
              href="javascript:void(0)"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
              ><i class="ti-more"></i
            ></a>
          </div>
          <!-- ============================================================== -->
          <!-- End Logo -->
          <!-- ============================================================== -->
          <div class="navbar-collapse collapse" id="navbarSupportedContent">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav me-auto">
              <li class="nav-item d-none d-md-block">
                <a
                  class="nav-link sidebartoggler waves-effect waves-light"
                  href="javascript:void(0)"
                  data-sidebartype="mini-sidebar"
                  ><i class="mdi mdi-menu fs-5"></i
                ></a>
              </li>
            </ul>
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav">
              <!-- ============================================================== -->
              <!-- Search -->
              <!-- ============================================================== -->
              <li class="nav-item search-box">
                <form class="app-search d-none d-lg-block">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Search..."
                  />
                  <a href="#" class="active"><i class="fa fa-search"></i></a>
                </form>
              </li>
              <!-- ============================================================== -->
              <!-- User profile and search -->
              <!-- ============================================================== -->
            @guest
                <li class="nav-item">
                     <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if(Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle waves-effect waves-dark"
                  href="#"
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <img
                    src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/assets/images/users/1.jpg"
                    alt="user"
                    class="rounded-circle"
                    width="36"
                  />
                  <span class="ms-2 font-weight-medium">{{Auth::user()->name}} {{ Auth::user()->lname}}</span
                  ><span class="fas fa-angle-down ms-2"></span>
                </a>
                <div
                  class="
                    dropdown-menu dropdown-menu-end
                    user-dd
                    animated
                    flipInY
                  "
                >
                  <div
                    class="
                      d-flex
                      no-block
                      align-items-center
                      p-3
                      bg-info
                      text-white
                      mb-2
                    "
                  >
                    <div class="">
                      <img
                        src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/assets/images/users/1.jpg"
                        alt="user"
                        class="rounded-circle"
                        width="60"
                      />
                    </div>
                    <div class="ms-2">
                      <h4 class="mb-0 text-white">{{Auth::user()->name}}</h4>
                      <p class="mb-0">{{Auth::user()->email}}</p>
                    </div>
                  </div>
                  <a class="dropdown-item" href="#"
                    ><i
                      data-feather="user"
                      class="feather-sm text-info me-1 ms-1"
                    ></i>
                    My Profile</a
                  >
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                  <div class="dropdown-divider"></div>
                  <div class="ps-4 p-2">
                    <a href="#" class="btn d-block w-100 btn-info rounded-pill"
                      >View Profile</a
                    >
                  </div>
                </div>
              </li>
              @endguest
              <!-- ============================================================== -->
              <!-- User profile and search -->
              <!-- ============================================================== -->
            </ul>
          </div>
        </nav>
      </header>
      <!-- ============================================================== -->
      <!-- End Topbar header -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav">
            <ul id="sidebarnav">
               @include('partials.usermenu')
            </ul>
          </nav>
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
      </aside>
      <!-- ============================================================== -->
      <!-- End Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Page wrapper  -->
      <!-- ============================================================== -->
      <div class="page-wrapper">
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="page-content container-fluid">
          <!-- ============================================================== -->
          <!-- User Table & Profile Cards Section  -->
          <!-- ============================================================== -->
          <div class="row">
            @if(session('message'))
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-success" role="alert">{{ session('message') }}</div>
                        </div>
                    </div>
                </div>
            @endif
            @if($errors->count() > 0)
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-danger">
                                <ul class="list-unstyled mb-0">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            <div class="col-md-12">
              @yield('content')
            </div>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer text-center">
          All Rights Reserved by {{ env('APP_NAME')}}
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- End Page wrapper  -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- customizer Panel -->
    <!-- ============================================================== -->
    <div class="chat-windows"></div>
    <!-- -------------------------------------------------------------- -->
    <!-- All Jquery -->
    <!-- -------------------------------------------------------------- -->


    <script src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/assets/extra-libs/taskboard/js/jquery-ui.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- apps -->
    <script src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/dist/js/app.min.js"></script>
    <script src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/dist/js/app.init.horizontal.js"></script>
    <script src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/dist/js/app-style-switcher.horizontal.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/dist/js/feather.min.js"></script>
    <script src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/dist/js/custom.min.js"></script>
    <!-- This Page JS -->
    <script src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/dist/js/pages/dashboards/dashboard1.js"></script>
    <script src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/assets/libs/moment/min/moment.min.js"></script>
    <script src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/assets/libs/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/dist/js/pages/calendar/cal-init.js"></script>
    <script>
    $("#calendar").fullCalendar("option", "height", 650);
    </script>

    {{-- Add Js frontend --}}

    {{-- End Js frontend --}}

  </body>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.0/perfect-scrollbar.min.js"></script>
<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.colVis.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="https://cdn.datatables.net/select/1.3.0/js/dataTables.select.min.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
<script src="{{ asset('js/main.js') }}"></script>
@yield('scripts')
@yield('js')
</html>
