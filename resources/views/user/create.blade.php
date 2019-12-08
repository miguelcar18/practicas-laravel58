@extends('home')

@section('page-title')
    {{ trans('pages/user.create.page_title') }}
@endsection

@section('page-content')
@include('layouts.breadcrum', ['title' => trans('pages/user.create.breadcrumb')])

<div class="container-fluid">
	<div class="row">
	    <div class="col-md-12">
	        <div class="card">
	            {!! Form::open(['route' => ['user.store'], 'class' => 'form-horizontal']) !!}
	                <div class="card-body">
	                    <div class="form-group row">
	                        <label for="name" class="col-sm-3 text-right control-label col-form-label">{{ trans('pages/user.fields.name') }}</label>
	                        <div class="col-sm-7">
	                            {!! Form::text('name', old('name'), ['class' => $errors->first('name') ? 'form-control is-invalid' : 'form-control', 'placeholder' => trans('pages/user.fields.name'), 'required' => true]) !!}
	                            @error('name')
	                            	<div class="invalid-feedback">{{ $message }}</div>
	                            @enderror
	                        </div>
	                    </div>
	                    <div class="form-group row">
	                        <label for="email" class="col-sm-3 text-right control-label col-form-label">{{ trans('pages/user.fields.email') }}</label>
	                        <div class="col-sm-7">
	                            {!! Form::email('email', old('email'), ['class' => $errors->first('email') ? 'form-control is-invalid' : 'form-control', 'placeholder' => trans('pages/user.fields.email'), 'required' => true]) !!}
	                            @error('email')
	                            	<div class="invalid-feedback">{{ $message }}</div>
	                            @enderror
	                        </div>
	                    </div>
	                    <div class="form-group row">
	                        <label for="password" class="col-sm-3 text-right control-label col-form-label">{{ trans('pages/user.fields.password') }}</label>
	                        <div class="col-sm-7">
	                            {!! Form::password('password', ['class' => $errors->first('password') ? 'form-control is-invalid' : 'form-control', 'placeholder' => trans('pages/user.fields.password'), 'required' => true]) !!}
	                            @error('password')
	                            	<div class="invalid-feedback">{{ $message }}</div>
	                            @enderror
	                        </div>
	                    </div>
	                    <div class="form-group row">
	                        <label for="password_confirmation" class="col-sm-3 text-right control-label col-form-label">{{ trans('pages/user.fields.password_confirmation') }}</label>
	                        <div class="col-sm-7">
	                           {!! Form::password('password_confirmation', ['class' => $errors->first('password_confirmation') ? 'form-control is-invalid' : 'form-control', 'placeholder' => trans('pages/user.fields.password_confirmation'), 'required' => true]) !!}
	                           @error('password_confirmation')
	                            	<div class="invalid-feedback">{{ $message }}</div>
	                            @enderror
	                        </div>
	                    </div>
	                </div>
	                <div class="border-top">
	                    <div class="card-body">
	                    	<a href="{{ route('user.index') }}" class="btn btn-secondary">{{ trans('pages/user.fields.submit.cancel') }}</a>
	                        {!! Form::submit(trans('pages/user.fields.submit.save'), ['class' => 'btn btn-primary float-right']) !!}
	                    </div>
	                </div>
	            {!! Form::close() !!}
	        </div>
	    </div>
	</div>
</div>

@endsection

@section('styles')
@endsection

@section('scripts')
@endsection