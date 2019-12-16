@extends('home')

@section('page-title')
    {{ trans('pages/category.create.page_title') }}
@endsection

@section('page-content')
@include('layouts.breadcrum', ['title' => trans('pages/category.create.breadcrumb')])

@endsection

@section('styles')
@endsection

@section('scripts')
@endsection
