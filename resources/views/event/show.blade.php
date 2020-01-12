@extends('home')

@section('page-title')
    {{ trans('pages/event.create.page_title') }}
@endsection

@section('page-content')
@include('layouts.breadcrum', ['title' => trans('pages/event.create.breadcrumb')])

@endsection

@section('styles')
@endsection

@section('scripts')
@endsection
