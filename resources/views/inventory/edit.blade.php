@extends('home')

@section('page-title')
    {{ trans('pages/inventory.edit.page_title') }}
@endsection

@section('page-content')
@include('layouts.breadcrum', ['title' => trans('pages/inventory.edit.breadcrumb')])

<div class="container-fluid">
	<div class="row">
	    <div class="col-md-12">
	        <div class="card">
	            {!! Form::open(['route' => ['inventory.update', $inventory], 'class' => 'form-horizontal']) !!}
	            	{{ method_field('PUT') }}
	                <div class="card-body">
	                	<div class="form-group row">
	                        <label for="product_id" class="col-sm-3 text-right control-label col-form-label">{{ trans('pages/inventory.fields.product_id') }}</label>
	                        <div class="col-sm-7">
	                            {!! Form::select('product_id', $products,  old('product_id') ?? $inventory->product_id, ['class' => 'form-control select2']) !!}
	                            @error('product_id')
	                            	<div class="invalid-feedback">{{ $message }}</div>
	                            @enderror
	                        </div>
	                    </div>
	                    <div class="form-group row">
	                        <label for="quantity" class="col-sm-3 text-right control-label col-form-label">{{ trans('pages/inventory.fields.quantity') }}</label>
	                        <div class="col-sm-7">
	                            {!! Form::input('number', 'quantity', old('quantity') ?? $inventory->quantity, ['class' => $errors->first('quantity') ? 'form-control is-invalid' : 'form-control', 'placeholder' => trans('pages/inventory.fields.quantity'), 'required' => true, 'min' => '1']) !!}
	                            @error('quantity')
	                            	<div class="invalid-feedback">{{ $message }}</div>
	                            @enderror
	                        </div>
	                    </div>
	                    <div class="form-group row">
	                        <label for="type" class="col-sm-3 text-right control-label col-form-label">{{ trans('pages/inventory.fields.type') }}</label>
	                        <div class="col-sm-7">
	                            {!! Form::select('type', $types,  old('type') ?? $inventory->type, ['class' => 'form-control select2']) !!}
	                            @error('type')
	                            	<div class="invalid-feedback">{{ $message }}</div>
	                            @enderror
	                        </div>
	                    </div>
	                    <div class="form-group row">
	                        <label for="observations" class="col-sm-3 text-right control-label col-form-label">{{ trans('pages/inventory.fields.observations') }}</label>
	                        <div class="col-sm-9">
	                            {{ Form::textarea("observations",  old('observations') ?? $inventory->observations, ['class' => $errors->first('observations') ? 'form-control is-invalid' : 'form-control', "placeholder" => trans('pages/inventory.fields.observations')]) }}
	                            @error('observations')
	                            	<div class="invalid-feedback">{{ $message }}</div>
	                            @enderror
	                        </div>
	                    </div>
	                </div>
	                <div class="border-top">
	                    <div class="card-body">
	                    	<a href="{{ route('inventory.index') }}" class="btn btn-secondary">{{ trans('pages/inventory.fields.submit.cancel') }}</a>
	                        {!! Form::submit(trans('pages/inventory.fields.submit.save'), ['class' => 'btn btn-primary float-right']) !!}
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
