@extends('home')

@section('page-title')
    {{ trans('pages/product.create.page_title') }}
@endsection

@section('page-content')
@include('layouts.breadcrum', ['title' => trans('pages/product.create.breadcrumb')])

<div class="container-fluid">
	<div class="row">
	    <div class="col-md-12">
	        <div class="card">
	            {!! Form::open(['route' => ['product.store'], 'class' => 'form-horizontal', 'files' => true]) !!}
	                <div class="card-body">
	                	<div class="form-group row">
	                        <label for="category_id" class="col-sm-3 text-right control-label col-form-label">{{ trans('pages/product.fields.category_id') }}</label>
	                        <div class="col-sm-7">
	                            {!! Form::select('category_id', $categories,  old('category_id'), ['class' => 'form-control select2']) !!}
	                            @error('category_id')
	                            	<div class="invalid-feedback">{{ $message }}</div>
	                            @enderror
	                        </div>
	                    </div>
	                	<div class="form-group row">
	                        <label for="code" class="col-sm-3 text-right control-label col-form-label">{{ trans('pages/product.fields.code') }}</label>
	                        <div class="col-sm-7">
	                            {!! Form::text('code', old('code'), ['class' => $errors->first('code') ? 'form-control is-invalid' : 'form-control', 'placeholder' => trans('pages/product.fields.code'), 'required' => true]) !!}
	                            @error('code')
	                            	<div class="invalid-feedback">{{ $message }}</div>
	                            @enderror
	                        </div>
	                    </div>
	                    <div class="form-group row">
	                        <label for="name" class="col-sm-3 text-right control-label col-form-label">{{ trans('pages/product.fields.name') }}</label>
	                        <div class="col-sm-7">
	                            {!! Form::text('name', old('name'), ['class' => $errors->first('name') ? 'form-control is-invalid' : 'form-control', 'placeholder' => trans('pages/product.fields.name'), 'required' => true]) !!}
	                            @error('name')
	                            	<div class="invalid-feedback">{{ $message }}</div>
	                            @enderror
	                        </div>
	                    </div>
	                    <div class="form-group row">
	                        <label for="price" class="col-sm-3 text-right control-label col-form-label">{{ trans('pages/product.fields.price') }}</label>
	                        <div class="col-sm-7">
	                            {!! Form::input('number', 'price', old('price'), ['class' => $errors->first('price') ? 'form-control is-invalid' : 'form-control', 'placeholder' => trans('pages/product.fields.price'), 'required' => true, 'step' => 'any']) !!}
	                            @error('price')
	                            	<div class="invalid-feedback">{{ $message }}</div>
	                            @enderror
	                        </div>
	                    </div>
	                    <div class="form-group row">
	                        <label for="description" class="col-sm-3 text-right control-label col-form-label">{{ trans('pages/product.fields.description') }}</label>
	                        <div class="col-sm-7">
	                        	{{ Form::textarea("description", null, ['class' => $errors->first('description') ? 'form-control is-invalid' : 'form-control', "placeholder" => trans('pages/product.fields.description')]) }}
	                            @error('description')
	                            	<div class="invalid-feedback">{{ $message }}</div>
	                            @enderror
	                        </div>
	                    </div>
	                </div>
	                <div class="border-top">
	                    <div class="card-body">
	                    	<a href="{{ route('product.index') }}" class="btn btn-secondary">{{ trans('pages/product.fields.submit.cancel') }}</a>
	                        {!! Form::submit(trans('pages/product.fields.submit.save'), ['class' => 'btn btn-primary float-right']) !!}
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
