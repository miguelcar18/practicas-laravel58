<!DOCTYPE html>
<html dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="title" content="@yield('page-title') | {{ config('app.name', 'Eventos felice') }}">
        <meta description="@yield('page-description')">

        <title>@yield('page-title') | {{ config('app.name', 'Eventos felice') }}</title>

        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.png') }}">
        <!-- Custom CSS -->
        <link href="{{ asset('dist/css/style.min.css') }}" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        @yield('styles')
    </head>
    <body>
        <div class="main-wrapper">
            @include('layouts.preloader')
            <div class="auth-wrapper d-flex no-block justify-content-center align-items-center bg-dark">
                <div class="auth-box bg-dark border-top border-secondary">
                    @yield('page-content')
                </div>
            </div>
        </div>
        <!-- All Required js -->
        <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js')  }}"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="{{ asset('assets/libs/popper.js/dist/umd/popper.min.js')  }}"></script>
        <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.min.js')  }}"></script>
        <script type="text/javascript">
            $('[data-toggle="tooltip"]').tooltip();
            $(".preloader").fadeOut();
        </script>
        @yield('scripts')
    </body>
</html>
