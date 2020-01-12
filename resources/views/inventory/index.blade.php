@extends('home')

@section('page-title')
    {{ trans('pages/inventory.index.page_title') }}
@endsection

@section('page-content')
@include('layouts.breadcrum', ['title' => trans('pages/inventory.index.breadcrumb')])
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        {{ trans('pages/inventory.index.page_header') }}
                        <a href="{{ route('inventory.create') }}" class="btn btn-success float-right"><i class="fas fa-plus"></i> {{ trans('pages/inventory.index.create') }}</a>
                    </h5>
                    <br>
                    <div class="table-responsive">
                        <table id="table_datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>{{ trans('pages/inventory.index.columns.product') }}</th>
                                    <th>{{ trans('pages/inventory.index.columns.type') }}</th>
                                    <th>{{ trans('pages/inventory.index.columns.quantity') }}</th>
                                    <th>{{ trans('pages/inventory.index.columns.actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($inventories as $inventory)
                                <tr>
                                    <td>{{ $inventory->product->name }}</td>
                                    <td>{{ __($inventory->type) }}</td>
                                    <td>{{ $inventory->quantity }}</td>

                                    <td>
                                        <a href="{{ route('inventory.edit', $inventory->id) }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                        <a href="#"
                                            data-id="{{ $inventory->id }}"
                                            data-title="{{ trans('pages/inventory.index.destroy.alert.title') }}"
                                            data-text="{{ trans('pages/inventory.index.destroy.alert.text') }}"
                                            data-confirm="{{ trans('pages/inventory.index.destroy.alert.confirm') }}"
                                            data-cancel="{{ trans('pages/inventory.index.destroy.alert.cancel') }}"
                                            class="btn btn-danger tooltip-error"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>{{ trans('pages/inventory.index.columns.product') }}</th>
                                    <th>{{ trans('pages/inventory.index.columns.type') }}</th>
                                    <th>{{ trans('pages/inventory.index.columns.quantity') }}</th>
                                    <th>{{ trans('pages/inventory.index.columns.actions') }}</th>
                                </tr>
                            </tfoot>
                        </table>
                        {!! Form::open(array('route' => array('inventory.destroy', 'REPLACE_ID'), 'method' => 'DELETE', 'role' => 'form', 'id' => 'form-delete')) !!}
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
