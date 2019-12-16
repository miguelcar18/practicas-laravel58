@extends('home')

@section('page-title')
    {{ trans('pages/user.edit.page_title') }}
@endsection

@section('page-content')
@include('layouts.breadcrum', ['title' => trans('pages/user.edit.breadcrumb')])

<div class="container-fluid">
	<div class="row">
	    <div class="col-md-12">
	        <div class="card">
	            {!! Form::open(['route' => ['user.update', $user], 'class' => 'form-horizontal']) !!}
	            	{{ method_field('PUT') }}
	                <div class="card-body">
	                    <div class="form-group row">
	                        <label for="name" class="col-sm-3 text-right control-label col-form-label">{{ trans('pages/user.fields.name') }}</label>
	                        <div class="col-sm-9">
	                            {!! Form::text('name', old('name') ?? $user->name, ['class' => $errors->first('name') ? 'form-control is-invalid' : 'form-control', 'required' => true]) !!}
	                            @error('name')
	                            	<div class="invalid-feedback">{{ $message }}</div>
	                            @enderror
	                        </div>
	                    </div>
	                    <div class="form-group row">
	                        <label for="email" class="col-sm-3 text-right control-label col-form-label">{{ trans('pages/user.fields.email') }}</label>
	                        <div class="col-sm-9">
	                            {!! Form::email('email', old('email') ?? $user->email, ['class' => $errors->first('email') ? 'form-control is-invalid' : 'form-control', 'required' => true]) !!}
	                            @error('email')
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
