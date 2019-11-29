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
        <style type="text/css">
            .label-error{
                color: #ffa500;
                font-weight: bold;
            }
            .label-success{
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <div class="main-wrapper">
            @include('layouts.preloader')
            <div class="auth-wrapper d-flex no-block justify-content-center align-items-center bg-dark">
                <div class="auth-box bg-dark border-top border-secondary">
                    <div id="loginform">
                        <div class="text-center">
                            <span class="text-white">Enter your e-mail address below and we will send you instructions how to recover a password.</span>
                        </div>
                        <div class="row m-t-20">
                            @if (session('status'))
                                <div class="input-group label-success mb-3">{{ session('status') }}</div>
                            @endif
                            <!-- Form -->
                            {!! Form::open(['route' => ['password.email'], 'class' => 'col-12']) !!}
                                <!-- email -->
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-danger text-white" id="basic-addon1"><i class="ti-email"></i></span>
                                    </div>
                                    {!! Form::email('email', old('email'), ['class' => 'form-control form-control-lg', 'placeholder' => "Email Address", 'aria-label' => "Username", 'aria-describedby' => "basic-addon1", 'required' => true]) !!}
                                </div>
                                @error('email')
                                    <div class="input-group label-error mb-3">{{ $message }}</div>
                                @enderror
                                <!-- pwd -->
                                <div class="row m-t-20 p-t-20 border-top border-secondary">
                                    <div class="col-12">
                                        <a class="btn btn-success" href="{{ route('login') }}" id="to-login" name="action">Back To Login</a>
                                        {!! Form::submit('Recover', ['class' => 'btn btn-info float-right']) !!}
                                    </div>
                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- All Required js -->
        <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js')  }}"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="{{ asset('assets/libs/popper.js/dist/umd/popper.min.js')  }}"></script>
        <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.min.js')  }}"></script>
        <script>
            $('[data-toggle="tooltip"]').tooltip();
            $(".preloader").fadeOut();
        </script>
    </body>
</html>