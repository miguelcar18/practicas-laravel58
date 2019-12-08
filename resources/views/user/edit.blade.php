@extends('home')

@section('page-title')
    {{ trans('pages/login.meta.title') }}
@endsection

@section('page-content')
@include('layouts.breadcrum', ['title' => 'Usuarios'])

<div class="container-fluid">
	<div class="row">
	    <div class="col-md-12">
	        <div class="card">
	            {!! Form::open(['route' => ['user.update', $user], 'class' => 'form-horizontal']) !!}
	            	{{ method_field('PUT') }}
	                <div class="card-body">
	                    <div class="form-group row">
	                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Nombre</label>
	                        <div class="col-sm-9">
	                            {!! Form::text('name', old('name') ?? $user->name, ['class' => 'form-control', 'required' => true]) !!}
	                        </div>
	                    </div>
	                    <div class="form-group row">
	                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Email</label>
	                        <div class="col-sm-9">
	                            {!! Form::email('email', old('email') ?? $user->email, ['class' => 'form-control', 'required' => true]) !!}
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

@endsection

@section('styles')
@endsection

@section('scripts')
@endsection