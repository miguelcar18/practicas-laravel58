@extends('home')

@section('page-title')
    {{ trans('pages/category.create.page_title') }}
@endsection

@section('page-content')
@include('layouts.breadcrum', ['title' => trans('pages/category.create.breadcrumb')])

<div class="container-fluid">
	<div class="row">
	    <div class="col-md-12">
	        <div class="card">
	            {!! Form::open(['route' => ['category.store'], 'class' => 'form-horizontal', 'files' => true]) !!}
	                <div class="card-body">
	                    <div class="form-group row">
	                        <label for="name" class="col-sm-3 text-right control-label col-form-label">{{ trans('pages/category.fields.name') }}</label>
	                        <div class="col-sm-7">
	                            {!! Form::text('name', old('name'), ['class' => $errors->first('name') ? 'form-control is-invalid' : 'form-control', 'placeholder' => trans('pages/category.fields.name'), 'required' => true]) !!}
	                            @error('name')
	                            	<div class="invalid-feedback">{{ $message }}</div>
	                            @enderror
	                        </div>
	                    </div>
	                    <div class="form-group row">
	                        <label for="description" class="col-sm-3 text-right control-label col-form-label">{{ trans('pages/category.fields.description') }}</label>
	                        <div class="col-sm-7">
	                        	{{ Form::textarea("description", null, ['class' => $errors->first('description') ? 'form-control is-invalid' : 'form-control', "placeholder" => trans('pages/category.fields.description')]) }}
	                            @error('description')
	                            	<div class="invalid-feedback">{{ $message }}</div>
	                            @enderror
	                        </div>
	                    </div>
	                </div>
	                <div class="border-top">
	                    <div class="card-body">
	                    	<a href="{{ route('category.index') }}" class="btn btn-secondary">{{ trans('pages/category.fields.submit.cancel') }}</a>
	                        {!! Form::submit(trans('pages/category.fields.submit.save'), ['class' => 'btn btn-primary float-right']) !!}
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
