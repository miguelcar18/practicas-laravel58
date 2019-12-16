@extends('home')

@section('page-title')
    {{ trans('pages/product.index.page_title') }}
@endsection

@section('page-content')
@include('layouts.breadcrum', ['title' => trans('pages/product.index.breadcrumb')])
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        {{ trans('pages/product.index.page_header') }}
                        <a href="{{ route('product.create') }}" class="btn btn-success float-right"><i class="fas fa-plus"></i> {{ trans('pages/product.index.create') }}</a>
                    </h5>
                    <br>
                    <div class="table-responsive">
                        <table id="table_datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>{{ trans('pages/product.index.columns.code') }}</th>
                                    <th>{{ trans('pages/product.index.columns.name') }}</th>
                                    <th>{{ trans('pages/product.index.columns.price') }}</th>
                                    <th>{{ trans('pages/product.index.columns.actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                <tr>
                                    <td>{{ $product->code }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ number_format($product->price, 2, ',', '.') }}</td>

                                    <td>
                                        <a href="{{ route('product.edit', $product->id) }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                        <a href="#"
                                            data-id="{{ $product->id }}"
                                            data-title="{{ trans('pages/product.index.destroy.alert.title') }}"
                                            data-text="{{ trans('pages/product.index.destroy.alert.text') }}"
                                            data-confirm="{{ trans('pages/product.index.destroy.alert.confirm') }}"
                                            data-cancel="{{ trans('pages/product.index.destroy.alert.cancel') }}"
                                            class="btn btn-danger tooltip-error"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>{{ trans('pages/product.index.columns.code') }}</th>
                                    <th>{{ trans('pages/product.index.columns.name') }}</th>
                                    <th>{{ trans('pages/product.index.columns.price') }}</th>
                                    <th>{{ trans('pages/product.index.columns.actions') }}</th>
                                </tr>
                            </tfoot>
                        </table>
                        {!! Form::open(array('route' => array('product.destroy', 'REPLACE_ID'), 'method' => 'DELETE', 'role' => 'form', 'id' => 'form-delete')) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('styles')
@endsection

@section('scripts')
@endsection
