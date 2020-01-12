@extends('auth.layouts.master')

@section('page-title')
    {{ trans('pages/reset-password.meta.title') }}
@endsection

@section('page-content')
    <div>
        <div class="text-center p-t-20 p-b-20">
            <span class="db"><img src="{{ asset('assets/images/logo.png') }}" alt="logo" /></span>
        </div>
        <!-- Form -->
        {!! Form::open(['route' => ['password.update'], 'method' => 'POST']) !!}
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
            <div class="row p-b-30">
                <div class="col-12">
                    <!-- email -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-danger text-white" id="basic-addon1"><i class="mdi mdi-email"></i></span>
                        </div>
                        {!! Form::email('email', $email ?? old('email'), ['class' => 'form-control form-control-lg', 'placeholder' => trans('pages/reset-password.fields.email'), 'aria-label' => trans('pages/reset-password.fields.email'), 'aria-describedby' => "basic-addon1", 'required' => true]) !!}
                    </div>
                    @error('email')
                    <div class="input-group label-error mb-3">{{ $message }}</div>
                    @enderror

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-warning text-white" id="basic-addon2"><i class="mdi mdi-key"></i></span>
                        </div>
                        {!! Form::password('password', ['class' => 'form-control form-control-lg', 'placeholder' => trans('pages/reset-password.fields.password'), 'aria-label' => trans('pages/reset-password.fields.password'), 'aria-describedby' => "basic-addon1", 'required' => true]) !!}
                    </div>
                    @error('password')
                    <div class="input-group label-error mb-3">{{ $message }}</div>
                    @enderror
                    
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-info text-white" id="basic-addon2"><i class="mdi mdi-key"></i></span>
                        </div>
                        {!! Form::password('password_confirmation', ['class' => 'form-control form-control-lg', 'placeholder' => trans('pages/reset-password.fields.password_confirmation'), 'aria-label' => trans('pages/reset-password.fields.password_confirmation'), 'aria-describedby' => "basic-addon1", 'required' => true]) !!}
                    </div>
                </div>
            </div>
            <div class="row border-top border-secondary">
                <div class="col-12">
                    <div class="form-group">
                        <div class="p-t-20">
                            {!! Form::submit(trans('pages/reset-password.fields.submit'), ['class' => 'btn btn-block btn-lg btn-info']) !!}
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