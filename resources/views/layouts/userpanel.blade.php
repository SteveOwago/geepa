<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Dec 2021 10:19:09 GMT -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
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
      href="userpanel/css/apexcharts.css"
    />
    <!-- Custom CSS -->
    <link
      href="{{asset('userpanel/css/fullcalendar.min.css')}}"
      rel="stylesheet"
    />
    <link href="{{asset('userpanel/css/calendar.css')}}" rel="stylesheet" />
    <!-- needed css -->
    <link href="{{asset('userpanel/css/style.min.css')}}" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
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
            <a class="navbar-brand" href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/index.html">
              <!-- Logo icon -->
              <b class="logo-icon">
                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                <!-- Dark Logo icon -->
                <img
                  src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/assets/images/logos/logo-icon.png"
                  alt="homepage"
                  class="dark-logo"
                />
                <!-- Light Logo icon -->
                <img
                  src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/assets/images/logos/logo-light-icon.png"
                  alt="homepage"
                  class="light-logo"
                />
              </b>
              <!--End Logo icon -->
              <!-- Logo text -->
              <span class="logo-text">
                <!-- dark Logo text -->
                <img
                  src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/assets/images/logos/logo-text.png"
                  alt="homepage"
                  class="dark-logo"
                />
                <!-- Light Logo text -->
                <img
                  src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/assets/images/logos/logo-light-text.png"
                  class="light-logo"
                  alt="homepage"
                />
              </span>
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
                  <span class="ms-2 font-weight-medium">{{Auth::user()->name}}</span
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
              <!-- User Profile-->
              <li class="nav-small-cap">
                <i class="mdi mdi-dots-horizontal"></i>
                <span class="hide-menu">Personal</span>
              </li>
              @can('user_management_access')
                <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i class="mdi mdi-settings"></i
                  ><span class="hide-menu">{{ trans('cruds.userManagement.title') }}</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                    @can('permission_access')
                        <li class="sidebar-item">
                            <a href="{{ route("admin.permissions.index") }}" class="sidebar-link">
                            <i class="mdi mdi-comment-processing-outline"></i>
                            <span class="hide-menu">{{ trans('cruds.permission.title') }}</span>
                            </a>
                        </li>
                    @endcan
                    @can('role_access')
                        <li class="sidebar-item">
                            <a href="{{ route("admin.roles.index") }}" class="sidebar-link">
                            <i class="mdi mdi-bulletin-board"></i>
                            <span class="hide-menu"> {{ trans('cruds.role.title') }}</span>
                            </a>
                        </li>
                    @endcan
                    @can('user_access')
                        <li class="sidebar-item">
                            <a href="{{ route("admin.users.index") }}" class="sidebar-link">
                            <i class="fa-fw fas fa-user c-sidebar-nav-icon"></i>
                            <span class="hide-menu"> {{ trans('cruds.user.title') }}</span>
                            </a>
                        </li>
                    @endcan
                    @can('audit_log_access')
                        <li class="sidebar-item">
                            <a href="{{ route("admin.audit-logs.index") }}" class="sidebar-link">
                            <i class="fa-fw fas fa-file-alt c-sidebar-nav-icon"></i>
                            <span class="hide-menu">{{ trans('cruds.auditLog.title') }}</span>
                            </a>
                        </li>
                    @endcan
                </ul>
              </li>
              @endcan
              @can('basic_c_r_m_access')
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i class="mdi mdi-settings"></i
                  ><span class="hide-menu">{{ trans('cruds.basicCRM.title') }}</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                    @can('crm_status_access')
                        <li class="sidebar-item">
                            <a href="{{ route("admin.crm-statuses.index") }}" class="sidebar-link">
                            <i class="mdi mdi-comment-processing-outline"></i>
                            <span class="hide-menu">{{ trans('cruds.crmStatus.title') }}</span>
                            </a>
                        </li>
                    @endcan
                    @can('crm_customer_access')
                        <li class="sidebar-item">
                            <a href="{{ route("admin.crm-customers.index") }}" class="sidebar-link">
                            <i class="mdi mdi-bulletin-board"></i>
                            <span class="hide-menu">  {{ trans('cruds.crmCustomer.title') }}</span>
                            </a>
                        </li>
                    @endcan
                    @can('crm_note_access')
                        <li class="sidebar-item">
                            <a href="{{ route("admin.crm-notes.index") }}" class="sidebar-link">
                            <i class="fa-fw fas fa-user c-sidebar-nav-icon"></i>
                            <span class="hide-menu"> {{ trans('cruds.crmNote.title') }}</span>
                            </a>
                        </li>
                    @endcan
                    @can('crm_document_access')
                        <li class="sidebar-item">
                            <a href="{{ route("admin.crm-documents.index") }}" class="sidebar-link">
                            <i class="fa-fw fas fa-file-alt c-sidebar-nav-icon"></i>
                            <span class="hide-menu">{{ trans('cruds.crmDocument.title') }}</span>
                            </a>
                        </li>
                    @endcan
                </ul>
              </li>
              @endcan
              @can('user_alert_access')
              <li class="sidebar-item">
                <a href="{{ route("admin.user-alerts.index") }}" class="sidebar-link"
                  ><i class="mdi mdi-cards-variant"></i
                  ><span class="hide-menu"> {{ trans('cruds.userAlert.title') }}</span></a
                >
              </li>
              @endcan
              @can('school_management_access')
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i class="mdi mdi-settings"></i
                  ><span class="hide-menu">{{ trans('cruds.schoolManagement.title') }}</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                    @can('school_access')
                        <li class="sidebar-item">
                            <a href="{{ route("admin.schools.index") }}" class="sidebar-link">
                            <i class="mdi mdi-comment-processing-outline"></i>
                            <span class="hide-menu"> {{ trans('cruds.school.title') }}</span>
                            </a>
                        </li>
                    @endcan
                </ul>
              </li>
              @endcan
              @can('course_access')
              <li class="sidebar-item">
                <a href="{{ route("admin.courses.index") }}" class="sidebar-link"
                  ><i class="mdi mdi-cards-variant"></i
                  ><span class="hide-menu"> {{ trans('cruds.course.title') }}</span></a
                >
              </li>
              @endcan
              @can('lesson_access')
              <li class="sidebar-item">
                <a href="{{ route("admin.lessons.index") }}" class="sidebar-link"
                  ><i class="mdi mdi-cards-variant"></i
                  ><span class="hide-menu"> {{ trans('cruds.lesson.title') }}</span></a
                >
              </li>
              @endcan
              @can('test_access')
              <li class="sidebar-item">
                <a href="{{ route("admin.tests.index") }}" class="sidebar-link"
                  ><i class="mdi mdi-cards-variant"></i
                  ><span class="hide-menu"> {{ trans('cruds.test.title') }}</span></a
                >
              </li>
              @endcan
              @can('question_access')
              <li class="sidebar-item">
                <a href="{{ route("admin.questions.index") }}" class="sidebar-link"
                  ><i class="mdi mdi-cards-variant"></i
                  ><span class="hide-menu"> {{ trans('cruds.question.title') }}</span></a
                >
              </li>
              @endcan
              @can('question_option_access')
              <li class="sidebar-item">
                <a href="{{ route("admin.question-options.index") }}" class="sidebar-link"
                  ><i class="mdi mdi-cards-variant"></i
                  ><span class="hide-menu"> {{ trans('cruds.questionOption.title') }}</span></a
                >
              </li>
              @endcan
              @can('test_result_access')
              <li class="sidebar-item">
                <a href="{{ route("admin.test-results.index") }}" class="sidebar-link"
                  ><i class="mdi mdi-cards-variant"></i
                  ><span class="hide-menu"> {{ trans('cruds.testResult.title') }}</span></a
                >
              </li>
              @endcan
              @can('test_answer_access')
              <li class="sidebar-item">
                <a href="{{ route("admin.test_answers.index") }}" class="sidebar-link"
                  ><i class="mdi mdi-cards-variant"></i
                  ><span class="hide-menu"> {{ trans('cruds.testAnswer.title') }}</span></a
                >
              </li>
              @endcan
              @can('content_management_access')
                <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i class="mdi mdi-settings"></i
                  ><span class="hide-menu">{{ trans('cruds.contentManagement.title') }}</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                    @can('content_category_access')
                        <li class="sidebar-item">
                            <a href="{{ route("admin.content-categories.index") }}" class="sidebar-link">
                            <i class="mdi mdi-comment-processing-outline"></i>
                            <span class="hide-menu">{{ trans('cruds.contentCategory.title') }}</span>
                            </a>
                        </li>
                    @endcan
                    @can('content_tag_access')
                        <li class="sidebar-item">
                            <a href="{{ route("admin.content-tags.index") }}" class="sidebar-link">
                            <i class="mdi mdi-bulletin-board"></i>
                            <span class="hide-menu"> {{ trans('cruds.contentTag.title') }}</span>
                            </a>
                        </li>
                    @endcan
                    @can('content_page_access')
                        <li class="sidebar-item">
                            <a href="{{ route("admin.content-pages.index") }}" class="sidebar-link">
                            <i class="fa-fw fas fa-user c-sidebar-nav-icon"></i>
                            <span class="hide-menu"> {{ trans('cruds.contentPage.title') }}</span>
                            </a>
                        </li>
                    @endcan
                </ul>
              </li>
              @endcan
              @can('task_management_access')
                <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i class="mdi mdi-settings"></i
                  ><span class="hide-menu">{{ trans('cruds.taskManagement.title') }}</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                    @can('task_status_access')
                        <li class="sidebar-item">
                            <a href="{{ route("admin.content-categories.index") }}" class="sidebar-link">
                            <i class="mdi mdi-comment-processing-outline"></i>
                            <span class="hide-menu">{{ route("admin.task-statuses.index") }}</span>
                            </a>
                        </li>
                    @endcan
                    @can('content_tag_access')
                        <li class="sidebar-item">
                            <a href="{{ route("admin.content-tags.index") }}" class="sidebar-link">
                            <i class="mdi mdi-bulletin-board"></i>
                            <span class="hide-menu"> {{ trans('cruds.contentTag.title') }}</span>
                            </a>
                        </li>
                    @endcan
                    @can('content_page_access')
                        <li class="sidebar-item">
                            <a href="{{ route("admin.content-pages.index") }}" class="sidebar-link">
                            <i class="fa-fw fas fa-user c-sidebar-nav-icon"></i>
                            <span class="hide-menu"> {{ trans('cruds.contentPage.title') }}</span>
                            </a>
                        </li>
                    @endcan
                </ul>
              </li>
              @endcan
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i class="mdi mdi-cart-outline"></i
                  ><span class="hide-menu">Ecommerce </span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/eco-products.html" class="sidebar-link"
                      ><i class="mdi mdi-cards-variant"></i
                      ><span class="hide-menu"> Products </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/eco-products-cart.html" class="sidebar-link"
                      ><i class="mdi mdi-cart"></i
                      ><span class="hide-menu"> Products Cart </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/eco-products-edit.html" class="sidebar-link"
                      ><i class="mdi mdi-cart-plus"></i
                      ><span class="hide-menu"> Products Edit </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/eco-products-detail.html" class="sidebar-link"
                      ><i class="mdi mdi-camera-burst"></i
                      ><span class="hide-menu"> Product Details </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/eco-products-orders.html" class="sidebar-link"
                      ><i class="mdi mdi-chart-pie"></i
                      ><span class="hide-menu"> Product Orders </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/eco-products-checkout.html" class="sidebar-link"
                      ><i class="mdi mdi-clipboard-check"></i
                      ><span class="hide-menu"> Products Checkout </span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="nav-small-cap">
                <i class="mdi mdi-dots-horizontal"></i>
                <span class="hide-menu">Sample Pages</span>
              </li>
              <li class="sidebar-item mega-dropdown">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i class="mdi mdi-content-copy"></i
                  ><span class="hide-menu">Pages </span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/authentication-login1.html" class="sidebar-link"
                      ><i class="mdi mdi-account-key"></i
                      ><span class="hide-menu"> Login </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/starter-kit.html" class="sidebar-link"
                      ><i class="mdi mdi-crop-free"></i>
                      <span class="hide-menu">Starter Kit</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/pages-animation.html" class="sidebar-link"
                      ><i class="mdi mdi-debug-step-over"></i>
                      <span class="hide-menu">Animation</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/pages-search-result.html" class="sidebar-link"
                      ><i class="mdi mdi-search-web"></i>
                      <span class="hide-menu">Search Result</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/authentication-login2.html" class="sidebar-link"
                      ><i class="mdi mdi-account-key"></i
                      ><span class="hide-menu"> Login 2 </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/pages-gallery.html" class="sidebar-link"
                      ><i class="mdi mdi-camera-iris"></i>
                      <span class="hide-menu">Gallery</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/pages-treeview.html" class="sidebar-link"
                      ><i class="mdi mdi-file-tree"></i>
                      <span class="hide-menu">Treeview</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/pages-block-ui.html" class="sidebar-link"
                      ><i class="mdi mdi-codepen"></i>
                      <span class="hide-menu">Block UI</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/authentication-login3.html" class="sidebar-link"
                      ><i class="mdi mdi-account-key"></i
                      ><span class="hide-menu"> Login 3 </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/authentication-register1.html" class="sidebar-link"
                      ><i class="mdi mdi-account-plus"></i
                      ><span class="hide-menu"> Register</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/pages-session-timeout.html" class="sidebar-link"
                      ><i class="mdi mdi-timer-off"></i>
                      <span class="hide-menu">Session Timeout</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a
                      href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/pages-session-idle-timeout.html"
                      class="sidebar-link"
                      ><i class="mdi mdi-timer-sand-empty"></i>
                      <span class="hide-menu">Session Idle Timeout</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/pages-utility-classes.html" class="sidebar-link"
                      ><i class="mdi mdi-tune"></i>
                      <span class="hide-menu">Helper Classes</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/authentication-register2.html" class="sidebar-link"
                      ><i class="mdi mdi-account-plus"></i
                      ><span class="hide-menu"> Register 2</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/pages-maintenance.html" class="sidebar-link"
                      ><i class="mdi mdi-camera-iris"></i>
                      <span class="hide-menu">Maintenance Page</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/ui-user-card.html" class="sidebar-link"
                      ><i class="mdi mdi-account-box"></i>
                      <span class="hide-menu"> User Card </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/pages-profile.html" class="sidebar-link"
                      ><i class="mdi mdi-account-network"></i
                      ><span class="hide-menu"> User Profile</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a
                      href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/authentication-lockscreen.html"
                      class="sidebar-link"
                      ><i class="mdi mdi-account-off"></i
                      ><span class="hide-menu"> Lockscreen</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/ui-user-contacts.html" class="sidebar-link"
                      ><i class="mdi mdi-account-star-variant"></i
                      ><span class="hide-menu"> User Contact</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/pages-invoice.html" class="sidebar-link"
                      ><i class="mdi mdi-vector-triangle"></i
                      ><span class="hide-menu"> Invoice Layout </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/pages-invoice-list.html" class="sidebar-link"
                      ><i class="mdi mdi-vector-rectangle"></i
                      ><span class="hide-menu"> Invoice List</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a
                      href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/authentication-recover-password.html"
                      class="sidebar-link"
                      ><i class="mdi mdi-account-convert"></i
                      ><span class="hide-menu"> Recover password</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/map-google.html" class="sidebar-link"
                      ><i class="mdi mdi-google-maps"></i
                      ><span class="hide-menu"> Google Map </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/map-vector.html" class="sidebar-link"
                      ><i class="mdi mdi-map-marker-radius"></i
                      ><span class="hide-menu"> Vector Map</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/icon-feather.html" class="sidebar-link"
                      ><i class="mdi mdi-feather"></i>
                      <span class="hide-menu"> Feather Icons </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/icon-material.html" class="sidebar-link"
                      ><i class="mdi mdi-emoticon"></i>
                      <span class="hide-menu"> Material Icons </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/icon-fontawesome.html" class="sidebar-link"
                      ><i class="mdi mdi-emoticon-cool"></i
                      ><span class="hide-menu"> Fontawesome Icons</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/icon-themify.html" class="sidebar-link"
                      ><i class="mdi mdi-chart-bubble"></i
                      ><span class="hide-menu"> Themify Icons</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/icon-weather.html" class="sidebar-link"
                      ><i class="mdi mdi-weather-cloudy"></i
                      ><span class="hide-menu"> Weather Icons</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/icon-simple-lineicon.html" class="sidebar-link"
                      ><i class="mdi mdi mdi-image-broken-variant"></i>
                      <span class="hide-menu"> Simple Line icons</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/icon-flag.html" class="sidebar-link"
                      ><i class="mdi mdi-flag-triangle"></i
                      ><span class="hide-menu"> Flag Icons</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/timeline-center.html" class="sidebar-link"
                      ><i class="mdi mdi-clock-fast"></i>
                      <span class="hide-menu"> Center Timeline </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/timeline-horizontal.html" class="sidebar-link"
                      ><i class="mdi mdi-clock-end"></i
                      ><span class="hide-menu"> Horizontal Timeline</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/timeline-left.html" class="sidebar-link"
                      ><i class="mdi mdi-clock-in"></i
                      ><span class="hide-menu"> Left Timeline</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/timeline-right.html" class="sidebar-link"
                      ><i class="mdi mdi-clock-start"></i
                      ><span class="hide-menu"> Right Timeline</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/error-400.html" class="sidebar-link"
                      ><i class="mdi mdi-alert-outline"></i>
                      <span class="hide-menu"> Error 400 </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/error-403.html" class="sidebar-link"
                      ><i class="mdi mdi-alert-outline"></i
                      ><span class="hide-menu"> Error 403</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/error-404.html" class="sidebar-link"
                      ><i class="mdi mdi-alert-outline"></i
                      ><span class="hide-menu"> Error 404</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/eco-products-orders.html" class="sidebar-link"
                      ><i class="mdi mdi-chart-pie"></i>
                      <span class="hide-menu">Eco- Product Orders</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/error-500.html" class="sidebar-link"
                      ><i class="mdi mdi-alert-outline"></i
                      ><span class="hide-menu"> Error 500</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/error-503.html" class="sidebar-link"
                      ><i class="mdi mdi-alert-outline"></i
                      ><span class="hide-menu"> Error 503</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="
                    sidebar-link
                    two-column
                    has-arrow
                    waves-effect waves-dark
                  "
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i class="mdi mdi-format-color-fill"></i
                  ><span class="hide-menu">UI </span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/ui-accordian.html" class="sidebar-link">
                      <i class="mdi mdi-box-shadow"></i>
                      <span class="hide-menu"> Accordian</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/ui-badge.html" class="sidebar-link">
                      <i class="mdi mdi-application"></i>
                      <span class="hide-menu"> Badge</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/ui-buttons.html" class="sidebar-link">
                      <i class="mdi mdi-toggle-switch"></i>
                      <span class="hide-menu"> Buttons</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/ui-modals.html" class="sidebar-link">
                      <i class="mdi mdi-tablet"></i>
                      <span class="hide-menu"> Modals</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a
                      class="sidebar-link has-arrow waves-effect waves-dark"
                      href="javascript:void(0)"
                      aria-expanded="false"
                      ><i class="mdi mdi-credit-card-multiple"></i
                      ><span class="hide-menu">Cards</span></a
                    >
                    <ul aria-expanded="false" class="collapse second-level">
                      <li class="sidebar-item">
                        <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/ui-cards.html" class="sidebar-link">
                          <i class="mdi mdi-layers"></i>
                          <span class="hide-menu"> Basic Cards</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/ui-card-customs.html" class="sidebar-link">
                          <i class="mdi mdi-credit-card-scan"></i>
                          <span class="hide-menu">Custom Cards</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/ui-card-weather.html" class="sidebar-link">
                          <i class="mdi mdi-weather-fog"></i>
                          <span class="hide-menu">Weather Cards</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/ui-card-draggable.html" class="sidebar-link">
                          <i class="mdi mdi-bandcamp"></i>
                          <span class="hide-menu">Draggable Cards</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="sidebar-item">
                    <a
                      class="sidebar-link has-arrow waves-effect waves-dark"
                      href="javascript:void(0)"
                      aria-expanded="false"
                      ><i class="mdi mdi-credit-card-multiple"></i
                      ><span class="hide-menu">Components</span></a
                    >
                    <ul aria-expanded="false" class="collapse second-level">
                      <li class="sidebar-item">
                        <a
                          href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/component-sweetalert.html"
                          class="sidebar-link"
                        >
                          <i class="mdi mdi-layers"></i>
                          <span class="hide-menu"> Sweet Alert</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/component-nestable.html" class="sidebar-link">
                          <i class="mdi mdi-credit-card-scan"></i>
                          <span class="hide-menu">Nestable</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a
                          href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/component-noui-slider.html"
                          class="sidebar-link"
                        >
                          <i class="mdi mdi-weather-fog"></i>
                          <span class="hide-menu">Noui slider</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/component-rating.html" class="sidebar-link">
                          <i class="mdi mdi-bandcamp"></i>
                          <span class="hide-menu">Rating</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/component-toastr.html" class="sidebar-link">
                          <i class="mdi mdi-poll"></i>
                          <span class="hide-menu">Toastr</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/ui-tab.html" class="sidebar-link">
                      <i class="mdi mdi-sort-variant"></i>
                      <span class="hide-menu"> Tab</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/ui-tooltip-popover.html" class="sidebar-link">
                      <i class="mdi mdi-image-filter-vintage"></i>
                      <span class="hide-menu"> Tooltip &amp; Popover</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/ui-notification.html" class="sidebar-link">
                      <i class="mdi mdi-message-bulleted"></i>
                      <span class="hide-menu"> Notification</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/ui-progressbar.html" class="sidebar-link">
                      <i class="mdi mdi-poll"></i>
                      <span class="hide-menu"> Progressbar</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/ui-typography.html" class="sidebar-link">
                      <i class="mdi mdi-format-line-spacing"></i>
                      <span class="hide-menu"> Typography</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/ui-bootstrap.html" class="sidebar-link">
                      <i class="mdi mdi-bootstrap"></i>
                      <span class="hide-menu"> Bootstrap Ui</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/ui-breadcrumb.html" class="sidebar-link">
                      <i class="mdi mdi-equal"></i>
                      <span class="hide-menu"> Breadcrumb</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/ui-lists.html" class="sidebar-link">
                      <i class="mdi mdi-file-video"></i>
                      <span class="hide-menu"> Lists</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/ui-grid.html" class="sidebar-link">
                      <i class="mdi mdi-view-module"></i>
                      <span class="hide-menu"> Grid</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/ui-carousel.html" class="sidebar-link">
                      <i class="mdi mdi-view-carousel"></i>
                      <span class="hide-menu"> Carousel</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/ui-scrollspy.html" class="sidebar-link">
                      <i class="mdi mdi-crop-free"></i>
                      <span class="hide-menu"> Scrollspy</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/ui-offcanvas.html" class="sidebar-link">
                      <i class="mdi mdi-content-copy"></i>
                      <span class="hide-menu"> Offcanvas</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/ui-spinner.html" class="sidebar-link">
                      <i class="mdi mdi-application"></i>
                      <span class="hide-menu"> Spinner</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/ui-toasts.html" class="sidebar-link">
                      <i class="mdi mdi-apple-safari"></i>
                      <span class="hide-menu"> Toasts</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i class="mdi mdi-clipboard-text"></i
                  ><span class="hide-menu">Forms</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a
                      class="sidebar-link has-arrow waves-effect waves-dark"
                      href="javascript:void(0)"
                      aria-expanded="false"
                      ><i class="mdi mdi-collage"></i
                      ><span class="hide-menu">Form Elements</span></a
                    >
                    <ul aria-expanded="false" class="collapse second-level">
                      <li class="sidebar-item">
                        <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/form-inputs.html" class="sidebar-link"
                          ><i class="mdi mdi-priority-low"></i
                          ><span class="hide-menu"> Forms Input</span></a
                        >
                      </li>
                      <li class="sidebar-item">
                        <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/form-input-groups.html" class="sidebar-link"
                          ><i class="mdi mdi-rounded-corner"></i
                          ><span class="hide-menu"> Input Groups</span></a
                        >
                      </li>
                      <li class="sidebar-item">
                        <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/form-input-grid.html" class="sidebar-link"
                          ><i class="mdi mdi-select-all"></i
                          ><span class="hide-menu"> Input Grid</span></a
                        >
                      </li>
                      <li class="sidebar-item">
                        <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/form-checkbox-radio.html" class="sidebar-link"
                          ><i class="mdi mdi-shape-plus"></i
                          ><span class="hide-menu">
                            Checkboxes &amp; Radios</span
                          ></a
                        >
                      </li>
                      <li class="sidebar-item">
                        <a
                          href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/form-bootstrap-touchspin.html"
                          class="sidebar-link"
                          ><i class="mdi mdi-switch"></i
                          ><span class="hide-menu">
                            Bootstrap Touchspin</span
                          ></a
                        >
                      </li>
                      <li class="sidebar-item">
                        <a
                          href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/form-bootstrap-switch.html"
                          class="sidebar-link"
                          ><i class="mdi mdi-toggle-switch-off"></i
                          ><span class="hide-menu"> Bootstrap Switch</span></a
                        >
                      </li>
                      <li class="sidebar-item">
                        <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/form-select2.html" class="sidebar-link"
                          ><i class="mdi mdi-relative-scale"></i
                          ><span class="hide-menu"> Select2</span></a
                        >
                      </li>
                      <li class="sidebar-item">
                        <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/form-dual-listbox.html" class="sidebar-link"
                          ><i class="mdi mdi-tab-unselected"></i
                          ><span class="hide-menu"> Dual Listbox</span></a
                        >
                      </li>
                      <li class="sidebar-item">
                        <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/form-xditable.html" class="sidebar-link"
                          ><i class="mdi mdi-loop"></i
                          ><span class="hide-menu"> X-editable</span></a
                        >
                      </li>
                    </ul>
                  </li>
                  <li class="sidebar-item">
                    <a
                      class="sidebar-link has-arrow waves-effect waves-dark"
                      href="javascript:void(0)"
                      aria-expanded="false"
                      ><i class="mdi mdi-receipt"></i
                      ><span class="hide-menu">Form Layouts</span></a
                    >
                    <ul aria-expanded="false" class="collapse second-level">
                      <li class="sidebar-item">
                        <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/form-basic.html" class="sidebar-link"
                          ><i class="mdi mdi-vector-difference-ba"></i
                          ><span class="hide-menu"> Basic Forms</span></a
                        >
                      </li>
                      <li class="sidebar-item">
                        <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/form-horizontal.html" class="sidebar-link"
                          ><i class="mdi mdi-file-document-box"></i
                          ><span class="hide-menu"> Form Horizontal</span></a
                        >
                      </li>
                      <li class="sidebar-item">
                        <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/form-actions.html" class="sidebar-link"
                          ><i class="mdi mdi-code-greater-than"></i
                          ><span class="hide-menu"> Form Actions</span></a
                        >
                      </li>
                      <li class="sidebar-item">
                        <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/form-row-separator.html" class="sidebar-link"
                          ><i class="mdi mdi-code-equal"></i
                          ><span class="hide-menu"> Row Separator</span></a
                        >
                      </li>
                      <li class="sidebar-item">
                        <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/form-bordered.html" class="sidebar-link"
                          ><i class="mdi mdi-flip-to-front"></i
                          ><span class="hide-menu"> Form Bordered</span></a
                        >
                      </li>
                      <li class="sidebar-item">
                        <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/form-striped-row.html" class="sidebar-link"
                          ><i class="mdi mdi-content-duplicate"></i
                          ><span class="hide-menu"> Striped Rows</span></a
                        >
                      </li>
                      <li class="sidebar-item">
                        <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/form-detail.html" class="sidebar-link"
                          ><i class="mdi mdi-cards-outline"></i
                          ><span class="hide-menu"> Form Detail</span></a
                        >
                      </li>
                      <li class="sidebar-item">
                        <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/form-material.html" class="sidebar-link"
                          ><i class="mdi mdi-content-duplicate"></i
                          ><span class="hide-menu"> Form Material</span></a
                        >
                      </li>
                      <li class="sidebar-item">
                        <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/form-float-input.html" class="sidebar-link"
                          ><i class="mdi mdi-logout"></i
                          ><span class="hide-menu"> Form Float Input</span></a
                        >
                      </li>
                    </ul>
                  </li>
                  <li class="sidebar-item">
                    <a
                      class="sidebar-link has-arrow waves-effect waves-dark"
                      href="javascript:void(0)"
                      aria-expanded="false"
                      ><i class="mdi mdi-code-equal"></i
                      ><span class="hide-menu">Form Addons</span></a
                    >
                    <ul aria-expanded="false" class="collapse second-level">
                      <li class="sidebar-item">
                        <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/form-paginator.html" class="sidebar-link"
                          ><i class="mdi mdi-export"></i
                          ><span class="hide-menu"> Paginator</span></a
                        >
                      </li>
                      <li class="sidebar-item">
                        <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/form-img-cropper.html" class="sidebar-link"
                          ><i class="mdi mdi-crop"></i
                          ><span class="hide-menu"> Image Cropper</span></a
                        >
                      </li>
                      <li class="sidebar-item">
                        <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/form-dropzone.html" class="sidebar-link"
                          ><i class="mdi mdi-crosshairs-gps"></i
                          ><span class="hide-menu"> Dropzone</span></a
                        >
                      </li>
                      <li class="sidebar-item">
                        <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/form-mask.html" class="sidebar-link"
                          ><i class="mdi mdi-box-shadow"></i
                          ><span class="hide-menu"> Form Mask</span></a
                        >
                      </li>
                      <li class="sidebar-item">
                        <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/form-typeahead.html" class="sidebar-link"
                          ><i class="mdi mdi-cards-variant"></i
                          ><span class="hide-menu"> Form Typehead</span></a
                        >
                      </li>
                      <li class="sidebar-item">
                        <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/ui-custom-switch.html" class="sidebar-link"
                          ><i class="mdi mdi-toggle-switch-off"></i
                          ><span class="hide-menu"> Custom Switch</span></a
                        >
                      </li>
                    </ul>
                  </li>
                  <li class="sidebar-item">
                    <a
                      class="sidebar-link has-arrow waves-effect waves-dark"
                      href="javascript:void(0)"
                      aria-expanded="false"
                      ><i class="mdi mdi-alert-box"></i
                      ><span class="hide-menu">Form Validation</span></a
                    >
                    <ul aria-expanded="false" class="collapse second-level">
                      <li class="sidebar-item">
                        <a
                          href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/form-bootstrap-validation.html"
                          class="sidebar-link"
                          ><i class="mdi mdi-credit-card-scan"></i
                          ><span class="hide-menu">
                            Bootstrap Validation</span
                          ></a
                        >
                      </li>
                      <li class="sidebar-item">
                        <a
                          href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/form-custom-validation.html"
                          class="sidebar-link"
                          ><i class="mdi mdi-credit-card-plus"></i
                          ><span class="hide-menu"> Custom Validation</span></a
                        >
                      </li>
                    </ul>
                  </li>
                  <li class="sidebar-item">
                    <a
                      class="sidebar-link has-arrow waves-effect waves-dark"
                      href="javascript:void(0)"
                      aria-expanded="false"
                      ><i class="mdi mdi-pencil-box-outline"></i
                      ><span class="hide-menu">Form Pickers</span></a
                    >
                    <ul aria-expanded="false" class="collapse second-level">
                      <li class="sidebar-item">
                        <a
                          href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/form-picker-colorpicker.html"
                          class="sidebar-link"
                          ><i class="mdi mdi-calendar-plus"></i
                          ><span class="hide-menu"> Colorpicker</span></a
                        >
                      </li>
                      <li class="sidebar-item">
                        <a
                          href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/form-picker-datetimepicker.html"
                          class="sidebar-link"
                          ><i class="mdi mdi-calendar-clock"></i
                          ><span class="hide-menu"> Datetimepicker</span></a
                        >
                      </li>
                      <li class="sidebar-item">
                        <a
                          href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/form-picker-bootstrap-rangepicker.html"
                          class="sidebar-link"
                          ><i class="mdi mdi-calendar-range"></i
                          ><span class="hide-menu"> BT Rangepicker</span></a
                        >
                      </li>
                      <li class="sidebar-item">
                        <a
                          href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/form-picker-bootstrap-datepicker.html"
                          class="sidebar-link"
                          ><i class="mdi mdi-calendar-check"></i
                          ><span class="hide-menu"> BT Datepicker</span></a
                        >
                      </li>
                      <li class="sidebar-item">
                        <a
                          href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/form-picker-material-datepicker.html"
                          class="sidebar-link"
                          ><i class="mdi mdi-calendar-text"></i
                          ><span class="hide-menu">
                            Material Datepicker</span
                          ></a
                        >
                      </li>
                    </ul>
                  </li>
                  <li class="sidebar-item">
                    <a
                      class="sidebar-link has-arrow waves-effect waves-dark"
                      href="javascript:void(0)"
                      aria-expanded="false"
                      ><i class="mdi mdi-dns"></i
                      ><span class="hide-menu">Form Editor</span></a
                    >
                    <ul aria-expanded="false" class="collapse second-level">
                      <li class="sidebar-item">
                        <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/form-editor-ckeditor.html" class="sidebar-link"
                          ><i class="mdi mdi-drawing"></i
                          ><span class="hide-menu">Ck Editor</span></a
                        >
                      </li>
                      <li class="sidebar-item">
                        <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/form-editor-quill.html" class="sidebar-link"
                          ><i class="mdi mdi-drupal"></i
                          ><span class="hide-menu">Quill Editor</span></a
                        >
                      </li>
                      <li class="sidebar-item">
                        <a
                          href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/form-editor-summernote.html"
                          class="sidebar-link"
                          ><i class="mdi mdi-brightness-6"></i
                          ><span class="hide-menu">Summernote Editor</span></a
                        >
                      </li>
                      <li class="sidebar-item">
                        <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/form-editor-tinymce.html" class="sidebar-link"
                          ><i class="mdi mdi-bowling"></i
                          ><span class="hide-menu">Tinymce Edtor</span></a
                        >
                      </li>
                    </ul>
                  </li>
                  <li class="sidebar-item">
                    <a
                      class="sidebar-link waves-effect waves-dark sidebar-link"
                      href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/form-wizard.html"
                      aria-expanded="false"
                      ><i class="mdi mdi-cube-send"></i
                      ><span class="hide-menu">Form Wizard</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a
                      class="sidebar-link waves-effect waves-dark sidebar-link"
                      href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/form-repeater.html"
                      aria-expanded="false"
                      ><i class="mdi mdi-creation"></i
                      ><span class="hide-menu">Form Repeater</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="nav-small-cap">
                <i class="mdi mdi-dots-horizontal"></i>
                <span class="hide-menu">Tables</span>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i class="mdi mdi-table"></i
                  ><span class="hide-menu">Tables</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a
                      class="sidebar-link has-arrow waves-effect waves-dark"
                      href="javascript:void(0)"
                      aria-expanded="false"
                      ><i class="mdi mdi-border-none"></i
                      ><span class="hide-menu">Bootstrap Tables</span></a
                    >
                    <ul aria-expanded="false" class="collapse second-level">
                      <li class="sidebar-item">
                        <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/table-basic.html" class="sidebar-link"
                          ><i class="mdi mdi-border-all"></i
                          ><span class="hide-menu">Basic Table </span></a
                        >
                      </li>
                      <li class="sidebar-item">
                        <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/table-dark-basic.html" class="sidebar-link"
                          ><i class="mdi mdi-border-left"></i
                          ><span class="hide-menu">Dark Basic Table </span></a
                        >
                      </li>
                      <li class="sidebar-item">
                        <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/table-sizing.html" class="sidebar-link"
                          ><i class="mdi mdi-border-outside"></i
                          ><span class="hide-menu">Sizing Table </span></a
                        >
                      </li>
                      <li class="sidebar-item">
                        <a
                          href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/table-layout-coloured.html"
                          class="sidebar-link"
                          ><i class="mdi mdi-border-bottom"></i
                          ><span class="hide-menu"
                            >Coloured Table Layout</span
                          ></a
                        >
                      </li>
                    </ul>
                  </li>
                  <li class="sidebar-item">
                    <a
                      class="sidebar-link has-arrow waves-effect waves-dark"
                      href="javascript:void(0)"
                      aria-expanded="false"
                      ><i class="mdi mdi-border-inside"></i
                      ><span class="hide-menu">Datatables</span></a
                    >
                    <ul aria-expanded="false" class="collapse second-level">
                      <li class="sidebar-item">
                        <a
                          href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/table-datatable-basic.html"
                          class="sidebar-link"
                          ><i class="mdi mdi-border-vertical"></i
                          ><span class="hide-menu">
                            Basic Initialisation</span
                          ></a
                        >
                      </li>
                      <li class="sidebar-item">
                        <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/table-datatable-api.html" class="sidebar-link"
                          ><i class="mdi mdi-blur-linear"></i
                          ><span class="hide-menu"> API</span></a
                        >
                      </li>
                      <li class="sidebar-item">
                        <a
                          href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/table-datatable-advanced.html"
                          class="sidebar-link"
                          ><i class="mdi mdi-border-style"></i
                          ><span class="hide-menu">
                            Advanced Initialisation</span
                          ></a
                        >
                      </li>
                    </ul>
                  </li>
                  <li class="sidebar-item">
                    <a
                      class="sidebar-link waves-effect waves-dark sidebar-link"
                      href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/table-jsgrid.html"
                      aria-expanded="false"
                      ><i class="mdi mdi-border-top"></i
                      ><span class="hide-menu">Table Jsgrid</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a
                      class="sidebar-link waves-effect waves-dark sidebar-link"
                      href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/table-responsive.html"
                      aria-expanded="false"
                      ><i class="mdi mdi-border-style"></i
                      ><span class="hide-menu">Table Responsive</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a
                      class="sidebar-link waves-effect waves-dark sidebar-link"
                      href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/table-footable.html"
                      aria-expanded="false"
                      ><i class="mdi mdi-tab-unselected"></i
                      ><span class="hide-menu">Table Footable</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a
                      class="sidebar-link waves-effect waves-dark sidebar-link"
                      href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/table-bootstrap.html"
                      aria-expanded="false"
                      ><i class="mdi mdi-border-horizontal"></i
                      ><span class="hide-menu">Table Bootstrap</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="nav-small-cap">
                <i class="mdi mdi-dots-horizontal"></i>
                <span class="hide-menu">Apps</span>
              </li>
              <li class="sidebar-item">
                <a
                  class="
                    sidebar-link
                    two-column
                    has-arrow
                    waves-effect waves-dark
                  "
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i class="mdi mdi-apps"></i
                  ><span class="hide-menu">Apps </span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/app-chats.html" class="sidebar-link">
                      <i class="mdi mdi-comment-processing-outline"></i>
                      <span class="hide-menu">Chat Message</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/app-calendar.html" class="sidebar-link"
                      ><i class="mdi mdi-calendar"></i
                      ><span class="hide-menu"> Calender </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/app-notes.html" class="sidebar-link"
                      ><i class="mdi mdi-arrange-bring-forward"></i
                      ><span class="hide-menu"> Notes </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/app-todo.html" class="sidebar-link"
                      ><i class="mdi mdi-clipboard-text"></i
                      ><span class="hide-menu"> Todo </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/app-invoice.html" class="sidebar-link"
                      ><i class="mdi mdi-book"></i
                      ><span class="hide-menu"> Invoice </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/app-contacts.html" class="sidebar-link"
                      ><i class="mdi mdi-account-box"></i
                      ><span class="hide-menu"> Contact Table </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a
                      class="has-arrow sidebar-link"
                      href="javascript:void(0)"
                      aria-expanded="false"
                    >
                      <i class="mdi mdi-inbox-arrow-down"></i>
                      <span class="hide-menu">Inbox</span>
                    </a>
                    <ul aria-expanded="false" class="collapse second-level">
                      <li class="sidebar-item">
                        <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/inbox-email.html" class="sidebar-link">
                          <i class="mdi mdi-email"></i>
                          <span class="hide-menu"> Email </span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/inbox-email-detail.html" class="sidebar-link">
                          <i class="mdi mdi-email-alert"></i>
                          <span class="hide-menu"> Email Detail </span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/inbox-email-compose.html" class="sidebar-link">
                          <i class="mdi mdi-email-secure"></i>
                          <span class="hide-menu"> Email Compose </span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="sidebar-item">
                    <a
                      class="has-arrow sidebar-link"
                      href="javascript:void(0)"
                      aria-expanded="false"
                    >
                      <i class="ti-user"></i>
                      <span class="hide-menu">Contacts</span>
                    </a>
                    <ul aria-expanded="false" class="collapse second-level">
                      <li class="sidebar-item">
                        <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/contact-list.html" class="sidebar-link">
                          <i class="icon-people"></i>
                          <span class="hide-menu"> Contact List </span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/contact-grid.html" class="sidebar-link">
                          <i class="icon-user-follow"></i>
                          <span class="hide-menu"> Contacts Grid </span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="sidebar-item">
                    <a
                      class="has-arrow sidebar-link"
                      href="javascript:void(0)"
                      aria-expanded="false"
                    >
                      <i class="mdi mdi-bookmark-plus-outline"></i>
                      <span class="hide-menu">Tickets</span>
                    </a>
                    <ul aria-expanded="false" class="collapse second-level">
                      <li class="sidebar-item">
                        <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/ticket-list.html" class="sidebar-link">
                          <i class="mdi mdi-book-multiple"></i>
                          <span class="hide-menu"> Ticket List </span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/ticket-detail.html" class="sidebar-link">
                          <i class="mdi mdi-book-plus"></i>
                          <span class="hide-menu"> Ticket Detail </span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/app-taskboard.html" class="sidebar-link">
                      <i class="mdi mdi-bulletin-board"></i>
                      <span class="hide-menu"> Taskboard </span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/map-google.html" class="sidebar-link">
                      <i class="mdi mdi-google-maps"></i>
                      <span class="hide-menu"> Google Map </span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/map-vector.html" class="sidebar-link">
                      <i class="mdi mdi-map-marker-radius"></i>
                      <span class="hide-menu"> Vector Map </span>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="nav-small-cap">
                <i class="mdi mdi-dots-horizontal"></i>
                <span class="hide-menu">Charts</span>
              </li>
              <li class="sidebar-item">
                <a
                  class="
                    sidebar-link
                    has-arrow
                    waves-effect waves-dark
                    sidebar-link
                  "
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i class="mdi mdi-image-filter-tilt-shift"></i
                  ><span class="hide-menu"> Charts</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a
                      class="sidebar-link has-arrow waves-effect waves-dark"
                      href="javascript:void(0)"
                      aria-expanded="false"
                      ><i class="mdi mdi-chart-bubble"></i
                      ><span class="hide-menu">Apex Charts</span></a
                    >
                    <ul aria-expanded="false" class="collapse second-level">
                      <li class="sidebar-item">
                        <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/chart-apex-line.html" class="sidebar-link"
                          ><i class="mdi mdi-chart-line"></i>
                          <span class="hide-menu">Apex Line Chart</span></a
                        >
                      </li>
                      <li class="sidebar-item">
                        <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/chart-apex-area.html" class="sidebar-link"
                          ><i class="mdi mdi-chart-areaspline"></i>
                          <span class="hide-menu">Apex Area Chart</span></a
                        >
                      </li>
                      <li class="sidebar-item">
                        <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/chart-apex-bar.html" class="sidebar-link"
                          ><i class="mdi mdi-chart-gantt"></i>
                          <span class="hide-menu">Apex Bar Chart</span></a
                        >
                      </li>
                      <li class="sidebar-item">
                        <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/chart-apex-pie.html" class="sidebar-link"
                          ><i class="mdi mdi-chart-pie"></i>
                          <span class="hide-menu">Apex Pie Chart</span></a
                        >
                      </li>
                      <li class="sidebar-item">
                        <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/chart-apex-radial.html" class="sidebar-link"
                          ><i class="mdi mdi-chart-arc"></i>
                          <span class="hide-menu">Apex Radial Chart</span></a
                        >
                      </li>
                      <li class="sidebar-item">
                        <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin-horizontal-nav/chart-apex-radar.html" class="sidebar-link"
                          ><i class="mdi mdi-hexagon-outline"></i>
                          <span class="hide-menu">Apex Radar Chart</span></a
                        >
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
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
    <aside class="customizer">
      <a href="javascript:void(0)" class="service-panel-toggle"
        ><i class="fa fa-spin fa-cog"></i
      ></a>
      <div class="customizer-body">
        <ul class="nav customizer-tab" role="tablist">
          <li class="nav-item">
            <a
              class="nav-link active"
              id="pills-home-tab"
              data-bs-toggle="pill"
              href="#pills-home"
              role="tab"
              aria-controls="pills-home"
              aria-selected="true"
              ><i class="mdi mdi-wrench fs-6"></i
            ></a>
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              id="pills-profile-tab"
              data-bs-toggle="pill"
              href="#chat"
              role="tab"
              aria-controls="chat"
              aria-selected="false"
              ><i class="mdi mdi-message-reply fs-6"></i
            ></a>
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              id="pills-contact-tab"
              data-bs-toggle="pill"
              href="#pills-contact"
              role="tab"
              aria-controls="pills-contact"
              aria-selected="false"
              ><i class="mdi mdi-star-circle fs-6"></i
            ></a>
          </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
          <!-- Tab 1 -->
          <div
            class="tab-pane fade show active"
            id="pills-home"
            role="tabpanel"
            aria-labelledby="pills-home-tab"
          >
            <div class="p-3 border-bottom">
              <!-- Sidebar -->
              <h5 class="font-weight-medium mb-2 mt-2">Layout Settings</h5>
              <div class="form-check mt-3">
                <input
                  type="checkbox"
                  name="theme-view"
                  class="form-check-input"
                  id="theme-view"
                />
                <label class="form-check-label" for="theme-view">
                  <span>Dark Theme</span>
                </label>
              </div>
              <div class="form-check mt-2">
                <input
                  type="checkbox"
                  name="sidebar-position"
                  class="form-check-input"
                  id="sidebar-position"
                />
                <label class="form-check-label" for="sidebar-position">
                  <span>Fixed Sidebar</span>
                </label>
              </div>
              <div class="form-check mt-2">
                <input
                  type="checkbox"
                  name="header-position"
                  class="form-check-input"
                  id="header-position"
                />
                <label class="form-check-label" for="header-position">
                  <span>Fixed Header</span>
                </label>
              </div>
              <div class="form-check mt-2">
                <input
                  type="checkbox"
                  name="boxed-layout"
                  class="form-check-input"
                  id="boxed-layout"
                />
                <label class="form-check-label" for="boxed-layout">
                  <span>Boxed Layout</span>
                </label>
              </div>
            </div>
            <div class="p-3 border-bottom">
              <!-- Logo BG -->
              <h5 class="font-weight-medium mb-2 mt-2">Logo Backgrounds</h5>
              <ul class="theme-color m-0 p-0">
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-logobg="skin1"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-logobg="skin2"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-logobg="skin3"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-logobg="skin4"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-logobg="skin5"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-logobg="skin6"
                  ></a>
                </li>
              </ul>
              <!-- Logo BG -->
            </div>
            <div class="p-3 border-bottom">
              <!-- Navbar BG -->
              <h5 class="font-weight-medium mb-2 mt-2">Navbar Backgrounds</h5>
              <ul class="theme-color m-0 p-0">
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-navbarbg="skin1"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-navbarbg="skin2"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-navbarbg="skin3"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-navbarbg="skin4"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-navbarbg="skin5"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-navbarbg="skin6"
                  ></a>
                </li>
              </ul>
              <!-- Navbar BG -->
            </div>
            <div class="p-3 border-bottom">
              <!-- Logo BG -->
              <h5 class="font-weight-medium mb-2 mt-2">Sidebar Backgrounds</h5>
              <ul class="theme-color m-0 p-0">
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-sidebarbg="skin1"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-sidebarbg="skin2"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-sidebarbg="skin3"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-sidebarbg="skin4"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-sidebarbg="skin5"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-sidebarbg="skin6"
                  ></a>
                </li>
              </ul>
              <!-- Logo BG -->
            </div>
          </div>
          <!-- End Tab 1 -->
          <!-- Tab 2 -->
          <div
            class="tab-pane fade"
            id="chat"
            role="tabpanel"
            aria-labelledby="pills-profile-tab"
          >
            <ul class="mailbox list-style-none mt-3">
              <li>
                <div class="message-center chat-scroll position-relative">
                  <a
                    href="javascript:void(0)"
                    class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    "
                    id="chat_user_1"
                    data-user-id="1"
                  >
                    <span class="user-img position-relative d-inline-block">
                      <img
                        src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/assets/images/users/1.jpg"
                        alt="user"
                        class="rounded-circle w-100"
                      />
                      <span class="profile-status rounded-circle online"></span>
                    </span>
                    <div class="w-75 d-inline-block v-middle ps-3">
                      <h5 class="message-title mb-0 mt-1">Pavan kumar</h5>
                      <span
                        class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        "
                        >Just see the my admin!</span
                      >
                      <span class="fs-2 text-nowrap d-block text-muted"
                        >9:30 AM</span
                      >
                    </div>
                  </a>
                  <!-- Message -->
                  <a
                    href="javascript:void(0)"
                    class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    "
                    id="chat_user_2"
                    data-user-id="2"
                  >
                    <span class="user-img position-relative d-inline-block">
                      <img
                        src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/assets/images/users/2.jpg"
                        alt="user"
                        class="rounded-circle w-100"
                      />
                      <span class="profile-status rounded-circle busy"></span>
                    </span>
                    <div class="w-75 d-inline-block v-middle ps-3">
                      <h5 class="message-title mb-0 mt-1">Sonu Nigam</h5>
                      <span
                        class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        "
                        >I've sung a song! See you at</span
                      >
                      <span class="fs-2 text-nowrap d-block text-muted"
                        >9:10 AM</span
                      >
                    </div>
                  </a>
                  <!-- Message -->
                  <a
                    href="javascript:void(0)"
                    class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    "
                    id="chat_user_3"
                    data-user-id="3"
                  >
                    <span class="user-img position-relative d-inline-block">
                      <img
                        src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/assets/images/users/3.jpg"
                        alt="user"
                        class="rounded-circle w-100"
                      />
                      <span class="profile-status rounded-circle away"></span>
                    </span>
                    <div class="w-75 d-inline-block v-middle ps-3">
                      <h5 class="message-title mb-0 mt-1">Arijit Sinh</h5>
                      <span
                        class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        "
                        >I am a singer!</span
                      >
                      <span class="fs-2 text-nowrap d-block text-muted"
                        >9:08 AM</span
                      >
                    </div>
                  </a>
                  <!-- Message -->
                  <a
                    href="javascript:void(0)"
                    class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    "
                    id="chat_user_4"
                    data-user-id="4"
                  >
                    <span class="user-img position-relative d-inline-block">
                      <img
                        src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/assets/images/users/4.jpg"
                        alt="user"
                        class="rounded-circle w-100"
                      />
                      <span
                        class="profile-status rounded-circle offline"
                      ></span>
                    </span>
                    <div class="w-75 d-inline-block v-middle ps-3">
                      <h5 class="message-title mb-0 mt-1">Nirav Joshi</h5>
                      <span
                        class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        "
                        >Just see the my admin!</span
                      >
                      <span class="fs-2 text-nowrap d-block text-muted"
                        >9:02 AM</span
                      >
                    </div>
                  </a>
                  <!-- Message -->
                  <!-- Message -->
                  <a
                    href="javascript:void(0)"
                    class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    "
                    id="chat_user_5"
                    data-user-id="5"
                  >
                    <span class="user-img position-relative d-inline-block">
                      <img
                        src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/assets/images/users/5.jpg"
                        alt="user"
                        class="rounded-circle w-100"
                      />
                      <span
                        class="profile-status rounded-circle offline"
                      ></span>
                    </span>
                    <div class="w-75 d-inline-block v-middle ps-3">
                      <h5 class="message-title mb-0 mt-1">Sunil Joshi</h5>
                      <span
                        class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        "
                        >Just see the my admin!</span
                      >
                      <span class="fs-2 text-nowrap d-block text-muted"
                        >9:02 AM</span
                      >
                    </div>
                  </a>
                  <!-- Message -->
                  <!-- Message -->
                  <a
                    href="javascript:void(0)"
                    class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    "
                    id="chat_user_6"
                    data-user-id="6"
                  >
                    <span class="user-img position-relative d-inline-block">
                      <img
                        src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/assets/images/users/6.jpg"
                        alt="user"
                        class="rounded-circle w-100"
                      />
                      <span
                        class="profile-status rounded-circle offline"
                      ></span>
                    </span>
                    <div class="w-75 d-inline-block v-middle ps-3">
                      <h5 class="message-title mb-0 mt-1">Akshay Kumar</h5>
                      <span
                        class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        "
                        >Just see the my admin!</span
                      >
                      <span class="fs-2 text-nowrap d-block text-muted"
                        >9:02 AM</span
                      >
                    </div>
                  </a>
                  <!-- Message -->
                  <!-- Message -->
                  <a
                    href="javascript:void(0)"
                    class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    "
                    id="chat_user_7"
                    data-user-id="7"
                  >
                    <span class="user-img position-relative d-inline-block">
                      <img
                        src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/assets/images/users/7.jpg"
                        alt="user"
                        class="rounded-circle w-100"
                      />
                      <span
                        class="profile-status rounded-circle offline"
                      ></span>
                    </span>
                    <div class="w-75 d-inline-block v-middle ps-3">
                      <h5 class="message-title mb-0 mt-1">Pavan kumar</h5>
                      <span
                        class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        "
                        >Just see the my admin!</span
                      >
                      <span class="fs-2 text-nowrap d-block text-muted"
                        >9:02 AM</span
                      >
                    </div>
                  </a>
                  <!-- Message -->
                  <!-- Message -->
                  <a
                    href="javascript:void(0)"
                    class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    "
                    id="chat_user_8"
                    data-user-id="8"
                  >
                    <span class="user-img position-relative d-inline-block">
                      <img
                        src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/assets/images/users/8.jpg"
                        alt="user"
                        class="rounded-circle w-100"
                      />
                      <span
                        class="profile-status rounded-circle offline"
                      ></span>
                    </span>
                    <div class="w-75 d-inline-block v-middle ps-3">
                      <h5 class="message-title mb-0 mt-1">Varun Dhavan</h5>
                      <span
                        class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        "
                        >Just see the my admin!</span
                      >
                      <span class="fs-2 text-nowrap d-block text-muted"
                        >9:02 AM</span
                      >
                    </div>
                  </a>
                  <!-- Message -->
                </div>
              </li>
            </ul>
          </div>
          <!-- End Tab 2 -->
          <!-- Tab 3 -->
          <div
            class="tab-pane fade p-3"
            id="pills-contact"
            role="tabpanel"
            aria-labelledby="pills-contact-tab"
          >
            <h6 class="mt-3 mb-3">Activity Timeline</h6>
            <div class="steamline">
              <div class="sl-item">
                <div class="sl-left bg-light-success text-success">
                  <i data-feather="user" class="feather-sm fill-white"></i>
                </div>
                <div class="sl-right">
                  <div class="font-weight-medium">
                    Meeting today <span class="sl-date"> 5pm</span>
                  </div>
                  <div class="desc">you can write anything</div>
                </div>
              </div>
              <div class="sl-item">
                <div class="sl-left bg-light-info text-info">
                  <i data-feather="camera" class="feather-sm fill-white"></i>
                </div>
                <div class="sl-right">
                  <div class="font-weight-medium">Send documents to Clark</div>
                  <div class="desc">Lorem Ipsum is simply</div>
                </div>
              </div>
              <div class="sl-item">
                <div class="sl-left">
                  <img
                    class="rounded-circle"
                    alt="user"
                    src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/assets/images/users/2.jpg"
                  />
                </div>
                <div class="sl-right">
                  <div class="font-weight-medium">
                    Go to the Doctor <span class="sl-date">5 minutes ago</span>
                  </div>
                  <div class="desc">Contrary to popular belief</div>
                </div>
              </div>
              <div class="sl-item">
                <div class="sl-left">
                  <img
                    class="rounded-circle"
                    alt="user"
                    src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/assets/images/users/1.jpg"
                  />
                </div>
                <div class="sl-right">
                  <div>
                    <a href="javascript:void(0)">Stephen</a>
                    <span class="sl-date">5 minutes ago</span>
                  </div>
                  <div class="desc">Approve meeting with tiger</div>
                </div>
              </div>
              <div class="sl-item">
                <div class="sl-left bg-light-primary text-primary">
                  <i data-feather="user" class="feather-sm fill-white"></i>
                </div>
                <div class="sl-right">
                  <div class="font-weight-medium">
                    Meeting today <span class="sl-date"> 5pm</span>
                  </div>
                  <div class="desc">you can write anything</div>
                </div>
              </div>
              <div class="sl-item">
                <div class="sl-left bg-light-info text-info">
                  <i data-feather="send" class="feather-sm fill-white"></i>
                </div>
                <div class="sl-right">
                  <div class="font-weight-medium">Send documents to Clark</div>
                  <div class="desc">Lorem Ipsum is simply</div>
                </div>
              </div>
              <div class="sl-item">
                <div class="sl-left">
                  <img
                    class="rounded-circle"
                    alt="user"
                    src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/assets/images/users/4.jpg"
                  />
                </div>
                <div class="sl-right">
                  <div class="font-weight-medium">
                    Go to the Doctor <span class="sl-date">5 minutes ago</span>
                  </div>
                  <div class="desc">Contrary to popular belief</div>
                </div>
              </div>
              <div class="sl-item">
                <div class="sl-left">
                  <img
                    class="rounded-circle"
                    alt="user"
                    src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/assets/images/users/6.jpg"
                  />
                </div>
                <div class="sl-right">
                  <div>
                    <a href="javascript:void(0)">Stephen</a>
                    <span class="sl-date">5 minutes ago</span>
                  </div>
                  <div class="desc">Approve meeting with tiger</div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Tab 3 -->
        </div>
      </div>
    </aside>
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
    @yield('js')
  </body>
</html>
