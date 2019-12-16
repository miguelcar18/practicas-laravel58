@extends('home')

@section('page-title')
    {{ trans('pages/user.index.page_title') }}
@endsection

@section('page-content')
@include('layouts.breadcrum', ['title' => trans('pages/user.index.breadcrumb')])
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        {{ trans('pages/user.index.page_header') }}
                        <a href="{{ route('user.create') }}" class="btn btn-success float-right"><i class="fas fa-plus"></i> {{ trans('pages/user.index.create') }}</a>
                    </h5>
                    <br>
                    <div class="table-responsive">
                        <table id="table_datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>{{ trans('pages/user.index.columns.name') }}</th>
                                    <th>{{ trans('pages/user.index.columns.email') }}</th>
                                    <th>{{ trans('pages/user.index.columns.actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        <a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                        <a href="#"
                                            data-id="{{ $user->id }}"
                                            data-title="{{ trans('pages/user.index.destroy.alert.title') }}"
                                            data-text="{{ trans('pages/user.index.destroy.alert.text') }}"
                                            data-confirm="{{ trans('pages/user.index.destroy.alert.confirm') }}"
                                            data-cancel="{{ trans('pages/user.index.destroy.alert.cancel') }}"
                                            class="btn btn-danger tooltip-error"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>{{ trans('pages/user.index.columns.name') }}</th>
                                    <th>{{ trans('pages/user.index.columns.email') }}</th>
                                    <th>{{ trans('pages/user.index.columns.actions') }}</th>
                                </tr>
                            </tfoot>
                        </table>
                        {!! Form::open(array('route' => array('user.destroy', 'REPLACE_ID'), 'method' => 'DELETE', 'role' => 'form', 'id' => 'form-delete')) !!}
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
