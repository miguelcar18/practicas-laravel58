@extends('auth.layouts.master')

@section('page-title')
    {{ trans('pages/login.meta.title') }}
@endsection

@section('page-content')
    <div id="loginform">
        <div class="text-center p-t-20 p-b-20">
            <span class="db"><img src="{{ asset('assets/images/logo.png') }}" alt="logo" /></span>
        </div>
        <!-- Form -->
        {!! Form::open(['route' => ['login'], 'class' => 'form-horizontal m-t-20', 'id' => 'loginform']) !!}
            <div class="row p-b-30">
                <div class="col-12">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-success text-white" id="basic-addon1"><i class="mdi mdi-account"></i></span>
                        </div>
                        {!! Form::email('email', old('email'), ['class' => 'form-control form-control-lg', 'placeholder' => trans('pages/login.fields.email'), 'aria-label' => trans('pages/login.fields.email'), 'aria-describedby' => "basic-addon1", 'required' => true]) !!}
                    </div>
                    @error('email')
                    <div class="input-group label-error mb-3">{{ $message }}</div>
                    @enderror
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-warning text-white" id="basic-addon2"><i class="mdi mdi-key-variant"></i></span>
                        </div>
                        {!! Form::password('password', ['class' => 'form-control form-control-lg', 'placeholder' => trans('pages/login.fields.password'), 'aria-label' => trans('pages/login.fields.password'), 'aria-describedby' => "basic-addon1", 'required' => true]) !!}
                    </div>
                    @error('password')
                    <div class="input-group label-error mb-3">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row border-top border-secondary">
                <div class="col-12">
                    <div class="form-group">
                        <div class="p-t-20">
                            <a href="{{ route('password.request') }}" class="btn btn-info">
                                <i class="fa fa-lock m-r-5"></i> {{ trans('pages/login.links.reset_password') }}
                            </a>
                            <a href="{{ route('register') }}" class="btn btn-light">
                                {{ trans('pages/login.links.create_account') }}
                            </a>
                            {!! Form::submit(trans('pages/login.fields.submit'), ['class' => 'btn btn-success float-right']) !!}
                        </div>
                    </div>
                </div>
            </div>
        {!! Form::close() !!}
    </div>
@endsection

@section('styles')
    <style type="text/css">
        .label-error{
            color: #ffa500;
            font-weight: bold;
        }
    </style>
@endsection

@section('scripts')
@endsection
