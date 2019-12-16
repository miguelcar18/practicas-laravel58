@extends('home')

@section('page-title')
    {{ trans('pages/category.index.page_title') }}
@endsection

@section('page-content')
@include('layouts.breadcrum', ['title' => trans('pages/category.index.breadcrumb')])
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        {{ trans('pages/category.index.page_header') }}
                        <a href="{{ route('category.create') }}" class="btn btn-success float-right"><i class="fas fa-plus"></i> {{ trans('pages/category.index.create') }}</a>
                    </h5>
                    <br>
                    <div class="table-responsive">
                        <table id="table_datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>{{ trans('pages/category.index.columns.name') }}</th>
                                    <th>{{ trans('pages/category.index.columns.description') }}</th>
                                    <th>{{ trans('pages/category.index.columns.actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $category)
                                <tr>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->description ?? 'N/A' }}</td>
                                    <td>
                                        <a href="{{ route('category.edit', $category->id) }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                        <a href="#"
                                            data-id="{{ $category->id }}"
                                            data-title="{{ trans('pages/category.index.destroy.alert.title') }}"
                                            data-text="{{ trans('pages/category.index.destroy.alert.text') }}"
                                            data-confirm="{{ trans('pages/category.index.destroy.alert.confirm') }}"
                                            data-cancel="{{ trans('pages/category.index.destroy.alert.cancel') }}"
                                            class="btn btn-danger tooltip-error"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>{{ trans('pages/category.index.columns.name') }}</th>
                                    <th>{{ trans('pages/category.index.columns.description') }}</th>
                                    <th>{{ trans('pages/category.index.columns.actions') }}</th>
                                </tr>
                            </tfoot>
                        </table>
                        {!! Form::open(array('route' => array('category.destroy', 'REPLACE_ID'), 'method' => 'DELETE', 'role' => 'form', 'id' => 'form-delete')) !!}
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
