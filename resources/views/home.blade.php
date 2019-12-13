<!DOCTYPE html>
<html dir="ltr" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="title" content="@yield('page-title') | {{ config('app.name', 'Eventos felices') }}">
        <meta description="@yield('page-description')">

        <title>@yield('page-title') | {{ config('app.name', 'Eventos felices') }}</title>

        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.png') }}">
        <!-- Custom CSS -->
        <link href="{{ asset('assets/libs/fullcalendar/dist/fullcalendar.min.css') }}" rel="stylesheet" />
        <!--Sweet Alert -->
        <link href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet">
        <!--Datatables -->
        <link href="{{ asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet">
        <!--Toastr -->
        <link href="{{ asset('assets/libs/toastr/build/toastr.min.css') }}" rel="stylesheet">

        <link href="{{ asset('assets/extra-libs/calendar/calendar.css') }}" rel="stylesheet" />
        <link href="{{ asset('dist/css/style.min.css') }}" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
        @section('styles')
        @show
    </head>
    <body>
        @include('layouts.preloader')
        <div id="main-wrapper">
            @include('layouts.header')
            @include('layouts.sidebar')
            <div class="page-wrapper">
                @section('page-content')
                @include('layouts.breadcrum')
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Full Width</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @show
                @include('layouts.footer')
            </div>
        </div>

        <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="{{ asset('assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
        <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <!-- slimscrollbar scrollbar JavaScript -->
        <script src="{{ asset('assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
        <script src="{{ asset('assets/extra-libs/sparkline/sparkline.js') }}"></script>
        <!--Wave Effects -->
        <script src="{{ asset('dist/js/waves.js') }}"></script>
        <!--Menu sidebar -->
        <script src="{{ asset('dist/js/sidebarmenu.js') }}"></script>
        <!--Moment -->
        <script src="{{ asset('assets/extra-libs/moment/moment.js') }}"></script>
        <!--Sweet alert -->
        <script src="{{ asset('assets/libs/sweetalert2/sweetalert2.all.min.js') }}"></script>
        <!--Datatables -->
        <script src="{{ asset('assets/extra-libs/DataTables/datatables.min.js') }}"></script>
        <!--Toastr -->
        <script src="{{ asset('assets/libs/toastr/build/toastr.min.js') }}"></script>

        <!--Custom JavaScript -->
        <script src="{{ asset('dist/js/custom.js') }}"></script>
        <script type="text/javascript">
            @if(!empty($success = $success ?? session()->get('success')))
            toastr.success('{{ $success }}', '');
            @endif
            @if(!empty($error = $error ?? session()->get('error')))
            toastr.error('', '{{ $error }}');
            @endif
        </script>
        @section('scripts')
        @show
    </body>
</html>