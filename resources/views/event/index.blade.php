@extends('home')

@section('page-title')
    {{ trans('pages/event.index.page_title') }}
@endsection

@section('page-content')
@include('layouts.breadcrum', ['title' => trans('pages/event.index.breadcrumb')])
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        {{ trans('pages/event.index.page_header') }}
                        <a href="{{ route('event.create') }}" class="btn btn-success float-right"><i class="fas fa-plus"></i> {{ trans('pages/event.index.create') }}</a>
                    </h5>
                    <br>
                    <div class="table-responsive">
                        <table id="table_datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>{{ trans('pages/event.index.columns.name') }}</th>
                                    <th>{{ trans('pages/event.index.columns.address') }}</th>
                                    <th>{{ trans('pages/event.index.columns.actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($events as $event)
                                <tr>
                                    <td>{{ $event->name }}</td>
                                    <td>{{ $event->address ?? 'N/A' }}</td>
                                    <td>
                                        <a href="{{ route('event.edit', $event->id) }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                        <a href="#"
                                            data-id="{{ $event->id }}"
                                            data-title="{{ trans('pages/event.index.destroy.alert.title') }}"
                                            data-text="{{ trans('pages/event.index.destroy.alert.text') }}"
                                            data-confirm="{{ trans('pages/event.index.destroy.alert.confirm') }}"
                                            data-cancel="{{ trans('pages/event.index.destroy.alert.cancel') }}"
                                            class="btn btn-danger tooltip-error"><i class="fas fa-trash"></i></a>
                                        <a href="{{ route('event.bill', $event->id) }}" class="btn btn-info" target="_blank"><i class=" fas fa-file-pdf"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>{{ trans('pages/event.index.columns.name') }}</th>
                                    <th>{{ trans('pages/event.index.columns.address') }}</th>
                                    <th>{{ trans('pages/event.index.columns.actions') }}</th>
                                </tr>
                            </tfoot>
                        </table>
                        {!! Form::open(array('route' => array('event.destroy', 'REPLACE_ID'), 'method' => 'DELETE', 'role' => 'form', 'id' => 'form-delete')) !!}
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
