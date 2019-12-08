@extends('home')

@section('content')
@include('layouts.breadcrum', ['title' => 'Registrar usuario'])

<div class="container-fluid">
	<div class="row">
	    <div class="col-md-12">
	        <div class="card">
	            {!! Form::open(['route' => ['user.store'], 'class' => 'form-horizontal']) !!}
	                <div class="card-body">
	                    <div class="form-group row">
	                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Nombre</label>
	                        <div class="col-sm-9">
	                            {!! Form::text('name', old('name'), ['class' => 'form-control', 'required' => true]) !!}
	                        </div>
	                    </div>
	                    <div class="form-group row">
	                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Email</label>
	                        <div class="col-sm-9">
	                            {!! Form::email('email', old('email'), ['class' => 'form-control', 'required' => true]) !!}
	                        </div>
	                    </div>
	                    <div class="form-group row">
	                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Contraseña</label>
	                        <div class="col-sm-9">
	                            {!! Form::password('password', ['class' => 'form-control', 'required' => true]) !!}
	                        </div>
	                    </div>
	                    <div class="form-group row">
	                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Confirmar contraseña</label>
	                        <div class="col-sm-9">
	                           {!! Form::password('password_confirmation', ['class' => 'form-control', 'required' => true]) !!}
	                        </div>
	                    </div>
	                </div>
	                <div class="border-top">
	                    <div class="card-body">
	                        {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
	                    </div>
	                </div>
	            {!! Form::close() !!}
	        </div>
	    </div>
	</div>
</div>

@stop

@section('styles')
@stop

@section('javascripts')
@stop