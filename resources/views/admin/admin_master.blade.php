<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Dashboard | Upcube - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('/backend/assets/images/favicon.ico')}}">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.css" >
        <!-- jquery.vectormap css -->
        <link href="{{asset('/backend/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css')}} " rel="stylesheet" type="text/css" />

        <!-- DataTables -->
        <link href="{{asset('/backend/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}} " rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="{{asset('/backend/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}} " rel="stylesheet" type="text/css" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Bootstrap Css -->
        <link href="{{asset('/backend/assets/css/bootstrap.min.css')}} " id="bootstrap-style" rel="stylesheet" type="text/css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> --}}
        <!-- Icons Css -->
        <link href="{{asset('/backend/assets/css/icons.min.css')}} " rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('/backend/assets/css/app.min.css')}} " id="app-style" rel="stylesheet" type="text/css" />
        {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pizza/0.0.1/app.min.css"> --}}


    </head>

    <body data-topbar="dark">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            @include('admin.body.header')

            <!-- ========== Left Sidebar Start ========== -->
            @include('admin.body.sidebar')
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                @yield('admin')
                <!-- End Page-content -->

               @include('admin.body.footer')

            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title d-flex align-items-center px-3 py-4">

                    <h5 class="m-0 me-2">Settings</h5>

                    <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                </div>

                <!-- Settings -->
                <hr class="mt-0" />
                <h6 class="text-center mb-0">Choose Layouts</h6>

                <div class="p-4">
                    <div class="mb-2">
                        <img src="{{asset('/backend/assets/images/layouts/layout-1.jpg')}} " class="img-fluid img-thumbnail" alt="layout-1">
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked>
                        <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                    </div>

                    <div class="mb-2">
                        <img src="{{asset('/backend/assets/images/layouts/layout-2.jpg')}} " class="img-fluid img-thumbnail" alt="layout-2">
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch" data-bsStyle="{{asset('/backend/')}} assets/css/bootstrap-dark.min.css" data-appStyle="{{asset('/backend/assets/css/app-dark.min.css')}} ">
                        <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                    </div>

                    <div class="mb-2">
                        <img src="{{asset('/backend/assets/images/layouts/layout-3.jpg')}} " class="img-fluid img-thumbnail" alt="layout-3">
                    </div>
                    <div class="form-check form-switch mb-5">
                        <input class="form-check-input theme-choice" type="checkbox" id="rtl-mode-switch" data-appStyle="{{asset('/backend/assets/css/app-rtl.min.css')}} ">
                        <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>


                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        {{-- <script src="{{asset('/backend/assets/libs/jquery/jquery.min.js')}} "></script> --}}
        <script src="{{asset('/backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}} "></script>

        <script src="{{asset('/backend/assets/libs/metismenu/metisMenu.min.js')}} "></script>
        <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

        <script src="{{asset('/backend/assets/libs/simplebar/simplebar.min.js')}} "></script>
        <script src="{{asset('/backend/assets/libs/node-waves/waves.min.js')}} "></script>


        <!-- apexcharts -->
        <script src="{{asset('/backend/assets/libs/apexcharts/apexcharts.min.js')}} "></script>
        <!-- jquery.vectormap map -->
        <script src="{{asset('/backend/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js')}} "></script>
        <script src="{{asset('/backend/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js')}} "></script>

        <!-- Required datatable js -->
        <script src="{{asset('/backend/assets/libs/datatables.net/js/jquery.dataTables.min.js')}} "></script>
        <script src="{{asset('/backend/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}} "></script>

        <!-- Responsive examples -->
        <script src="{{asset('/backend/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}} "></script>
        <script src="{{asset('/backend/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}} "></script>

        <script src="{{asset('/backend/assets/js/pages/dashboard.init.js')}} "></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!-- App js -->
        <script src="{{asset('/backend/assets/js/app.js')}} "></script>
        @yield('end-script')

        <script>
            @if (Session::has('message'))

                var type = "{{ Session::get('alert-type', 'info') }}"

                switch (type) {
                    case 'info':
                        toastr.info("{{ Session::get('message') }}")
                        break;


                    case 'success':
                        toastr.success("{{ Session::get('message') }}")
                        break;


                    case 'warning':
                        toastr.warning("{{ Session::get('message') }}")
                        break;

                    case 'error':
                        toastr.error(" {{ Session::get('message') }} ")
                        break;

                }
            @endif
        </script>


        <!--tinymce js-->
        <script src="{{ asset('/backend/assets/libs/tinymce/tinymce.min.js') }}"></script>

         <!-- Required datatable js -->
         <script src="{{asset('/backend/assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
         <script src="{{asset('/backend/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>


          <!-- Datatable init js -->
          <script src="{{asset('/backend/assets/js/pages/datatables.init.js')}}"></script>

        <!-- init js -->
        <script src="{{ asset('/backend/assets/js/pages/form-editor.init.js') }}"></script>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

 <script src="{{ asset('backend/assets/js/code.js') }}"></script>
 <script src="{{ asset('backend/assets/js/validate.min.js') }}" ></script>

 <script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.min.js" ></script>

</body>

</html>
