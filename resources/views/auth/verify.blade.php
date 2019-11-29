<!DOCTYPE html>
<html dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.png') }}">
        <title>Matrix Template - The Ultimate Multipurpose admin template</title>
        <!-- Custom CSS -->
        <link href="{{ asset('dist/css/style.min.css') }}" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>

    <body>
        <div class="main-wrapper">
            <!-- Preloader - style you can find in spinners.css -->
            <div class="preloader">
                <div class="lds-ripple">
                    <div class="lds-pos"></div>
                    <div class="lds-pos"></div>
                </div>
            </div>
            @if (session('resent'))
                <div class="alert alert-success" role="alert">
                    {{ __('A fresh verification link has been sent to your email address.') }}
                </div>
            @endif
            <div class="error-box">
                <div class="error-body text-center">
                    <h2 class="text-uppercase error-subtitle">{{ __('Verify Your Email Address') }}</h2>
                    <p class="m-t-30 m-b-30">{{ __('Before proceeding, please check your email for a verification link.') }}</p>
                    <p class="m-t-30 m-b-30">{{ __('If you did not receive the email') }}</p>
                    <a href="{{ route('verification.resend') }}" class="btn btn-danger btn-rounded waves-effect waves-light m-b-40">{{ __('click here to request another') }}</a>
                </div>
            </div>
        </div>
        <!-- All Required js -->
        <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="{{ asset('assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
        <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script>
            $('[data-toggle="tooltip"]').tooltip();
            $(".preloader").fadeOut();
        </script>
    </body>
</html>