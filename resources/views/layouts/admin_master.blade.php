<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>@yield('page_title')</title>

    <meta name="description" content="" />


    <style>
      .swal2-container{
        z-index: 9999 !important;
      }
    </style>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('backend/assets/img/favicon/favicon.ico') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    {{-- FONT AWESOME  --}}
    <link rel="stylesheet" href="{{ asset('backend/assets/css/fontAesome.css') }}">


    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/fonts/boxicons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/css/theme-default.css') }}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('backend/assets/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/libs/apex-charts/apex-charts.css') }}" />

    
    
    <!-- Page CSS -->
    @stack('additional_css')
    <!-- Helpers -->
    <script src="{{ asset('backend/assets/vendor/js/helpers.js') }}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('backend/assets/js/config.js') }}"></script>
  </head>

  <body>
    {{-- sweet aleart  --}}
    @include('sweetalert::alert')
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="{{ route('admin.dashboard') }}" class="app-brand-link  w-100 d-flex justify-content-center">
              
              <span class="app-brand-text demo menu-text fw-bolder ms-2">
                <img style="width: 50px" src="{{ asset('custom_img/ete.png') }}" alt="">
              </span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            

          
            @if (auth('admin')->user()->can(['Administrator']))

                          <!-- Dashboard -->
                          <li class="menu-item {{ Route::is('admin.dashboard') ? 'active' : '' }}">
                            <a href="{{ route('admin.dashboard') }}" class="menu-link">
                              <i class="menu-icon tf-icons bx bx-home-circle"></i>
                              <div data-i18n="Analytics">Dashboard</div>
                            </a>
                          </li>
                          
                          {{-- ROLE START --}}
                          <li class="menu-item" style="">
                            <a href="javascript:void(0);" class="menu-link menu-toggle">
                              <i style="font-size: 18px;" class="fa-solid fa-list-check"></i>&nbsp;&nbsp;
                              <div data-i18n="Layouts">Role Assign</div>
                            </a>

                            <ul class="menu-sub">

                              <li class="menu-item">
                                <a href="{{ route('admin.role.create') }}" class="menu-link">
                                  <div data-i18n="Without menu">add role</div>
                                </a>
                              </li>
                              <li class="menu-item">
                                <a href="{{ route('admin.role.list') }}" class="menu-link">
                                  <div data-i18n="Without menu">Role List</div>
                                </a>
                              </li>
                            </ul>
                          </li>
                     

                                
                          {{-- EMPLOYEE START --}}
                          <li class="menu-item" style="">
                            <a href="javascript:void(0);" class="menu-link menu-toggle">
                              <i class="fa-solid fa-people-group"></i> &nbsp; &nbsp;&nbsp;
                              <div data-i18n="Layouts">Employee</div>
                            </a>

                            <ul class="menu-sub">

                              <li class="menu-item">
                                <a href="{{ route('admin.employee.create') }}" class="menu-link">
                                  <div data-i18n="Without menu">add employee</div>
                                </a>
                              </li>
                              <li class="menu-item">
                                <a href="{{ route('admin.employee.show') }}" class="menu-link">
                                  <div data-i18n="Without menu">employee list</div>
                                </a>
                              </li>
                            </ul>
                          </li>
                          
            @endif


            @if (auth('admin')->user()->canany(['Teacher']))
                          {{-- NOTICE START --}}
                          <li class="menu-item" style="">
                            <a href="javascript:void(0);" class="menu-link menu-toggle">
                              <i style="font-size: 18px;" class="fa-solid fa-note-sticky"></i> &nbsp; &nbsp;&nbsp;
                              <div data-i18n="Layouts">Notice</div>
                            </a>
                      
                            <ul class="menu-sub">
                      
                              <li class="menu-item">
                                <a href="{{ route('admin.notice.create') }}" class="menu-link">
                                  <div data-i18n="Without menu">add notice</div>
                                </a>
                              </li>
                              <li class="menu-item">
                                <a href="{{ route('admin.notice.show') }}" class="menu-link">
                                  <div data-i18n="Without menu">notice list</div>
                                </a>
                              </li>
                            </ul>
                          </li>


                          {{-- ROUTINE START --}}
                          <li class="menu-item">
                            <a href="javascript:void(0);" class="menu-link menu-toggle">
                              <i style="font-size: 18px;" class="fa-solid fa-bell"></i> &nbsp; &nbsp;
                              <div data-i18n="Front Pages">Routine</div>
                            </a>
                            <ul class="menu-sub">
                                <li class="menu-item">
                                  <a href="{{ route('admin.routine.create') }}" class="menu-link">
                                    <div data-i18n="Landing">Add Routine</div>
                                  </a>
                                </li>
                                <li class="menu-item">
                                  <a href="{{ route('admin.routine.list') }}" class="menu-link">
                                    <div data-i18n="Pricing">Routine List</div>
                                  </a>
                                </li>
                            </ul>
                          </li>


                          {{-- NEWS AND EVENT  START --}}
                          <li class="menu-item" style="">
                            <a href="javascript:void(0);" class="menu-link menu-toggle">
                              <i style="font-size: 18px;" class="fa-solid fa-newspaper"></i> &nbsp; &nbsp;&nbsp;
                              <div data-i18n="Layouts">Event's</div>
                            </a>

                            <ul class="menu-sub">

                              <li class="menu-item">
                                <a href="{{ route('admin.event.create') }}" class="menu-link">
                                  <div data-i18n="Without menu">Add new event</div>
                                </a>
                              </li>
                              <li class="menu-item">
                                <a href="{{ route('admin.event.list') }}" class="menu-link">
                                  <div data-i18n="Without menu">Event list</div>
                                </a>
                              </li>
                            </ul>
                          </li>

                          
                          {{-- ATTENDANCE START --}}
                          <li class="menu-item">
                            <a href="javascript:void(0);" class="menu-link menu-toggle">
                              <i style="font-size: 18px;" class="fa-solid fa-pen-nib"></i>&nbsp;&nbsp;
                              <div data-i18n="Front Pages">Attendance</div>
                            </a>
                            <ul class="menu-sub">
                                
                                <li class="menu-item">
                                  <a href="{{ route('add.new.batch') }}" class="menu-link">
                                    <div data-i18n="Pricing">Add Batch</div>
                                  </a>
                                </li>

                                <li class="menu-item">
                                  <a href="{{ route('admit.student') }}" class="menu-link">
                                    <div data-i18n="Pricing">Admit Student</div>
                                  </a>
                                </li>

                                <li class="menu-item">
                                  <a href="{{ route('admited.student') }}" class="menu-link">
                                    <div data-i18n="Pricing">Student List</div>
                                  </a>
                                </li>


                                


                                <li class="menu-item">
                                  <a href="{{ route('present.students') }}" class="menu-link">
                                    <div data-i18n="Pricing">Provide Attendance</div>
                                  </a>
                                </li>



                                <li class="menu-item">
                                  <a href="{{ route('attendance.record.check') }}" class="menu-link">
                                    <div data-i18n="Pricing">Edit Attendance</div>
                                  </a>
                                </li>



                                <li class="menu-item">
                                  <a href="{{ route('atteandance.records') }}" class="menu-link">
                                    <div data-i18n="Pricing">All Records</div>
                                  </a>
                                </li>



                                <li class="menu-item">
                                  <a href="{{ route('attendance.pdf') }}" class="menu-link">
                                    <div data-i18n="Pricing">PDF download</div>
                                  </a>
                                </li>



                            </ul>
                          </li>


                          {{-- CONTACT START --}}
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i style="font-size: 18px" class="fa-solid fa-location-dot"></i> &nbsp; &nbsp;
                <div data-i18n="Front Pages">Contact</div>
              </a>
              <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="{{ route('admin.contact.create') }}" class="menu-link">
                      <div data-i18n="Landing">Creact Contact</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="{{ route('admin.contact.list') }}" class="menu-link">
                      <div data-i18n="Pricing">Contact List</div>
                    </a>
                  </li>
              </ul>
            </li>


            
            {{-- ABOUT START --}}
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i style="font-size: 18px;" class="fa-solid fa-address-card"></i> &nbsp;&nbsp;
                <div data-i18n="Front Pages">About</div>
              </a>
              <ul class="menu-sub">
                  
                  <li class="menu-item">
                    <a href="{{ route('admin.about.galary') }}" class="menu-link">
                      <div data-i18n="Pricing">About Galary</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="{{ route('admin.list.about.galary') }}" class="menu-link">
                      <div data-i18n="Pricing">Galary List</div>
                    </a>
                  </li>
              </ul>
            </li>


            {{-- CATEGORY START --}}
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i style="font-size: 18px;" class="fa-solid fa-address-card"></i> &nbsp;&nbsp;
                <div data-i18n="Front Pages">Category</div>
              </a>
              <ul class="menu-sub">
                  
                  <li class="menu-item">
                    <a href="{{ route('admin.create.category') }}" class="menu-link">
                      <div data-i18n="Pricing">Add Category</div>
                    </a>
                  </li>
              </ul>
            </li>


            {{-- COURSE'S --}}
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i style="font-size: 18px;" class="fa-solid fa-address-card"></i> &nbsp;&nbsp;
                <div data-i18n="Front Pages">Course's</div>
              </a>
              <ul class="menu-sub">
                  
                  <li class="menu-item">
                    <a href="{{ route('admin.create.class') }}" class="menu-link">
                      <div data-i18n="Pricing">Create Class</div>
                    </a>
                  </li>
                 
                  <li class="menu-item">
                    <a href="{{ route('admin.list.course') }}" class="menu-link">
                      <div data-i18n="Pricing">Assign Course</div>
                    </a>
                  </li>

                  
                  <li class="menu-item">
                    <a href="{{ route('admin.add.course.lecture') }}" class="menu-link">
                      <div data-i18n="Pricing">Course Lecture</div>
                    </a>
                  </li>
                  

                  <li class="menu-item">
                    <a href="{{ route('admin.list.lecture') }}" class="menu-link">
                      <div data-i18n="Pricing">List Lecture's</div>
                    </a>
                  </li>


                  
              </ul>
            </li>
            @endif


            


            

            

            
            
            {{-- IMAGE START --}}
            <li class="menu-item">
              <a href="{{ route('admin.image.index') }}" class="menu-link">
                <i style="font-size: 18px" class="fa-regular fa-image"></i> &nbsp; &nbsp;
                <div data-i18n="Basic">Image Upload</div>
              </a>
            </li>


            {{-- VIDEO START --}}
            <li class="menu-item">
              <a href="{{ route('admin.video.index') }}" class="menu-link">
                <i style="font-size: 18px" class="fa-brands fa-youtube"></i>  &nbsp; &nbsp;
                <div data-i18n="Basic">Video Link</div>
              </a>
            </li>
            {{-- VIDEO END  --}}


            </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme position-sticky" id="layout-navbar">
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              @yield('search')
              <!-- /Search -->
              {{-- <a target="_blank" href="{{ route('frontend.home') }}" class="btn btn-primary ms-4">Visit Website</a> --}}

              <ul class="navbar-nav flex-row align-items-center ms-auto">

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">



                      <img src="{{ auth()->guard('admin')->user()? auth()->guard('admin')->user()->employee_image: env('DICEBEAR') .auth()->guard('admin')->user()->name }}" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="{{ route('admin.profile') }}">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="{{ auth()->guard('admin')->user()? auth()->guard('admin')->user()->employee_image: env('DICEBEAR') .auth()->guard('admin')->user()->name }}" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block">{{ Auth::guard('admin')->user()->name }}</span>
                            {{-- <small class="text-muted">{{ Auth::guard('admin')->user()->name }}</small> --}}
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="{{ route('admin.profile') }}">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <span class="d-flex align-items-center align-middle">
                          <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                          <span class="flex-grow-1 align-middle">Billing</span>
                          <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#logout_modal">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </button>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
                @yield('admin_main_content')
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between align-items-center py-2 flex-md-row flex-column">
                
                <div>
                  <p class="m-0">
                    Developed by
                    <a href="https://www.visionarytechbd.com" class="footer-link fw-bolder" target="_blank">
                      ...
                    </a>
                  </p>
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    {{-- Logout Modal --}}
    <div class="modal fade" id="logout_modal" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel2">Are you sure you want to log out?</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                Cancel
              </button>
              <a href="{{ route('admin.logout') }}" class="btn btn-primary">Logout</a>
            </div>
          </div>
        </div>
      </div>

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    
    <script src="{{ asset('backend/assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <script src="{{ asset('backend/assets/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('backend/assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('backend/assets/js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('backend/assets/js/dashboards-analytics.js') }}"></script>
    @stack('additional_js')
  </body>
</html>
