@extends('auth.layouts.master')

@section('page-title')
    {{ trans('pages/forgot-password.meta.title') }}
@endsection

@section('page-content')

    <div id="loginform">
        <div class="text-center">
            <span class="text-white">{{ trans('pages/forgot-password.content.message') }}</span>
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
                        <span class="input-group-text bg-danger text-white" id="basic-addon1"><i class="mdi mdi-email"></i></span>
                    </div>
                    {!! Form::email('email', old('email'), ['class' => 'form-control form-control-lg', 'placeholder' => trans('pages/forgot-password.fields.email'), 'aria-label' => trans('pages/forgot-password.fields.email'), 'aria-describedby' => "basic-addon1", 'required' => true]) !!}
                </div>
                @error('email')
                    <div class="input-group label-error mb-3">{{ $message }}</div>
                @enderror
                <!-- pwd -->
                <div class="row m-t-20 p-t-20 border-top border-secondary">
                    <div class="col-12">
                        <a class="btn btn-light" href="{{ route('login') }}" id="to-login" name="action">{{ trans('pages/forgot-password.links.login') }}</a>
                        {!! Form::submit(trans('pages/forgot-password.fields.submit'), ['class' => 'btn btn-info float-right']) !!}
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>

@endsection

@section('styles')
    <style type="text/css">
        .label-error{
            color: #ffa500;
            font-weight: bold;
        }
        .label-success{
            font-weight: bold;
        }
    </style>
@endsection

@section('scripts')
@endsection