@extends('auth.layouts.master')

@section('page-title')
    {{ trans('pages/register.meta.title') }}
@endsection

@section('page-content')
    <div>
        <div class="text-center p-t-20 p-b-20">
            <span class="db"><img src="{{ asset('assets/images/logo.png') }}" alt="logo" /></span>
        </div>
        <!-- Form -->
        {!! Form::open(['route' => ['register']]) !!}
            <div class="row p-b-30">
                <div class="col-12">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-success text-white" id="basic-addon1"><i class="mdi mdi-account"></i></span>
                        </div>
                        {!! Form::text('name', old('name'), ['class' => 'form-control form-control-lg', 'placeholder' => trans('pages/register.fields.name'), 'aria-label' => trans('pages/register.fields.name'), 'aria-describedby' => "basic-addon1", 'required' => true]) !!}
                    </div>
                    @error('name')
                    <div class="input-group label-error mb-3">{{ $message }}</div>
                    @enderror

                    <!-- email -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-danger text-white" id="basic-addon1"><i class="mdi mdi-email"></i></span>
                        </div>
                        {!! Form::email('email', old('email'), ['class' => 'form-control form-control-lg', 'placeholder' => trans('pages/register.fields.email'), 'aria-label' => trans('pages/register.fields.email'), 'aria-describedby' => "basic-addon1", 'required' => true]) !!}
                    </div>
                    @error('email')
                    <div class="input-group label-error mb-3">{{ $message }}</div>
                    @enderror

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-warning text-white" id="basic-addon2"><i class="mdi mdi-key-variant"></i></span>
                        </div>
                        {!! Form::password('password', ['class' => 'form-control form-control-lg', 'placeholder' => trans('pages/register.fields.password'), 'aria-label' => trans('pages/register.fields.password'), 'aria-describedby' => "basic-addon1", 'required' => true]) !!}
                    </div>
                    @error('password')
                    <div class="input-group label-error mb-3">{{ $message }}</div>
                    @enderror
                    
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-info text-white" id="basic-addon2"><i class="mdi mdi-key-variant"></i></span>
                        </div>
                        {!! Form::password('password_confirmation', ['class' => 'form-control form-control-lg', 'placeholder' => trans('pages/register.fields.password_confirmation'), 'aria-label' => trans('pages/register.fields.password_confirmation'), 'aria-describedby' => "basic-addon1", 'required' => true]) !!}
                    </div>
                </div>
            </div>
            <div class="row border-top border-secondary">
                <div class="col-12">
                    <div class="form-group">
                        <div class="p-t-20">
                            <a href="{{ route('login') }}" class="btn btn-light">
                                {{ trans('pages/register.links.login') }}
                            </a>
                            {!! Form::submit(trans('pages/register.fields.submit'), ['class' => 'btn btn-info float-right']) !!}
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


